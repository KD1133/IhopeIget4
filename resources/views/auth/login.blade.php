@extends('layout')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2>Pieslēgties</h2>

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
        @if ($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        <div>
            <button type="submit"> Pieslēgties </button>
        </div>

    </form>
@endsection
