<?php

namespace App\Http\Controllers;

use App\Models\AttendanceList;

use App\Models\Classroom;
use App\Models\Lesson;
use DateTime;
use Illuminate\Http\Request;

class AttendanceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendanceLists = AttendanceList::with(['classroom', 'lesson'])->get();
        return view('attendance-lists.index', [
            'attendanceLists' => $attendanceLists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::all();
        $lessons = Lesson::all();
        return view('attendance-lists.create', [
            'classrooms' => $classrooms,
            'lessons' => $lessons
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendanceList = new AttendanceList();
        $start_date = DateTime::createFromFormat('d/m/Y H:i', $request->get('start_date'));
        $attendanceList->start_date = $start_date;
        $end_date = DateTime::createFromFormat('d/m/Y H:i', $request->get('end_date'));
        $attendanceList->end_date = $end_date;
        $classroom = Classroom::findOrFail($request->get('classroom_id'));
        $lesson = Lesson::findOrFail($request->get('lesson_id'));
        $attendanceList->classroom()->associate($classroom);
        $attendanceList->lesson()->associate($lesson);
        $attendanceList->save();
        return $attendanceList;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\AttendanceList $attendanceList
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceList $attendanceList)
    {
        return $attendanceList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\AttendanceList $attendanceList
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceList $attendanceList, Request $request)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\AttendanceList $attendanceList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceList $attendanceList)
    {
        $attendanceList->update($request->all());
        return $attendanceList;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\AttendanceList $attendanceList
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceList $attendanceList)
    {
        $attendanceList->delete();
        return 'delete';
    }

    public function showAttendanceRecords(Request $request, $attendanceListID)
    {
        $attendanceList = AttendanceList::with('attendanceRecords.user')->find($attendanceListID);
        return view('attendance-lists.showAttendanceRecords', [
            'attendanceList' => $attendanceList
        ]);
    }
}
