<?php

use App\Http\Controllers\EventsController;
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
    return view('home');
});


Route::prefix('events')->group(function () {
    Route::get('/', [EventsController::class, 'index'])->name('events');
    Route::get('/fetch', [EventsController::class, 'fetch'])->name('events.fetch');
    Route::post('/create', [EventsController::class, 'create'])->name('events.create');
    Route::get('/show/{id}', [EventsController::class, 'show'])->name('events.show');
});

Route::prefix('halls')->group(function () {
    Route::get('/', [EventsController::class, 'index'])->name('halls');
});

Route::prefix('agents')->group(function () {
    Route::get('/', [EventsController::class, 'index'])->name('agents');
});

Route::prefix('partners')->group(function () {
    Route::get('/', [EventsController::class, 'index'])->name('partners');
});

Route::prefix('managers')->group(function () {
    Route::get('/', [EventsController::class, 'index'])->name('managers');
});

Route::prefix('providers')->group(function () {
    Route::get('/', [EventsController::class, 'index'])->name('providers');
});

