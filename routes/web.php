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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/empresa', function () {
//     return view('empresa/empresa');
// });

/*
Any:
    => Get
    => Post
    => Put
    => Patch
    => Delete
    => Options
*/

// Route::any('/any', function () {
//     return "any: it's accepted all the HTTP verbs.";
// });

/*
Match:
    => In first parameter, it need to be defined the HTTP verbs
*/

// Route::match(['get', 'post'], '/match', function () {
//     return "match: it's accepted just the defined HTTP verbs.";
// });

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
// Route::get('/produto/{id?}/{category?}', function (
//     int    $id       = null,
//     string $category = null
//     ) {
//     return 
//         "Id: "       . $id
//         ."<br>".
//         "Category: " . $category;
// });
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

// Route::get('news', function () {
//     return view('news/news');
// })->name('news_route');

// Route::get('lucas', function () {
//     return redirect()->route('news_route');
// });

// 13 Grupo de Rotas

/*
admin/
admin/route_one
admin/route_two
admin/route_three
*/

// /admin/
/*
Route::prefix('admin')->group(function () {

    // admin/
    Route::get('/', function () {
        return "Admin - home";
    })->name('admin_home');

    // admin/route_one
    Route::get('route_one', function () {
        return "route_one";
    });

    // admin/route_two
    Route::get('route_two', function () {
        return "route_two";
    });

    // admin/route_three
    Route::get('route_three', function () {
        return "route_three";
    });

    Route::fallback(function () {
        return redirect()->route('admin_home');
    });
});
*/

// Group By Name:
/*
Route::name('admin_')->group(function () {

    // admin/
    Route::get('admin/', function () {
        return "Admin - home";
    })->name('home');

    // admin/route_one
    Route::get('admin/route_one', function () {
        return "route_one";
    })->name('one');

    // admin/route_two
    Route::get('admin/route_two', function () {
        return "route_two";
    })->name('two');

    // admin/route_three
    Route::get('admin/route_three', function () {
        return "route_three";
    })->name('three');
});

Route::get('/computer', function () {
    return redirect()->route('admin_three');
});
*/

// Only a Test:

/*
    admin/
    admin/route_one
    admin/route_two
*/

// Creating Routes:
/*
Route::name('admin.')->group(function () {

    Route::prefix('/admin')->group(function () {
        
        Route::get('/', function () {
            return "Admin - home";
        })->name('home');
        

        Route::get('/route_one', function () {
            return "route => one";
        })->name('one');
        
        
        Route::get('/route_two', function () {
            return "route => two";
        })->name('two');


        Route::fallback(function () {
            return redirect()->route('admin.home');
        })->name('fallback');
    });
});
*/

// Testing Routes:
/*
Route::prefix('test_route')->group(function () {

    Route::get('/', function () {
        return redirect()->route('admin.home');
    });

    Route::get('/1', function () {
        return redirect()->route('admin.one');
    });

    Route::get('/2', function () {
        return redirect()->route('admin.two');
    });

    Route::fallback(function () {
        return redirect()->route('admin.home');
    });
});
*/

// Group by "group":

// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {});

// Route::group([
//     'prefix' => 'school',
//     'as'     => 'school.'
// ], function () {

//     Route::get('/', function () {
//         return "school => home";
//     })->name('home');

//     Route::get('/teacher', function () {
//         return "school => teacher";
//     })->name('teacher');

//     Route::get('student', function () {
//         return "school => student";
//     })->name('student');
// });

// Test School Route:

// Route::prefix('test_school_route')->group(function () {

//     Route::get('/', function () {
//         return redirect()->route('school.home');
//     });

//     Route::get('/teacher', function () {
//         return redirect()->route('school.teacher');
//     });

//     Route::get('/student', function () {
//         return redirect()->route('school.student');
//     });
// });

// 14 Controllers:

// use App\Http\Controllers\HomeController;

// Route::get('/', [HomeController::class, 'index']);

// 15 Passando Parâmetros Para o Controller:

// Route::get('/home/{id?}', [HomeController::class, 'show']);
