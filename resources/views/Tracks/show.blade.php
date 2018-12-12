@extends('layout')


@section('content')

    <div class="card text-white bg-dark mb-3">
        <h3 class="card-header">{{ $track->name }}</h3>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="photo-box">
                        <img class="img-fluid" src="http://placehold.it/200x200" alt="image">
                    </div>
                </div>
                <div class="col-md-5">
                    <h4>
                        @if($track->regioin != null || $track->city != null || $track->street != null )
                            Adrese:
                        @endif
                        {{ $track->regioin }}
                        @if($track->regioin != null && ($track->city != null || $track->street != null))
                             ,
                        @endif
                        {{ $track->city }}
                        @if($track->city != null && $track->street != null)
                            ,
                        @endif
                        {{ $track->street }} {{ $track->number }}</h4>
                    @if ($track->phone != null)
                        <h4>Telefons: {{ $track->phone }}</h4>
                    @endif
                    @if ($track->email != null)
                        <h4>E-pasts: {{ $track->email }}</h4>
                    @endif
                    @if ($track->lenght != null)
                        <h4>Garums: {{ $track->lenght }}m</h4>
                    @endif
                    @if ($track->surface != null)
                        <h4>Surface: {{ $track->surface }}</h4>
                    @endif
                    @if (Auth::check() && auth()->user()->power == 2)
                        <a href="/tracks/{{ $track->id }}/edit" class="btn btn-primary">Rediģet informāciju</a>
                    @endif
                </div>
                <div class="col-md-4">
                    <h4>{{ $track->accesability }}</h4>
                </div>
            </div>
        </div>
    </div>

@endsection
