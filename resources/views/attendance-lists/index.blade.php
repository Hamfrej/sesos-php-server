@extends('layout')

@section('title')
    <title>Listy obecności</title>
@endsection

@section('content')
    <div class="row mt-md-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between p-1">
                <div class="">
                    <h2>Listy obecności</h2>
                </div>
                <div class="">
                    <a href="/attendance-lists/create" class="btn btn-primary">Dodaj nową listę obecności</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 ">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Zajęcia</th>
                    <th scope="col">Klasa</th>
                    <th scope="col">Data rozpoczęcia</th>
                    <th scope="col">Data zakończenia</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($attendanceLists as $attendanceList)
                    <tr>
                        <th scope="row"></th>
                        <th>{{ $attendanceList->lesson->name }}</th>
                        <th>{{ $attendanceList->classroom->name }}</th>
                        <th>{{ $attendanceList->start_date}}</th>
                        <th>{{ $attendanceList->end_date}}</th>
                        <th>
                            <div class="btn-group bt">
                                <a href="/attendance-lists/{{ $attendanceList->id}}/attendance-records" class="btn btn-primary">Pokaż listę</a>
                                <button class="btn btn-secondary">Edytuj listę</button>
                                <button class="btn btn-danger">Usuń listę</button>
                            </div>
                        </th>
                    </tr>
                @endforeach()
                </tbody>
            </table>
        </div>
    </div>
@endsection

