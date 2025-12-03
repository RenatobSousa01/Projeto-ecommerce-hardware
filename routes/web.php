<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ProductController;

//Usarei uma rota principal que usará o Controller
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota de detalhes do produto: /produto/rtx-5090
Route::get('/produto/{slug}', [ProductController::class, 'show'])->name('product.show');
