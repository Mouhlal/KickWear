<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Support\Facades\Route;

Route::resource('produits',ProduitsController::class);
Route::resource('client',ClientController::class);
Route::resource('panier',PanierController::class);
