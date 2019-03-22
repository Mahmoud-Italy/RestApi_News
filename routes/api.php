<?php

use Illuminate\Http\Request;

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

#Docs
Route::get('docs', 'AppCtrl@index');

#Categories
Route::get('categories', 'CategoryCtrl@index');
Route::post('categories/create', 'CategoryCtrl@create');
Route::post('categories/update', 'CategoryCtrl@update');
Route::post('categories/destroy', 'CategoryCtrl@destroy');


#News
Route::get('news', 'NewsCtrl@index');
Route::post('news/create',  'NewsCtrl@create');
Route::post('news/show',  'NewsCtrl@show');
Route::post('news/update',  'NewsCtrl@update');
Route::post('news/destroy',  'NewsCtrl@destroy');
Route::post('news/search',  'NewsCtrl@search');

