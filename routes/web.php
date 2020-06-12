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
    Route::get('/backend/news/show/{uuid}', 'NewsController@show');
    Route::get('/backend/news/create', 'NewsController@create');
    Route::post('/backend/news/register', 'NewsController@store');
    Route::get('/backend/news/edit/{uuid}', 'NewsController@edit');
    Route::put('/backend/news/update/{uuid}', 'NewsController@update');
    Route::get('/backend/news/delete/{uuid}', 'NewsController@delete');
    Route::delete('/backend/news/delete/{uuid}', 'NewsController@destroy');


        // EVENTS
    Route::get('/backend/events/show/{uuid}', 'EventsController@show');
    Route::get('/backend/events/create', 'EventsController@create');
    Route::post('/backend/events/register', 'EventsController@store');
    Route::get('/backend/events/edit/{uuid}', 'EventsController@edit');
    Route::put('/backend/events/update/{uuid}', 'EventsController@update');
    Route::get('/backend/events/delete/{uuid}', 'EventsController@delete');
    Route::delete('/backend/events/delete/{uuid}', 'EventsController@destroy');


        // CATEGORIES
    Route::get('/backend/categories/show/{uuid}', 'CategoriesController@show');
    Route::get('/backend/categories/create', 'CategoriesController@create');
    Route::post('/backend/categories/register', 'CategoriesController@store');
    Route::get('/backend/categories/edit/{uuid}', 'CategoriesController@edit');
    Route::put('/backend/categories/update/{uuid}', 'CategoriesController@update');
    Route::get('/backend/categories/delete/{uuid}', 'CategoriesController@delete');
    Route::delete('/backend/categories/delete/{uuid}', 'CategoriesController@destroy');
});
