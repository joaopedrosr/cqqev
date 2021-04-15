<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceitaController;


Route::get('/', [ReceitaController::class, 'index'])->name('receitas.index');

Route::get('receitas',[ReceitaController::class, 'list'])->name('receitas.list');

Route::get('receitas/{receita}',[ReceitaController::class, 'show'])->name('receitas.show');


Route::get('doce',[ReceitaController::class, 'doce'])->name('receitas.doce');
Route::get('salgada',[ReceitaController::class, 'salgada'])->name('receitas.salgada');

 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
