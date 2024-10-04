<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    foreach(User::all() as $user) {
        dump($user->name);
    }
});

Route::post('/users', function ($user) {

    }
);