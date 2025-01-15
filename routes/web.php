<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/programme', function () {
    return view('partials/main_menu.programme');
});

Route::get('/overview', function () {
    return view('partials/main_menu.overview');
});

Route::get('/career', function () {
    return view('partials/main_menu.career');
});

// jika ada pengaktifkan menu atau penambahan, silahkan buat routsnya dulu, kemudian viewnya render disini