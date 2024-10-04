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

Route::post("/create",[HomeController::class,"store"]);
Route::get("/create2", [HomeController::class, "store2"]);
Route::get("/create33", [HomeController::class, "store33"]);

Route::get("/show", [HomeController::class, "show"]);

Route::get('/Products/{id}/edit', [HomeController::class,'edit']);
Route::put('/Products/{id}', [HomeController::class, 'update']);
Route::delete('/Products/{id}', [HomeController::class, 'destroy']);

Route::get("/input", [HomeController::class, "input"]);