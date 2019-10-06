@extends('layout')

@section('title')
    <title>Listy obecności</title>
@endsection

@section('content')
    <div class="row mt-md-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between p-1">
                <div class="">
                    <h2>Wpisy obecności dla listy {{ $attendanceList->lesson->name }} {{ $attendanceList->start_date }}</h2>
                </div>
                <div class="btn-group bt">
                    <a href="/attendance-lists" class="btn btn-primary">Wróć do list obecności</a>
                    <a href="/attendance-lists" class="btn btn-primary">Dodaj użytkownika</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 ">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Użytkownik</th>
                    <th scope="col">NFC</th>
                    <th scope="col">Data wpisu</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($attendanceList->attendanceRecords as $attendanceRecord)
                    <tr>
                        <th scope="row"></th>
                        <th>{{ $attendanceRecord->user->name }}</th>
                        <th>{{ $attendanceRecord->nfc }}</th>
                        <th>{{ $attendanceRecord->created_at}}</th>
                        <th>
                            <div class="btn-group bt">
                                <button class="btn btn-danger">Usuń wpis</button>
                            </div>
                        </th>
                    </tr>
                @endforeach()
                </tbody>
            </table>
        </div>
    </div>
@endsection

