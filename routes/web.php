<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StartController::class, 'index'])->name('start');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
Route::get('/media', [MediaController::class, 'index'])->name('media');
Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/support', [SupportController::class, 'index'])->name('support');
