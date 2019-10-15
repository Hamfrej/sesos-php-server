<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        return view('classrooms.index', [
            'classrooms' => $classrooms
        ]);
    }

    public function show(Classroom $classroom)
    {
        return $classroom;
    }

    public function create()
    {
        return 'Here will be the view';
    }

    public function store(Request $request)
    {
        $classroom = Classroom::create($request->all());

        return redirect('classrooms');
    }

    public function edit(Classroom $classroom)
    {
        return $classroom;
    }

    public function update(Classroom $classroom, Request $request)
    {
        $classroom->update($request->all());

        return $classroom;
    }

    public function delete(Classroom $classroom)
    {
        $classroom->delete();

        return 'Deleted';
    }
}
