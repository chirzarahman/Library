<?php

use Illuminate\Http\Request;
use App\Book;

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

// Route::get('Book', function(){
//     return Book::all();
// });
Route::get('users', 'ApiController@user');
Route::get('books', 'ApiController@index');
Route::post('register', 'ApiController@register')->name('Register');
Route::post('login', 'ApiController@login')->name('login');