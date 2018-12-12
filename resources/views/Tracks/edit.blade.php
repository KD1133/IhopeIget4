@extends('layout')


@section('content')
    @if (Auth::check() && auth()->user()->power == 2)
        <h2>Rediģēt trasi</h2>

        <form method="POST" action="/tracks/{{ $track->id }}" autocomplete="off">

            {{ method_field('PATCH') }}

            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" name="name" required="true" value="{{ $track->name }}">
                <label for="name">nosaukums</label>
            </div>
            <div class="form-group">
                <input type="text" name="country" value="{{ $track->country }}">
                <label for="country">valsts</label>
            </div>
            <div class="form-group">
                <input type="text" name="regioin" value="{{ $track->regioin }}">
                <label for="regioin">reģions</label>
            </div>
            <div class="form-group">
                <input type="text" name="city" value="{{ $track->city }}">
                <label for="city">pilsēta</label>
            </div>
            <div class="form-group">
                <input type="text" name="street" value="{{ $track->street }}">
                <label for="street">iela</label>
            </div>
            <div class="form-group">
                <input type="text" name="number" value="{{ $track->number }}">
                <label for="number">adreses numurs</label>
            </div>
            <div class="form-group">
                <input type="text" name="phone" value="{{ $track->phone }}">
                <label for="phone">telefona numurs</label>
            </div>
            <div class="form-group">
                <input type="text" name="email" value="{{ $track->email }}">
                <label for="email">e-pasts</label>
            </div>
            <div class="form-group">
                <input type="number" name="lenght" value="{{ $track->lenght }}">
                <label for="lenght">garums(metros)</label>
            </div>
            <div class="form-group">
                <input type="text" name="surface" value="{{ $track->surface }}">
                <label for="surface">segums</label>
            </div>
            <div class="form-group">
                <textarea type="text" name="accesability" required="true">{{ $track->accesability }}</textarea>
                <label for="accesability">pieejamības apraksts</label>
            </div>
            <div>
                <button type="submit"> rediģēt trasi </button>
            </div>
        </form>
        <br>
        <form method="POST" action="/tracks/{{ $track->id }}">

            {{ method_field('DELETE') }}

            {{ csrf_field() }}

            <div>
                <button type="submit"> dzēst trasi </button>
            </div>
        </form>
    @endif

@endsection
