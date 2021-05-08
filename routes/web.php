<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('socios',[\App\Http\Controllers\HomeController::class,'partners']);

Route::get('lugar/{slug_place}',[\App\Http\Controllers\HomeController::class,'place_detail']);

Route::get('centros_ecoturisticos',[\App\Http\Controllers\HomeController::class,'colaboradores']);

Route::get('contacto',[\App\Http\Controllers\HomeController::class,'contact_form']);
Route::post('contacto',[\App\Http\Controllers\HomeController::class,'contact_message']);
Route::post('contacto/{place_slug}',[\App\Http\Controllers\HomeController::class,'contact']);

Route::get('nosotros',[\App\Http\Controllers\HomeController::class,'about']);
Route::get('servicios',[\App\Http\Controllers\HomeController::class,'services']);

Route::get('admin/centros_ecoturisticos',[\App\Http\Controllers\EcoturismCenterController::class,'index']);
Route::get('admin/centros_ecoturisticos/create',[\App\Http\Controllers\EcoturismCenterController::class,'create']);
Route::post('admin/centros_ecoturisticos/',[\App\Http\Controllers\EcoturismCenterController::class,'store']);
