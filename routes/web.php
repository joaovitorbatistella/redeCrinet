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

    Route::prefix('admin')->group(function() {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    });

// BACKEND
Route::group(['middleware' => 'auth'], function(){
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::prefix('backend')->group(function() {
        Route::get('/', 'HomeBackendController@index')->name('home');
            // NEWS
        Route::get('/news/show/{uuid}', 'NewsController@show');
        Route::get('/news/create', 'NewsController@create');
        Route::post('/news/register', 'NewsController@store');
        Route::get('/news/edit/{uuid}', 'NewsController@edit');
        Route::put('/news/update/{uuid}', 'NewsController@update');
        Route::get('/news/delete/{uuid}', 'NewsController@delete');
        Route::delete('/news/delete/{uuid}', 'NewsController@destroy');


            // EVENTS
        Route::get('/events/show/{uuid}', 'EventsController@show');
        Route::get('/events/create', 'EventsController@create');
        Route::post('/events/register', 'EventsController@store');
        Route::get('/events/edit/{uuid}', 'EventsController@edit');
        Route::put('/events/update/{uuid}', 'EventsController@update');
        Route::get('/events/delete/{uuid}', 'EventsController@delete');
        Route::delete('/events/delete/{uuid}', 'EventsController@destroy');


            // CATEGORIES
        Route::get('/categories/show/{uuid}', 'CategoriesController@show');
        Route::get('/categories/create', 'CategoriesController@create');
        Route::post('/categories/register', 'CategoriesController@store');
        Route::get('/categories/edit/{uuid}', 'CategoriesController@edit');
        Route::put('/categories/update/{uuid}', 'CategoriesController@update');
        Route::get('/categories/delete/{uuid}', 'CategoriesController@delete');
        Route::delete('/categories/delete/{uuid}', 'CategoriesController@destroy');
    });

});
