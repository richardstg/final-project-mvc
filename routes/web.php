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

// Public routes
Route::get('/', 'App\Http\Controllers\Open\PagesController@index');
Route::get('/blog', 'App\Http\Controllers\Open\PagesController@blog');
Route::get('/blog/{slug}', 'App\Http\Controllers\Open\PagesController@post');
Route::get('/about', 'App\Http\Controllers\Open\PagesController@about');
Route::get('/contact', 'App\Http\Controllers\Open\PagesController@contact');
Route::get('/login', 'App\Http\Controllers\Open\PagesController@login');

Auth::routes();

// Admin routes
Route::resource('/admin', 'App\Http\Controllers\Restricted\PostsController');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
