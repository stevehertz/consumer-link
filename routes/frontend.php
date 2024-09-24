<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/mission', [PagesController::class, 'mission'])->name('mission');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::get('/billboards', [PagesController::class, 'billboards'])->name('billboards');
Route::get('/suburban', [PagesController::class, 'suburban'])->name('suburban.signs');
Route::get('/bridge', [PagesController::class, 'bridge'])->name('bridge.signs');
Route::get('/clients', [PagesController::class, 'clients'])->name('our.clients');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact.us');
