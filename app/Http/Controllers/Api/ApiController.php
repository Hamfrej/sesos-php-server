<?php

namespace App\Http\Controllers\Api;

use App\Models\AttendanceList;
use App\Models\Classroom;
use App\Models\Lesson;
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
}
