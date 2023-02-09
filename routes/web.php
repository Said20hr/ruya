<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\PortfolioController::class,'visuals'])->name('visuals');
Route::get('/dev',[\App\Http\Controllers\PortfolioController::class,'dev'])->name('dev');
Route::get('/dev/{slug}',[\App\Http\Controllers\PortfolioController::class,'dev'])->name('dev.portfolio');
Route::get('/motion',[\App\Http\Controllers\PortfolioController::class,'motion'])->name('motion');
Route::get('/motion/{slug}',[\App\Http\Controllers\PortfolioController::class,'motion'])->name('motion.portfolio');
Route::get('/contact-us',[\App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('/contact-us',[\App\Http\Controllers\ContactController::class,'store'])->name('contact.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
