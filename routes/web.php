<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'content' => 'Welcome home!'
    ]);
});
