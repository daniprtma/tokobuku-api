<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('bukus', BukuController::class);
