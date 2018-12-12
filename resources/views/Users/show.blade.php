@extends('layout')


@section('content')

    <div class="card text-white bg-dark mb-3">
        <h3 class="card-header">{{ $user->username }}</h3>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="photo-box">
                        <img class="img-fluid" src="http://placehold.it/200x200" alt="image">
                    </div>
                </div>
                <div class="col-md-5">
                    @if ($user->firstname != null)
                        <h4>Vārds: {{ $user->firstname }}</h4>
                    @endif
                    @if ($user->lastname != null)
                        <h4>Uzvārds: {{ $user->lastname }}</h4>
                    @endif
                    @if ($user->gender != null)
                        <h4>Dzimums: {{ $user->gender }}</h4>
                    @endif
                    @if ($user->birthday != null)
                        <h4>Dzimšanas datums: {{ $user->birthday }}</h4>
                    @endif
                    @if (Auth::check() && (auth()->user()->power == 2 || (auth()->user()->username == $user->username)))
                        <a href="/users/{{ $user->username }}/edit" class="btn btn-primary">Rediģet</a>
                    @endif
                </div>
                <div class="col-md-4">
                    <h4>kautkas</h4>
                </div>
            </div>
        </div>
        <hr>
        <h4>Automašīnas</h4>
        @if (Auth::check() && (auth()->user()->username == $user->username))
            <a href="/cars/create" class="btn btn-primary">Pievienot</a>
        @endif
        @foreach($user->car as $car)
            <h3 class="card-header">{{ $car->name }}</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="photo-box">
                            <img class="img-fluid" src="http://placehold.it/200x200" alt="image">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h4>Īpašnieks: {{ $car->user_username}}</h4>
                        @if ($car->vin != null)
                            <h4>VIN: {{ $car->vin }}</h4>
                        @endif
                        @if ($car->licenseplate != null)
                            <h4>Reģistrācijas nummurs: {{ $car->licenseplate }}</h4>
                        @endif
                        @if ($car->manufacturer != null)
                            <h4>Ražotājs: {{ $car->manufacturer }}</h4>
                        @endif
                        @if ($car->model != null)
                            <h4>Modelis: {{ $car->model }}</h4>
                        @endif
                        @if ($car->year != null)
                            <h4>Gads: {{ $car->year }}</h4>
                        @endif
                        @if (Auth::check() && (auth()->user()->power == 2 || (auth()->user()->username == $car->user_username)))
                            <a href="/cars/{{ $car->id }}/edit" class="btn btn-primary">Rediģet</a>
                        @endif
                        <form method="POST" action="/user/{{$user->username}}/othercar/{{ $car->id }}/detach">

                            {{ method_field('PATCH') }}

                            {{ csrf_field() }}

                            <input name="username" type="hidden" value="{{auth()->user()->username}}">
                            <input name="id" type="hidden" value="{{$car->id}}">
                            <div>
                                <button type="submit">pievienot mašīnu</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">

                        @if ($car->power != null)
                            <h4>Jauda: {{ $car->power }} kW</h4>
                        @endif
                        @if ($car->torque != null)
                            <h4>Grieze: {{ $car->torque }} Nm</h4>
                        @endif
                        @if ($car->weight != null)
                            <h4>Svars: {{ $car->weight }} Kg</h4>
                        @endif
                        @if ($car->displacement != null)
                            <h4>Tilpums: {{ $car->displacement }} cc</h4>
                        @endif
                        @if ($car->drivetrain != null)
                            <h4>Piedziņa: {{ $car->drivetrain }}</h4>
                        @endif
                    </div>
                </div>
            @endforeach
                <hr>
                <h4>Citu lietotāju automašīnas</h4>
                @foreach($user->cars as $car)
                    <h3 class="card-header">{{ $car->name }}</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="photo-box">
                                    <img class="img-fluid" src="http://placehold.it/200x200" alt="image">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4>Īpašnieks: {{ $car->user_username}}</h4>
                                @if ($car->vin != null)
                                    <h4>VIN: {{ $car->vin }}</h4>
                                @endif
                                @if ($car->licenseplate != null)
                                    <h4>Reģistrācijas nummurs: {{ $car->licenseplate }}</h4>
                                @endif
                                @if ($car->manufacturer != null)
                                    <h4>Ražotājs: {{ $car->manufacturer }}</h4>
                                @endif
                                @if ($car->model != null)
                                    <h4>Modelis: {{ $car->model }}</h4>
                                @endif
                                @if ($car->year != null)
                                    <h4>Gads: {{ $car->year }}</h4>
                                @endif
                                @if (Auth::check() && (auth()->user()->power == 2 || (auth()->user()->username == $car->user_username)))
                                    <a href="/cars/{{ $car->id }}/edit" class="btn btn-primary">Rediģet</a>
                                @endif
                                @if((auth()->user()->username == $user->username || auth()->user()->username == $car->user_username))
                                    <form method="POST" action="/user/{{$user->username}}/othercar/{{ $car->id }}/detach">

                                        {{ method_field('DELETE') }}

                                        {{ csrf_field() }}

                                        <input name="username" type="hidden" value="{{$user->username}}">
                                        <input name="id" type="hidden" value="{{$car->id}}">
                                        <div>
                                            <button type="submit"> atvienot mašīnu</button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                            <div class="col-md-4">

                                @if ($car->power != null)
                                    <h4>Jauda: {{ $car->power }} kW</h4>
                                @endif
                                @if ($car->torque != null)
                                    <h4>Grieze: {{ $car->torque }} Nm</h4>
                                @endif
                                @if ($car->weight != null)
                                    <h4>Svars: {{ $car->weight }} Kg</h4>
                                @endif
                                @if ($car->displacement != null)
                                    <h4>Tilpums: {{ $car->displacement }} cc</h4>
                                @endif
                                @if ($car->drivetrain != null)
                                    <h4>Piedziņa: {{ $car->drivetrain }}</h4>
                                @endif
                            </div>
                        </div>
                        @endforeach
    </div>

@endsection
