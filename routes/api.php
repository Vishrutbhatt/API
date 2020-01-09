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

// Route::middleware('auth:api')->get('/posts', function (Request $request) {
//     return $request->user();

Route::post('/posts',"PostAPIcontroller@index");


Route::get('/posts',"PostAPIcontroller@show");

Route::put('/posts/{id}',"PostAPIcontroller@update");