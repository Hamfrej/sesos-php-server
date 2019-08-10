@extends('layout')

@section('title')
    <title>Lista klas</title>
@endsection

@section('content')
    <div class="row mt-md-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between p-1">
                <div class="">
                    <h2 >Lista dostępnych sal lekcyjnych</h2>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

