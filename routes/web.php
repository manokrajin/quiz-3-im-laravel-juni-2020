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
use Illuminate\Support\Facades\Route;
Route::get('/', 'articleControl@image');
Route::get('/article', 'articleControl@show');
Route::get('/article/create', 'articleControl@create');
Route::post('/article', 'articleControl@store');
Route::get('/artikel/{id}', 'articleControl@showdata');
Route::delete('/article/{id}',"ArticleController@drop");
Route::get('/article/{id}',"ArticleController@showw");
