<?php

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
use App\Http\Controllers\HinkalController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hinkals', [HinkalController::class, 'index'])->name('hinkals.index')->middleware('auth');
Route::get('/hinkals/create', [HinkalController::class, 'create'])->name('hinkals.index');
Route::post('/hinkals', [HinkalController::class, 'store'])->name('hinkals.index');
Route::get('/hinkals/{id}', [HinkalController::class, 'show'])->name('hinkals.index')->middleware('auth');
Route::delete('/hinkals/{id}',[HinkalController::class, 'destroy'])->name('hinkals.index')->middleware('auth'); 
Auth::routes([
    // 'verify' => true,
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
