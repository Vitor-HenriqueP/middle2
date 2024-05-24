<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;

Route::get('/dashboard', [ChamadoController::class,"index"])->name('chamados.dashboard');
Route::get('/chamado/{chamado}', [ChamadoController::class,'show'])->name('chamado.detalhe');
Route::get('/dashboard', function () {
    // Lógica para o painel
    })->middleware('auth.custom');