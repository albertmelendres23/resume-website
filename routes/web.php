<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});

Route::get('/projects', function () {
    return view('projects');
});
