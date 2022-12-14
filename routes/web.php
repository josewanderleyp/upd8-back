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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/client', [ClientController::class, 'index'])->name('client.index');
// Route::get('/client/{post}', [ClientController::class, 'show'])->name('client.show');
// // Route::post('/client', [ClientController::class, 'store'])->name('client.store');

Route::namespace('\App\Http\Controllers')->group(function () {
    Route::resources([
        'client' => 'ClientController',
    ]);
});
// Route::post('/client', 'ClientController@store');


// Route::group(['middleware' => ['cors', 'json.response']], function () {
//     // Public Routes

//     Route::namespace('\App\Http\Controllers')->group(function () {
//         Route::resources([
//             'client' => 'ClientController',
//         ]);
//     });
// });