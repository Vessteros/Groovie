<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

function getMethod(string $controller, string $method) {
    return "ApiControllers\\{$controller}Controller@{$method}Action";
}

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth', getMethod('Auth', 'index'));
Route::post('/register', getMethod('Register', 'index'));
Route::post('/user/check/password', getMethod('Profile', 'checkPassword'));
Route::post('/user/profile/update', getMethod('Profile', 'saveProfileChanges'));
Route::post('/user/network_token/set', getMethod('Profile', 'setNetworkAccessToken'));
Route::post('/user/network_token/get', getMethod('Profile', 'getNetworkAccessToken'));

Route::get('/user/{id}/get', getMethod('Profile', 'userGet'));
Route::get('/user/network_list', getMethod('Profile', 'getConnectedNetworks'));
