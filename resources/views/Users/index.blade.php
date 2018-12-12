@extends('layout')


@section('content')

    @foreach($users as $user)
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
                            <a href="/users/{{ $user->username }}" class="btn btn-primary">Vairāk informācija</a>
                    </div>
                    <div class="col-md-4">
                        <h4>maybe kautkas</h4>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection