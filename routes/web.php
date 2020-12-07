<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/index','SessionsController@index')->middleware('auth');

Route::view('/register','register');
Route::post('register','SessionsController@create');

Route::get('/login','SessionsController@login')->name('login');
Route::post('/login','SessionsController@store');




Route::get('/list','RestaurantController@show')->middleware('auth');
Route::view('/add','add')->middleware('auth');
Route::post('/add','RestaurantController@add');
Route::get('logout','SessionsController@destroy');
Route::any('/delete_hotel',"RestaurantController@hotel_delete");
Route::post('/comment/{id}/comment','CommentsController@store');
Route::get('/restaurant/{id}','CommentsController@show');

Route::get('/comments','CommentsController@comments');
