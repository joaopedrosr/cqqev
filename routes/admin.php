<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ReceitaController;
use App\Http\Controllers\Admin\IngredienteController;
use App\Http\Controllers\Admin\UserController;

Route::get('',[HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('receitas',ReceitaController::class)->except('show')->names('admin.receitas');

Route::resource('ingredientes', IngredienteController::class)->except('show')->names('admin.ingredientes');