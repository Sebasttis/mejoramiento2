<?php

use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('viaje/store', [ViajeController::class,'store'])->name('viaje.store');
Route::get('viaje/create',[ViajeController::class,'create']);
Route::get('viaje/listar',[ViajeController::class,'index'])->name('viaje.index');
Route::get('viaje/{viaje}',[ViajeController::class,'show'])->name('viaje.show');
Route::delete('viaje/{viaje}',[ViajeController::class,'destroy'])->name('viaje.destroy');
Route::put('viaje/{viaje}',[ViajeController::class,'update'])->name('viaje.update');
Route::get('viaje/{viaje}/editar',[ViajeController::class,'edit'])->name('viaje.edit');

Route::post('viajero/store', [ViajeroController::class,'store'])->name('viajero.store');
Route::get('viajero/create',[ViajeroController::class,'create']);
Route::get('viajero/listar',[ViajeroController::class,'index'])->name('viajero.index');
Route::get('viajero/{viajero}',[ViajeroController::class,'show'])->name('viajero.show');
Route::delete('viajero/{viajero}',[ViajeroController::class,'destroy'])->name('viajero.destroy');
Route::put('viajero/{viajero}',[ViajeroController::class,'update'])->name('viajero.update');
Route::get('viajero/{viajero}/editar',[ViajeroController::class,'edit'])->name('viajero.edit');