<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/our-service', function () {
    return view('pages.services.service');
});

Route::get('/about-us', function () {
    return view('pages.about.about');
})->name('about');

//NOT FOUND ROUTE
Route::any(
    '{query}',
    function () {
        return view('404');
    }
)->where('query', '.*')->name('notfound');
