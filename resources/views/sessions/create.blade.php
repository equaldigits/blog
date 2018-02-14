@extends('layouts.layout')

@section('content')
    <div class="col-md-8">
        <h1>Ligar</h1>

        <form method="POST" action="/sessions">
            {{ csrf_field() }}

        <div class="form-group">
            <label for="mail">Endereço Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>


        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ligar</button>
        </div>

        @include('layouts.errors')
        </form>


    </div>
@endsection