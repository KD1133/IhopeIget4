<?php

namespace App\Http\Controllers;

use App\track;
use Illuminate\Http\Request;

class TrackController extends Controller
{

    public function index()
    {
        $tracks = track::all();

        return view('tracks.index',compact('tracks'));
    }


    public function show(track $track)
    {
        return view('tracks.show', compact('track'));
    }

    public function create()
    {
        return view('tracks.create');
    }


    public function store()
    {

        request()->validate([
            'name' => 'required',
            'accesability' => 'required',
            'lenght' => 'integer|nullable'
        ]);
        track::create(request(['name','country','regioin','city','street','number','phone','email','lenght','surface','accesability']));

        return redirect('/tracks');
    }

    public function edit(track $track)
    {
        return view('tracks.edit', compact('track'));
    }

    public function update(track $track)
    {

        $track->update(request(['name','country','regioin','city','street','number','phone','email','lenght','surface','accesability']));

        return redirect('/tracks');

    }

    public function destroy(track $track)
    {
        $track->delete();

        return redirect('/tracks');
    }

}
