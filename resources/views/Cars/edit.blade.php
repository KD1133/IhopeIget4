@extends('layout')


@section('content')
    @if (Auth::check() && (auth()->user()->power == 2 || auth()->user()->username == $car->user_username))
        <h2>Rediģēt mašīnu</h2>

        <form method="POST" action="/cars/{{ $car->id }}"  autocomplete="off">

            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" name="name" required="true" value="{{$car->name}}">
                <label for="name">nosaukums</label>
            </div>
            <div class="form-group">
                <input type="text" name="vin" value="{{$car->vin}}">
                <label for="vin">vin</label>
            </div>
            <div class="form-group">
                <input type="text" name="licenseplate" value="{{$car->licenseplate}}">
                <label for="licenseplate">nummurs</label>
            </div>
            <div class="form-group">
                <input type="text" name="manufacturer" value="{{$car->manufacturer}}">
                <label for="manufacturer">ražotājs</label>
            </div>
            <div class="form-group">
                <input type="text" name="model" value="{{$car->model}}">
                <label for="model">modelis</label>
            </div>
            <div class="form-group">
                <input type="number" name="year" value="{{$car->year}}">
                <label for="year">gads</label>
            </div>
            <div class="form-group">
                <input type="number" name="power" value="{{$car->power}}">
                <label for="power">jauda(kilowatos)</label>
            </div>
            <div class="form-group">
                <input type="number" name="torque" value="{{$car->torque}}">
                <label for="torque">grieze(ņutonmetros)</label>
            </div>
            <div class="form-group">
                <input type="number" name="weight"  value="{{$car->weight}}">
                <label for="weight">svars(kilogramos)</label>
            </div>
            <div class="form-group" >
                <input type="number" name="displacement" value="{{$car->displacement}}">
                <label for="displacement">tilpums(kubikcentimetros)</label>
            </div>
            <div>
                <select name="drivetrain" value="{{$car->drivetrain}}">
                    <option>RWD</option>
                    <option>FWD</option>
                    <option>AWD</option>
                </select>
                <label for="drivetrain">piedzņa</label>
            </div>
            <div>
                <button type="submit"> rediģēt mašīnu </button>
            </div>
        </form>
        <br>
        <form method="POST" action="/cars/{{ $car->id }}">

            {{ method_field('DELETE') }}

            {{ csrf_field() }}

            <div>
                <button type="submit"> dzēst mašīnu</button>
            </div>
        </form>
    @endif

@endsection