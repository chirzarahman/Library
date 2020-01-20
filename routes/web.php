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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::view('/', 'auth.login');
Route::get('/home', 'HomeController@index');

Route::get('/Book', 'BookController@index');
Route::get('/Add Book', 'BookController@create');
Route::post('/add-book', 'BookController@store');
Route::get('/Edit Book/{book}', 'BookController@edit');
Route::put('/edit-book/{book}', 'BookController@update');
Route::delete('/delete/{book}', 'BookController@destroy');