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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/initializer', function () {
    return view("welcome");
});

Route::get('/', function () {

    $name = "Guybrush";

    return view("homepage", compact("name"));
});

Route::get('/prodotti', function () {

     return view("prodotti");
});

Route::get('/contatti', function () {

    return view("contatti");
});
