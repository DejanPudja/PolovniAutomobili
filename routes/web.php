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

Route::get('/', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('/Onama', 'App\Http\Controllers\MainController@onama');
Route::get('/Kategorije', 'App\Http\Controllers\MainController@kategorije');
Route::resource('Automobili', 'App\Http\Controllers\CarsController');
Route::resource('Kategorija', 'App\Http\Controllers\CategoryController');
Route::get('/NoviOglas', 'App\Http\Controllers\MainController@novi_oglas');
Route::resource('/AzuriranjeOglasa', 'App\Http\Controllers\CarsController');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
