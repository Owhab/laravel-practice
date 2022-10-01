<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DemoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome-page');
// Loading controllers from controllers folder

Route::get("/demo", [DemoController::class, 'Index']);

Route::get("/projects", [ProjectController::class, 'index'])->middleware('age');
