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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function(){
    return view('test');
});

Route::get('formulir', 'FormulirController@show');
Route::post('formulir/process', 'FormulirController@process');

Route::get('blog', 'BlogController@home');
Route::get('blog/about', 'BlogController@about');
Route::get('blog/contact', 'BlogController@contact');


Route::get('book/', 'BookController@show');
Route::get('book/tambah', 'BookController@showAddView');
Route::post('book/insert', 'BookController@insert');
Route::get('book/update/{id}', 'BookController@showUpdateView');
Route::post('book/update', 'BookController@update');
Route::get('book/delete/{id}', 'BookController@delete');

Route::get('book/googlebook', 'BookController@showBookGoogle');
