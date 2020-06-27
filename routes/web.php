<?php

use Illuminate\Support\Facades\Route;

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
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

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::post('/ajax/home', 'Frontend\HomeController@ajax')->name('ajax.home');
Route::post('/ajaxAll/home', 'Frontend\HomeController@ajaxAll')->name('ajaxAll.home');
Route::get('/news/show/{uuid}', 'Frontend\NewsController@show');


Auth::routes();

    Route::prefix('admin')->group(function() {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    });

// BACKEND
Route::group(['middleware' => 'auth'], function(){
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::prefix('backend')->group(function() {
        Route::get('/', 'Backend\HomeBackendController@index')->name('home');
            // NEWS
        Route::get('/news/show/{uuid}', 'Backend\NewsController@show');
        Route::get('/news/create', 'Backend\NewsController@create');
        Route::post('/news/register', 'Backend\NewsController@store');
        Route::get('/news/edit/{uuid}', 'Backend\NewsController@edit');
        Route::put('/news/update/{uuid}', 'Backend\NewsController@update');
        Route::get('/news/delete/{uuid}', 'Backend\NewsController@delete');
        Route::delete('/news/delete/{uuid}', 'Backend\NewsController@destroy');


            // EVENTS
        Route::get('/events/show/{uuid}', 'Backend\EventsController@show');
        Route::get('/events/create', 'Backend\EventsController@create');
        Route::post('/events/register', 'Backend\EventsController@store');
        Route::get('/events/edit/{uuid}', 'Backend\EventsController@edit');
        Route::put('/events/update/{uuid}', 'Backend\EventsController@update');
        Route::get('/events/delete/{uuid}', 'Backend\EventsController@delete');
        Route::delete('/events/delete/{uuid}', 'Backend\EventsController@destroy');


            // CATEGORIES
        Route::get('/categories/show/{uuid}', 'Backend\CategoriesController@show');
        Route::get('/categories/create', 'Backend\CategoriesController@create');
        Route::post('/categories/register', 'Backend\CategoriesController@store');
        Route::get('/categories/edit/{uuid}', 'Backend\CategoriesController@edit');
        Route::put('/categories/update/{uuid}', 'Backend\CategoriesController@update');
        Route::get('/categories/delete/{uuid}', 'Backend\CategoriesController@delete');
        Route::delete('/categories/delete/{uuid}', 'Backend\CategoriesController@destroy');

        // LIVE
        Route::post('/live/register', 'Backend\LiveController@store');
    });

});
