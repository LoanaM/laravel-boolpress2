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

Route::get('/', 'HomeController@index')->name('home');

//ctg route
Route::get('/admin/categorie', 'CategoryController@index')->name('index');

Route::get('/admin/nuova-categoria', 'CategoryController@create')->name('create');
Route::post('/admin/nuova-categoria', 'CategoryController@save')->name('save');

//post route
Route::get('/admin/posts', 'PostController@index')->name('posts.index');
Route::get('/admin/nuovo-post', 'PostController@create')->name('posts.create');
