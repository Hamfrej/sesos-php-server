<?php

namespace App\Http\Controllers\Api;

use App\Models\AttendanceList;
use App\Models\AttendanceRecord;
use App\Models\Classroom;
use App\Models\Lesson;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getCurrentLecture(Request $request, $classroom_name)
    {
        date_default_timezone_set('Europe/Warsaw');
        $classroom = Classroom::where('name', $classroom_name)->first();
        $list = AttendanceList::where('classroom_id', $classroom->id)
            ->where('start_date', '<=', date("Y-m-d H:i:s"))
            ->where('end_date', '>=', date("Y-m-d H:i:s"))
            ->with('lesson')
            ->get();
        return $list;
    }

    public function addAttendanceRecord(Request $request, $attendance_list_id)
    {
        $attendance_list = AttendanceList::findOrFail($attendance_list_id);

        $attendance_record = new AttendanceRecord();
        $attendance_record->attendanceList()->associate($attendance_list);
        $attendance_record->nfc = $request->get('nfc_id');
        $user = User::where('nfc_id', $request->get('nfc_id'))->first();
        if ($user) {
            $attendance_record->user()->associate($user->id);
        }
        if ($attendance_record->save()) {
            return response('Zapisano', 200);
        } else {
            return response('Error', 500);
        }

    }
}
