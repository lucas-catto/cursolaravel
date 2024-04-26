<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return view('empresa/empresa');
});

/*
Any:
    => Get
    => Post
    => Put
    => Patch
    => Delete
    => Options
*/

Route::any('/any', function () {
    return "any: it's accepted all the HTTP verbs.";
});

/*
Match:
    => In first parameter, it need to be defined the HTTP verbs
*/

Route::match(['get', 'post'], '/match', function () {
    return "match: it's accepted just the defined HTTP verbs.";
});
