<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/portfolio/{id}', [PortfolioController::class, 'show']);
