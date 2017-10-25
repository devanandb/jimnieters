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

Route::get('/', 'WebController@index');


Route::get('/articles', 'ArticleController@index');
Route::get('/home', 'HomeController@index');
Route::get('/admin/dashboard', 'WebController@dashboard')->middleware('auth');

Auth::routes();

Route::get('/category/{category}', 'WebController@category');
Route::get('/tag/{tag}', 'WebController@tag');
Route::get('/tags', 'WebController@tags');
Route::get('/content/{content}', 'WebController@content');
Route::get('/site/sitemap', 'WebController@generateSitemap');

Route::post('/site/subscribe', 'WebController@subscribe');
