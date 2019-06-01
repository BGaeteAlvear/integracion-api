<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return redirect('/login');
})->name('home');

// login y asociados GUEST
Route::get('/login', 'LoginController@showLogin')->name('login.show');
Route::post('/login', 'LoginController@login')->name('login');