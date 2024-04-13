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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/desktop', function () {
    return view('desktop');
});

Route::get('/mobile', function () {
    return view('mobile');
});*/

Route::get('/', function () {
    $agent = new Jenssegers\Agent\Agent();

    if ($agent->isMobile()) {
        return view('mobile');
    }

    return view('desktop');
})->name('home');