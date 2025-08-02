<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\HomeController;

/******************************** HOME *********************************************/ 

Route::get('/', [HomeController::class, 'index'])->name('home');

/******************************** ABOUT *********************************************/ 

Route::get('/about-us', function () {
    return view('pages.about-us.about');
});

/******************************** CAREER *********************************************/ 

Route::get('/career', [CareerController::class, 'index']);
Route::get('/career/{division}', [CareerController::class, 'listByDivision']);
Route::get('/career/{division}/{slug}', [CareerController::class, 'show']);

/********************************** PARTNERSHIP ******************************************/ 

Route::prefix('partnership')->group(function () {
    Route::view('/', 'pages.partnership.partnership');

    Route::view('/partnership-affiliate-details', 'pages.partnership.partnership-affiliate-details.index');
    Route::view('/partnership-event-details', 'pages.partnership.partnership-event-details.index');
    Route::view('/partnership-details', 'pages.partnership.partnership-details.index');
    Route::view('/partnership-konten-details', 'pages.partnership.partnership-konten-details.index');
});

/************************************** PROGRAMMES ****************************************/ 

Route::get('/programme/HI-programmes/', function () {
    return view('pages.programme.HI-programmes.index');
});

Route::get('/programme/HI-opportunities/', function () {
    return view('pages.programme.HI-opportunities.index');
});

/****************************************** ARTICLE *********************************/ 

Route::get('/article', function () {
    return view('pages.article.index');
});

Route::get('article/category/skill-development/{slug}', function ($slug) {
    $view = "pages.article.category.skill-development.$slug.index";

    if (!view()->exists($view)) {
        abort(404);
    }

    return view($view);
});