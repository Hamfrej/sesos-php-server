@extends('layout')

@section('title')
    <title>Użytkownicy</title>
@endsection

@section('content')
    <div class="row mt-md-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between p-1">
                <div class="">
                    <h2>Użytkownicy</h2>
                </div>
                <div class="">
                    <a href="/users/create" class="btn btn-primary">Dodaj nowego użytkownika</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 ">

            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imię i nazwisko</th>
                    <th scope="col">Email</th>
                    <th scope="col">Numer albumu</th>
                    <th scope="col">NFC</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row"></th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->university_id }}</th>
                        <th>{{ $user->nfc_id }}</th>
                        <th>
                            <div class="btn-group bt">
                                <a href="/users/{{$user->id}}/edit" class="btn btn-secondary"> Edytuj użytkownika</a>
                                <form action="/users/{{$user->id}}" method="POST">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Usuń użytkownika</button>
                                </form>
                            </div>
                        </th>
                    </tr>
                @endforeach()
                </tbody>
            </table>
        </div>
    </div>
@endsection

