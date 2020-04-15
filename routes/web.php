<?php

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

// Backend
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api/ahmadraosanawarali/recipe/{id}', 'RecipeController@recipe');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::resource('/admin/recipes', 'RecipeController');
});


Route::get(
    '{uri}',
    '\\' . Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
