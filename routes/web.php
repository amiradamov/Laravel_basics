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

Route::get('/hinkals', [HinkalController::class, 'index']);
Route::get('/hinkals/create', [HinkalController::class, 'create']);
Route::get('/hinkals/{id}', [HinkalController::class, 'show']);