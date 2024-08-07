<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Support\Facades\Route;

Route::controller(ProduitsController::class)->group(function(){
    Route::get('/','index')->name('produits.index');
    Route::get('/produits','produits')->name('produits.shop');
    Route::get('/produits/create','create')->name('produits.create');
    Route::post('/produits/store','store')->name('produits.store');
    Route::get('/produits/{id}','edit')->name('produits.edit');
    Route::put('/produits/update/{id}','update')->name('produits.update');
    Route::delete('/produits/{id}','delete')->name('produits.delete');
    Route::get('/show/{id}','show')->name('produits.show');
});

Route::controller(ClientController::class)->group(function(){
    Route::get('/about','about')->name('client.about');
    Route::get('/contact','contact')->name('client.contact');
    Route::get('/login','showLoginForm')->name('client.form')->middleware('guest');
    Route::post('/login','login')->name('client.login')->middleware('guest');
    Route::get('/register','showRegisterForm')->name('client.registerform');
    Route::post('/register/acc','register')->name('client.register')->middleware('guest');
    Route::get('/logout','deconnexion')->name('client.deconnexion')->middleware('auth');
});
