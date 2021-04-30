<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('socios',[\App\Http\Controllers\HomeController::class,'partners']);
Route::get('socios/detalle/{slug}',[\App\Http\Controllers\HomeController::class,'paterns_detail']);

Route::get('admin/centros_ecoturisticos',[\App\Http\Controllers\EcoturismCenterController::class,'index']);
Route::get('admin/centros_ecoturisticos/{slug}',[\App\Http\Controllers\EcoturismCenterController::class,'show']);


