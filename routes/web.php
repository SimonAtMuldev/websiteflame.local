<?php

use Illuminate\Support\Facades\Auth;
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

// This route has been replaced
//Route::get('/{any?}', function () {
//    return view('welcome');
//});

/**
 * Landing pages with no auth necessity
 */
Route::get('/', 'PostController@landing')->name('landing');
Route::get('/landing', 'PostController@landing')->name('landing');

/**
 * CMS pages with no auth necessity.
 * Display posts from the database.
 * and allows the user to use the slug links to show
 * one single post.
 */
Route::get('/website', 'PostController@all');
Route::get('/posts/{post}', 'PostController@single');

/**
 * Authenticated routes
 * if not logged in home redirects to login
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');
Route::get('/{post}/comments', 'CommentController@index');
Route::post('/{post}/comments', 'CommentController@store');

