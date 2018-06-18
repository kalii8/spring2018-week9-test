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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/hero/{slug}', 'HeroController@show');
Route::get('/hero', 'HeroController@index');
Route::post('/hero/{slug}', 'EmergencyController@store');

Auth::routes();
