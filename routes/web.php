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

Route::get('utgz/{name?}', function ($name="Please, insert a name") {
    return 'WELCOME '.$name;
});

Route::get('example', function() {
	return view('example');
});

Route::resource('categories', 'CategoryController');
Route::resource('careers', 'CareersController');
Route::resource('books', 'BooksController');
Route::resource('roles', 'RoleController');

Route::get('library', function(){
	return view('library');
});

