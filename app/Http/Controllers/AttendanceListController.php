<?php

namespace App\Http\Controllers;

use App\Models\AttendanceList;
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
        $attendanceLists =  AttendanceList::all();
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
        return 'add';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendanceList = AttendanceList::create($request->all());
        return $attendanceList;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendanceList  $attendanceList
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceList $attendanceList)
    {
        return $attendanceList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AttendanceList  $attendanceList
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceList $attendanceList, Request $request)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AttendanceList  $attendanceList
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
     * @param  \App\AttendanceList  $attendanceList
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceList $attendanceList)
    {
        $attendanceList->delete();
        return 'delete';
    }
}
