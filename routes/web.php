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
Route::post('/ajax/home', 'HomeController@ajax')->name('ajax.home');
Route::post('/ajaxAll/home', 'HomeController@ajaxAll')->name('ajaxAll.home');


Auth::routes();

// BACKEND
Route::group(['middleware' => 'auth'], function(){
    Route::get('/backend', 'HomeBackendController@index')->name('home');

        // NEWS
    Route::get('/news/show/{uuid}', 'NewsController@show');
    Route::get('/backend/news/create', 'NewsController@create');
    Route::post('/register/news', 'NewsController@store');
    Route::get('/news/delete/{uuid}', 'NewsController@delete');
    Route::delete('/news/delete/{uuid}', 'NewsController@destroy');


        // EVENTS
    Route::get('/events/show/{uuid}', 'HomeBackendController@show');
    Route::get('/backend/events/create', 'EventsController@create');
    Route::post('/register/events', 'EventsController@store');
    Route::get('/events/delete/{uuid}', 'EventsController@delete');
    Route::delete('/events/delete/{uuid}', 'EventsController@destroy');


        // CATEGORIES
    Route::get('/categories/show/{uuid}', 'CategoriesController@show');
    Route::get('/backend/categories/create', 'CategoriesController@create');
    Route::post('/register/categories', 'CategoriesController@store');
    Route::get('/categories/delete/{uuid}', 'CategoriesController@delete');
    Route::delete('/categories/delete/{uuid}', 'CategoriesController@destroy');
});
