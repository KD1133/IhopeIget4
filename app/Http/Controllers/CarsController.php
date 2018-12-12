<?php

namespace App\Http\Controllers;


use App\car;
use App\user;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('cars.create');
    }

    public function store(User $user)
    {
        request()->validate([
            'name' => 'required',
        ]);

        car::create([
           'user_username' => $user->username,
           'name'=> request('name'),
            'vin'=> request('vin'),
            'licenseplate'=> request('licenseplate'),
            'manufacturer'=> request('manufacturer'),
            'model'=> request('model'),
            'year'=> request('year'),
            'power'=> request('power'),
            'torque'=> request('torque'),
            'weight'=> request('weight'),
            'displacement'=> request('displacement'),
            'drivetrain'=> request('drivetrain'),
        ]);

        $a = "/users/";
        $a .= auth()->user()->username;

        return redirect($a);
    }


    public function show(car $car)
    {
        //
    }


    public function edit(car $car)
    {
        return view('cars.edit', compact('car'));
    }


    public function update(car $car)
    {
        $car->update(request(['name','vin','licenseplate','manufacturer','model','year','power','torque','weight','displacement','drivetrain']));

        $a = "/users/";
        $a .= auth()->user()->username;

        return redirect($a);
    }


    public function destroy(car $car)
    {
        $car->delete();

        $a = "/users/";
        $a .= auth()->user()->username;

        return redirect($a);
    }
}
