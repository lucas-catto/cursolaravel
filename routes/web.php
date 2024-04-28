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

/*
Passing parameters through the URL:
*/

// Not optional parameter:
// Route::get('/produto/{id}/{category}', function (int $id, string $category) {
//     return 
//         "Id: "       . $id
//         ."<br>".
//         "Category: " . $category;
// });

// Optional parameter:
Route::get('/produto/{id?}/{category?}', function (
    int    $id       = null,
    string $category = null
    ) {
    return 
        "Id: "       . $id
        ."<br>".
        "Category: " . $category;
});
/*
If there is a second parameter, the first is required
*/

// 11 Redirect e View:

// Route::get('/sobre', function () {
//     return redirect('/empresa');
// });

// OR

// Route::redirect('/sobre', '/empresa');

// Returning a View directly
// Route::view('/website', 'website/website');

// 12 Rotas nomeadas:

Route::get('news', function () {
    return view('news/news');
})->name('news_route');

Route::get('lucas', function () {
    return redirect()->route('news_route');
});
