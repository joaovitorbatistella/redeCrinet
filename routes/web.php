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

Route::get('/', 'HomeController@index')->name('home');



Auth::routes();
Route::group(['middleware' => 'auth'], function(){

Route::get('/news/show/{uuid}', 'HomeBackendController@show');
Route::get('/backend', 'HomeBackendController@index')->name('home');
Route::get('/backend/news/create', 'NewsBackendController@create');
Route::post('/register/news', 'NewsBackendController@store');
Route::get('/backend/category/create', 'CategoryBackendController@create');
Route::post('/register/category', 'CategoryBackendController@store');
Route::get('/news/delete/{uuid}', 'NewsBackendController@delete');
Route::delete('/delete/{uuid}', 'NewsBackendController@destroy');

});
