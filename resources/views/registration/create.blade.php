@extends ('layouts.layout')

@section ('content')

    <div class="col-sm-8">
        <form method="POST" action="/register">
            {{ csrf_field() }}

            <div class ="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class ="form-group">
                    <label for="name">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class ="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class ="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registar</button>
            </div>

            <div class="form-group">
                @include('layouts.errors')
            </div>

        </form>

    </div>
@endsection

