<?php

use App\Http\Controllers\ProtfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProtfolioController::class, 'index']);
Route::get('/resume', [ProtfolioController::class, 'resume']);
Route::get('/contact', [ProtfolioController::class, 'contact']);
Route::get('/projects', [ProtfolioController::class, 'projects']);
