<?php

namespace App\Http\Controllers;

use App\user;
use App\car;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $incrementing = false;

    public function index()
    {
        $users = user::all();

        return view('users.index',compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(user $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(user $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(user $user)
    {
        $user->update(request(['username','firstname','lastname','gender','birthday']));

        return view('users.show', compact('user'));
    }

    public function destroy(user $user)
    {
        $user->delete();

        return redirect('/tracks');
    }

    public function detach()
    {
        $user = User::find(request('username'));

        $user->cars()->detach([request('id')]);

        $a = "/users/";
        $a .= $user->username;

        return redirect($a);
    }

    public function attach()
    {
        $user = User::find(request('username'));

        $user->cars()->attach([request('id')]);

        $a = "/users/";
        $a .= $user->username;

        return redirect($a);
    }

}
