<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/generic', function () {
//     return view('generic');
// });

// Route::get('/elements', function () {
//     return view('elements');
// });


// Route::get('/index', [DemoController::class, 'index']);

// Route::get('/generic', [DemoController::class, 'generic']);

// Route::get('/elements', [DemoController::class, 'elements']);



// Route::get('/index', singleActionController::class);
// Route::get('/generic', singleActionController::class);
// Route::get('/elements', singleActionController::class);

Route::resource('/index', photoController::class);
Route::resource('/generic', photoController::class);
Route::resource('/elements', photoController::class);