<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PortfolioController::class, 'home'])->name('home');
