@extends('layout')


@section('content')
    @if (Auth::check())
        <h2>Pievienot mašīnu</h2>

        <form method="POST" action="/users/{{auth()->user()->username}}/cars" autocomplete="off">

            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" name="name" required="true">
                <label for="name">nosaukums</label>
            </div>
            <div class="form-group">
                <input type="text" name="vin">
                <label for="vin">vin</label>
            </div>
            <div class="form-group">
                <input type="text" name="licenseplate">
                <label for="licenseplate">nummurs</label>
            </div>
            <div class="form-group">
                <input type="text" name="manufacturer">
                <label for="manufacturer">ražotājs</label>
            </div>
            <div class="form-group">
                <input type="text" name="model">
                <label for="model">modelis</label>
            </div>
            <div class="form-group">
                <input type="number" name="year">
                <label for="year">gads</label>
            </div>
            <div class="form-group">
                <input type="number" name="power">
                <label for="power">jauda(kilowatos)</label>
            </div>
            <div class="form-group">
                <input type="number" name="torque">
                <label for="torque">grieze(ņutonmetros)</label>
            </div>
            <div class="form-group">
                <input type="number" name="weight">
                <label for="weight">svars(kilogramos)</label>
            </div>
            <div class="form-group">
                <input type="number" name="displacement">
                <label for="displacement">tilpums(kubikcentimetros)</label>
            </div>
            <div>
                <select name="drivetrain">
                    <option>RWD</option>
                    <option>FWD</option>
                    <option>AWD</option>
                </select>
                <label for="drivetrain">piedzņa</label>
            </div>
            <div>
                <button type="submit"> Pievienot mašīnu </button>
            </div>
        </form>

    @endif

@endsection