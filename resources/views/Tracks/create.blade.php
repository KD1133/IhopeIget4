@extends('layout')


@section('content')
    @if (Auth::check() && auth()->user()->power == 2)
        <h2>Pievienot trasi</h2>

        <form method="POST" action="/tracks" autocomplete="off">

            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" name="name" required="true">
                <label for="name">nosaukums</label>
            </div>
            <div class="form-group">
                <input type="text" name="country">
                <label for="country">valsts</label>
            </div>
            <div class="form-group">
                <input type="text" name="regioin">
                <label for="regioin">reģions</label>
            </div>
            <div class="form-group">
                <input type="text" name="city">
                <label for="city">pilsēta</label>
            </div>
            <div class="form-group">
                <input type="text" name="street">
                <label for="street">iela</label>
            </div>
            <div class="form-group">
                <input type="text" name="number">
                <label for="number">adreses numurs</label>
            </div>
            <div class="form-group">
                <input type="text" name="phone">
                <label for="phone">telefona numurs</label>
            </div>
            <div class="form-group">
                <input type="text" name="email">
                <label for="email">e-pasts</label>
            </div>
            <div class="form-group">
                <input type="number" name="lenght">
                <label for="lenght">garums(metros)</label>
            </div>
            <div class="form-group">
                <input type="text" name="surface">
                <label for="surface">segums</label>
            </div>
            <div class="form-group">
                <textarea type="text" name="accesability" required="true"></textarea>
                <label for="accesability">pieejamības apraksts</label>
            </div>
            <div>
                <button type="submit"> pievienot trasi </button>
            </div>
        </form>

    @endif

@endsection