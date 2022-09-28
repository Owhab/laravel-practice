<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DemoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome-page');
// Loading controllers from controllers folder

Route::get("/demo", [DemoController::class, 'Index']);

Route::get("/projects", [ProjectController::class, 'index']);
