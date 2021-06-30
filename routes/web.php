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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hinkals', function () {
    $hinkals = [
        ['type' => 'Lezgi', 'base' => 'cheesy crust'],
        ['type' => 'Avar', 'base' => 'garlic crust'],
        ['type' => 'Lakskiy', 'base' => 'thin & crispy']
    ];
    return view('hinkal', 
    ['hinkals' => $hinkals,
    'name' => request('name')]);
    // return "hinkal";
    // return ['name' => 'hinkal', 'base' => 'Avar'];
});

Route::get('/hinkals/{id}', function ($id) {
    return view('details', ['id' => $id]);
});