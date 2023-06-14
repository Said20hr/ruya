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
Route::get('/', function () {
    return redirect(app()->getLocale());
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::prefix('{locale?}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {

        Route::get('/',[\App\Http\Controllers\PortfolioController::class,'index'])->name('home');
        Route::get('/motion',[\App\Http\Controllers\PortfolioController::class,'motion'])->name('motion');
        Route::get('/dev',[\App\Http\Controllers\PortfolioController::class,'dev'])->name('dev');
        Route::get('/visuals',[\App\Http\Controllers\PortfolioController::class,'visuals'])->name('visuals');
        Route::get('/3d-animation',[\App\Http\Controllers\PortfolioController::class,'animation'])->name('animation');
        Route::get('/contact-us',[\App\Http\Controllers\ContactController::class,'index'])->name('contact');
        Route::post('/contact-us',[\App\Http\Controllers\ContactController::class,'store'])->name('contact.store');
        Route::view('/services','public.services')->name('services');
        Route::get('projects/{slug}',[\App\Http\Controllers\PortfolioController::class,'portfolio'])->name('portfolio');

    });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




