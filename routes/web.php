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

Route::get('/', 'site\PagesController@getIndexPage')->name('page.index');

Route::get('/user/{id}', 'auth\ProfileController@getProfilePage')->name('user.profile');

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'admin\PagesController@getDashboardPage')->name('admin.page.dashboard');
    Route::get('/games', 'admin\GameController@index')->name('admin.page.games');
    Route::get('/games/new', 'admin\GameController@create')->name('admin.page.games.create');
});

Auth::routes();