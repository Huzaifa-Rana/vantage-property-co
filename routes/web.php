<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertyController;

Route::get('/', [PropertyController::class, 'welcome'])->name('home');
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/{slug}', [PropertyController::class, 'show'])->name('properties.show');
Route::get('/agents', [PropertyController::class, 'agents'])->name('agents');
Route::get('/about', [PropertyController::class, 'about'])->name('about');
