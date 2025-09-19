<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: [ChirpController::class,'index'])->name('home');
