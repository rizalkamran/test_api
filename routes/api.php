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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('stuff', 'StuffController@get_all');
Route::post('stuff/create', 'StuffController@insert');
Route::put('stuff/update/{kode}', 'StuffController@update');
Route::delete('stuff/delete/{kode}', 'StuffController@delete');
