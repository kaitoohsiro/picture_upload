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
//     return view('welcome');
// });

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'PostController@index')->name('posts.index');
Route::resource('/posts', 'PostController',  ['except' => ['index']]);
Route::resource('/users', 'UserController');
Route::resource('/comments', 'CommentController')->middleware('auth');