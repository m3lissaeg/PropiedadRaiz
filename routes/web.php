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
    meliisa.co
              /
              /home
              /profile/xxx  
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

//Property Actions and endpoints
Route::get('/property', 'PropertyController@create');
Route::post('/property', 'PropertyController@store');


//Payments Actions and endpoints
Route::get('/payments', 'PaymentController@create');
Route::post('/payments', 'PaymentController@store');