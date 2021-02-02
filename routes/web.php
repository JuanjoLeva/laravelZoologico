<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\InicioController::class,'inicio'])->name("animales.index");

Route::get('animales',[\App\Http\Controllers\AnimalController::class,'index'])->name("animales.index");

Route::get('animales/crear', [\App\Http\Controllers\AnimalController::class,'create'])->name("animales.create")->middleware('auth');

Route::get('animales/{animal}', [\App\Http\Controllers\AnimalController::class,'show'])->name("animales.show");

Route::get('animales/{animal}/editar', [\App\Http\Controllers\AnimalController::class,'edit'])->name("animales.edit")->middleware('auth');

Route::post('animales',[\App\Http\Controllers\AnimalController::class,'store'])->name("animales.store");

Route::put('animales/{animal}',[\App\Http\Controllers\AnimalController::class,'update'])->name("animales.update");

Route::get('revisiones/{animal}/crear',[\App\Http\Controllers\RevisionController::class,'create'])->name("revisiones.create");

Route::post('revisiones/{animal}',[\App\Http\Controllers\RevisionController::class,'store'])->name("revisiones.store");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


