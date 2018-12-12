@extends('layout')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h2>Reģistrēties</h2>

        <div class="form-group">
            <input type="text" name="username" required="true">
            <label for="username">Lietotājvārds</label>
            @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <input type="password" name="password" required="true">
            <label for="password">Parole</label>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        {{--<div class="form-group">--}}
            {{--<input type="password" name="password-confirm" required="true">--}}
            {{--<label for="password-confirm">Apstiprināt paroli </label>--}}
        {{--</div>--}}

        <div class="form-group">
            <input type="text" name="firstname">
            <label for="firstname">Vārds</label>
        </div>

        <div class="form-group">
            <input type="text" name="lastname">
            <label for="lastname">Uzvārds</label>
        </div>

        <div class="form-group">
            <input type="text" name="gender">
            <label for="gender">Dzimums</label>
        </div>

        <div class="form-group">
            <input type="date" name="birth_day">
            <label for="birth_day">Dzimšanas diena</label>
        </div>

        <div>
            <button type="submit"> Reģistrēties </button>
        </div>
    </form>
@endsection
