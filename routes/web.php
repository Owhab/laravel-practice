<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DemoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

// Loading controllers from controllers folder

Route::get("/demo", [DemoController::class, 'Index']);

Route::get("/projects", "App\Http\Controllers\ProjectController@index");
