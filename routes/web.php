<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\LuckyController;

Route::get('/', [RegistrationController::class, 'showRegistrationForm']);

Route::get('/user/{unique_link}', [UserController::class, 'showPageA'])->name('user.pageA');

Route::post('/register', [RegistrationController::class, 'register']);

Route::post('/user/{unique_link}/generate-link', [LinkController::class, 'generateNewLink']);
Route::post('/user/{unique_link}/deactivate-link', [LinkController::class, 'deactivateLink']);

Route::post('/user/{unique_link}/imfeelinglucky', [LuckyController::class, 'imFeelingLucky']);
Route::get('/user/{unique_link}/history', [LuckyController::class, 'history']);



