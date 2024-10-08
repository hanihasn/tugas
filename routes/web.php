<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelasiController;

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

Route::get("/ktp",[RelasiController::class,"index"]);
Route::get("/pengguna/create", [RelasiController::class, "create"]);
Route::post("/pengguna/store", [RelasiController::class, "store"]);
