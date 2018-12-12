@extends('layout')

@section('content')
    <form method="POST" action="/users/{{ $user->username }}">
        {{ method_field('PATCH') }}

        {{ csrf_field() }}

        <h2>Rediģēt</h2>

        <div class="form-group">
            <input type="text" name="username" required="true" value="{{$user->username}}">
            <label for="username">Lietotājvārds</label>
            @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input type="text" name="firstname" value="{{$user->firstname}}">
            <label for="firstname">Vārds</label>
        </div>

        <div class="form-group">
            <input type="text" name="lastname" value="{{$user->lastname}}">
            <label for="lastname">Uzvārds</label>
        </div>

        <div class="form-group">
            <input type="text" name="gender" value="{{$user->gender}}">
            <label for="gender">Dzimums</label>
        </div>

        <div class="form-group">
            <input type="date" name="birth_day" value="{{$user->birth_day}}">
            <label for="birth_day">Dzimšanas diena</label>
        </div>

        <div>
            <button type="submit"> Rediģēt </button>
        </div>
    </form>
    <form method="POST" action="/users/{{ $user->username }}">

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <div>
            <button type="submit"> dzēst leitotāju </button>
        </div>
    </form>
@endsection
