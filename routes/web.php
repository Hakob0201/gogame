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

// <= =============== Home page =============== =>
Route::get('/', 'MainController@index');

// <= =============== Login =============== =>
Route::post('/login', 'LoginController@login');

// <= =============== Logout =============== =>
Route::get('/logout', 'LoginController@logout');

// <= =============== Sign up =============== =>
Route::post('/sign_up', 'Sign_upController@sign_up');

// <= =============== Verify =============== =>
Route::get('/account/verify/{hash}/{id}', "Sign_upController@verification");

// <= =============== Add post =============== =>
Route::post('/new_AddPost', 'PostsController@new_AddPost');

// <= =============== Add comment =============== =>
Route::post('/new_AddComment', 'CommentController@new_AddComment');

// <= =============== Print comment =============== =>
Route::post('/print_comment', 'CommentController@PrintComment');

// <= =============== Add like =============== =>
Route::post('/new_AddLike', 'LikeController@new_AddLike');

