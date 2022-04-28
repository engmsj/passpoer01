<?php

use Illuminate\Support\Facades\Auth;
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
/* 
Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/kalaed', [App\Http\Controllers\HomeController::class, 'kalaed'])->name('kalaed');
    Route::get('/reason', [App\Http\Controllers\HomeController::class, 'reason'])->name('reason');
    Route::get('/report', [App\Http\Controllers\HomeController::class, 'report'])->name('report');
    Route::get('/travel', [App\Http\Controllers\HomeController::class, 'travel'])->name('travel');
});