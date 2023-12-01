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


Route::get('/', [App\Http\Controllers\dark\HomeController::class, 'index'])->name('index');
Route::get('/gallery', [App\Http\Controllers\dark\HomeController::class, 'gallery'])->name('gallery');
Route::get('/contant', [App\Http\Controllers\dark\HomeController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/s', [App\Http\Controllers\admin\SliderController::class, 'index'])->name('sform');
Route::post('/store', [App\Http\Controllers\admin\SliderController::class, 'store'])->name('slider_store');
Route::get('/slider', [App\Http\Controllers\admin\SliderController::class, 'show'])->name('slider');

