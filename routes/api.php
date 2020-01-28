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


// for insert
Route::post('/posts',"PostAPIcontroller@insert");


// for fetching data
Route::get('/posts',"PostAPIcontroller@show");

// for updating 
Route::put('/posts/{id}',"PostAPIcontroller@update");

// for deleting 
Route::delete('/posts/{id}',"PostAPIcontroller@delete");

