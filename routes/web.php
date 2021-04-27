<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
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

Route::view('/home', 'welcome')->name('index');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');



Auth::routes();
//Route::get('/home', [HomeController::class, 'index'])->name('index');
