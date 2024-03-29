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


use Illuminate\Support\Facades\Route;

Route::middleware('admin')->group(function (){
    Route::get('/admin', function (){
        return view('admin.admin');
    });
});


Route::get('/', 'ImagesController@index');

Route::get('/about', 'HomeController@about');

Route::get('/create', 'ImagesController@create');

Route::post('/store', 'ImagesController@store');

Route::get('/show/{id}', 'ImagesController@show');

Route::get('/edit/{id}', 'ImagesController@edit');

Route::post('/update/{id}', 'ImagesController@update');

Route::get('/delete/{id}', 'ImagesController@delete');