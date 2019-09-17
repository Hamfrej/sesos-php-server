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
            <form action="/lessons" method="POST">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label for="name">Nazwa zajęć</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                           placeholder="Wprowadź nazwę zajęć" required>
                </div>
                <div class="form-group">
                    <label for="description">Opis</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="classroom">Sala lekcyjna</label>--}}
{{--                    <select class="form-control" id="classroom" name="classroom" required>--}}
{{--                        @foreach($classrooms as $classroom)--}}
{{--                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="start_date">Godzina rozpoczęcia zajęć</label>--}}
{{--                    <div class="input-group date" id="start_date" data-target-input="nearest">--}}
{{--                        <input type="text" class="form-control datetimepicker-input" data-target="#start_date"--}}
{{--                               name="start_date"/>--}}
{{--                        <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">--}}
{{--                            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="end_date">Godzina zakończenia zajęć</label>--}}
{{--                    <div class="input-group date" id="end_date" data-target-input="nearest">--}}
{{--                        <input type="text" class="form-control datetimepicker-input" data-target="#start_date"--}}
{{--                               name="end_date"/>--}}
{{--                        <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">--}}
{{--                            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <button type="submit" class="btn btn-primary">Stwórz zajęcia</button>
            </form>
        </div>

    </div>
    <script type="text/javascript">
        $(function () {
            $('#start_date').datetimepicker({
                format: 'HH:mm'
            });
            $('#end_date').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
@endsection