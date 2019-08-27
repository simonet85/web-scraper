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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'dashboard'], function () {
	Route::resource('/websites', 'WebsitesController');
	Route::resource('/categories', 'CategoriesController');
	Route::resource('/links', 'LinksController');
	Route::resource('/item-schema', 'ItemSchemaController');
	Route::resource('/articles', 'ArticlesController');
});
