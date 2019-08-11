@extends('layout')

@section('title')
    <title>Lista klas</title>
@endsection

@section('content')
    <div class="row mt-md-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between p-1">
                <div class="">
                    <h2>Lista dostępnych sal lekcyjnych</h2>
                </div>
                <div class="">
                    <button class="btn btn-primary">Dodaj nową salę</button>
                </div>
            </div>
        </div>
        <div class="col-md-12 ">

            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($classrooms as $classroom)
                    <tr>
                        <th scope="row"></th>
                        <th>{{ $classroom->name }}</th>
                        <th>{{ $classroom->description }}</th>
                        <th>
                            <div class="btn-group bt">
                                <button class="btn btn-secondary">Edytuj salę</button>
                                <button class="btn btn-danger">Usuń salę</button>
                            </div>
                        </th>
                    </tr>
                @endforeach()
                </tbody>
            </table>
        </div>
    </div>
@endsection

