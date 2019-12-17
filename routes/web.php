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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/product', 'productController@list');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact','ContactController@front');
Route::post('/contact/insert','ContactController@goInsert');

Route::get('/login','LoginController@login')->name('login');
Route::post('/login/process','LoginController@process');

Route::get('/register', 'LoginController@register');
Route::post('/register/process','LoginController@registerprocess');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'AdminController@dashboard');

    Route::get('/dashboard/insert', 'AdminController@front');
    Route::post('/dashboard/insert/process', 'AdminController@goInsert');
    Route::get('/dashboard/insert/process', 'AdminController@goInsert');

    Route::get('/dashboard/view', 'AdminController@view');

    Route::get('/dashboard/view/update/{id}', 'AdminController@up');
    Route::post('/dashboard/view/update/{id}/process', 'AdminController@goUpdate');

    Route::get('/dashboard/view/delete/{id}', 'AdminController@del');

    Route::get('/dashboard/viewmessage', 'AdminController@messages');

    Route::get('/logout','LoginController@logout');
});
