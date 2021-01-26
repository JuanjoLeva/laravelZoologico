<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\InicioController::class,'inicio'])->name("animales.index");

Route::get('animales',[\App\Http\Controllers\AnimalController::class,'index'])->name("animales.index");

Route::get('animales/crear', [\App\Http\Controllers\AnimalController::class,'create'])->name("animales.create");

Route::get('animales/{animales}', [\App\Http\Controllers\AnimalController::class,'show'])->name("animales.show");

Route::get('animales/{animal}/editar', [\App\Http\Controllers\AnimalController::class,'edit'])->name("animales.edit");

Route::post('animales',[\App\Http\Controllers\AnimalController::class,'store'])->name("animales.store");

Route::put('animales/{animal}',[\App\Http\Controllers\AnimalController::class,'update'])->name("animales.update");
