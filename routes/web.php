<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/detail/{slug}', [IndexController::class, 'detailPortofolio'])->name('detail.portofolio');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'dataPortofolio'])->name('home');
Route::get('/portofolio', [HomeController::class, 'dataPortofolio'])->name('portofolio.data');
Route::get('/portofolio/create', [HomeController::class, 'create'])->name('portofolio.create');
Route::post('/portofolio/insert', [HomeController::class, 'insert'])->name('portofolio.insert');