<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [HomeController::class, 'index']);

Route::get("/form",function () {
    return view('form');
});
Route::post("/submit",[HomeController::class,"form"]);

Route::get("/create",[HomeController::class,"store"]);
Route::get("/create2", [HomeController::class, "store2"]);

Route::get("/show", [HomeController::class, "show"]);