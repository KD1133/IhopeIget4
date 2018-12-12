<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('tracks','TrackController');

Route::resource('users','UserController');

Route::delete('/user/{username}/othercar/{car}/detach','UserController@detach');
Route::patch('/user/{username}/othercar/{car}/detach','UserController@attach');

Route::get('/cars/create','CarsController@create');
Route::get('/cars/{car}/edit','CarsController@edit');
Route::post('/users/{user}/cars','CarsController@store');
Route::patch('/cars/{car}','CarsController@update');
Route::delete('/cars/{car}','CarsController@destroy');

Route::get('/', function(){
   return redirect('/tracks');
});

Route::get('/home', function(){
    return redirect('/tracks');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Auth::routes();

