<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/detail/{slug}', [IndexController::class, 'detailPortofolio'])->name('detail.portofolio');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
