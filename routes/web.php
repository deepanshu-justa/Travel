<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\PagesController;
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

//  Static Page Routes
Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

//  Admin Routes
Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () { return to_route('admin.login'); });
    Route::get('/login', 'getLogin')->name('login');
    Route::post('/login', 'postLogin')->name('login');
    Route::get('/dashboard', 'dashboard')->name('dashboard');

    Route::resource('leads', LeadsController::class);
});


