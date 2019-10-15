@extends('layout')

@section('additional_scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css"/>
@endsection

@section('title')
    <title>Lista klas</title>
@endsection

@section('content')
    <div class="row mt-md-3">
        <div class="col-md-6">
            <form action="/users" method="POST">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label for="name">Imię i nazwisko</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="imieinazwisko"
                           placeholder="Podaj imię i nazwisko" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="email"
                           placeholder="Podaj adres email" required>
                </div>
                <div class="form-group">
                    <label for="password">Hasło</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="email"
                           placeholder="Podaj hasło" required>
                </div>
                <div class="form-group">
                    <label for="university_id">Numer albumu</label>
                    <input type="number" class="form-control" name="university_id" id="university_id" aria-describedby="numer albumu"
                           placeholder="Podaj numer albumu" required>
                </div>
                <div class="form-group">
                    <label for="nfc_id">Identyfikator NFC</label>
                    <input type="number" class="form-control" name="nfc_id" id="nfc_id" aria-describedby="numer albumu"
                           placeholder="Podaj identyfikator NFC" required>
                </div>

                <button type="submit" class="btn btn-primary">Stwórz użytkownika</button>
            </form>
        </div>

    </div>
@endsection