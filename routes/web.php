<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/pilih', [QuizController::class, 'options'])->name('quiz.options');
Route::get('/pilih-surat', [QuizController::class, 'options_surat'])->name('quiz.options.surat');
Route::get('/quiz', [QuizController::class, 'getData'])->name('quiz.index');
