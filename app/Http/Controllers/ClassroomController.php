<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        return Classroom::all();
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

        return $classroom;
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
