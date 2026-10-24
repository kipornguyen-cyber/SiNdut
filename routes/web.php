<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('birthday');
});

Route::get('/ulang-tahun', function () {
    return view('birthday');
});
