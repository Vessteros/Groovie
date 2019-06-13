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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::get('/accounts', 'AccountsController@index')->name('accounts');
//
// # методы для работы с блоком авторизации
// Route::post('/account/auth', 'AccountsController@auth');
// Route::post('/account/auth/check', 'AccountsController@check');
// Route::get('/account/vk/authorized', 'AccountsController@authorizedIndex');
// Route::post('/account/authorized/set', 'AccountsController@setAuthorized');
// Route::get('/home', 'AccountsController@home')->name('home');


# LANDING!!!

Route::get('/', 'SiteControllers\IndexController@indexAction')->name('/');

Route::get('/admin', 'AdminControllers\\ContentController@newsAction')->name('admin');
Route::get('/admin/feedback', 'AdminControllers\\ContentController@indexAction')->name('feedback');
Route::get('/admin/news', 'AdminControllers\\ContentController@newsAction')->name('news');
Route::get('/admin/updates', 'AdminControllers\\ContentController@updatesAction')->name('updates');

// Route::get('/admin/auth', 'AdminControllers\\AuthController@showFormAction')->name('admin.auth');