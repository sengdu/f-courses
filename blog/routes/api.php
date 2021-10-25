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

Route::get('/categories','CategoryApiController@index');
Route::get('/categories/{$id}','CategoryApiController@detail');
Route::post('/categories','CategoryApiController@create');
Route::put('/categories/{$id}','CategoryApiController@update');
Route::delete('/categories/{$id}','CategoryApiController@delete');
