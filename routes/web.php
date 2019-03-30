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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/accounts', 'AccountsController@index')->name('accounts');

# методы для работы с блоком авторизации
Route::post('/account/auth', 'AccountsController@auth');
Route::post('/account/auth/check', 'AccountsController@check');
Route::get('/account/vk/authorized', 'AccountsController@authorizedIndex');
Route::post('/account/authorized/set', 'AccountsController@setAuthorized');

# new
Route::get('/home', 'AccountsController@home')->name('home');