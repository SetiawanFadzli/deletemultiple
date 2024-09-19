<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('siswas', [SiswaController::class, 'index'])->name('siswas.index');
Route::delete('siswas/destroy-multiple', [SiswaController::class, 'destroyMultiple'])->name('siswas.destroy-multiple');