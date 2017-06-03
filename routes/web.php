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

Route::get('/', 'PhotosController@photos');

Route::get('upload', function () {

    return view('upload');

});

Route::get('{anything}', 'PhotosController@photos')->where('anything', '[A-Za-z\-\.]+');

Route::post('upload', 'PhotosController@upload')->name('upload');

//Route::get('edit/{pid}', 'PhotosController@edit')->where('pid', '[0-9]+');
Route::get('edit/{pid}', 'PhotosController@edit')->where('pid', '[0-9]+');

Route::patch('edit/{pid}', 'PhotosController@update')->name('edit');

Route::get('{pid}', 'PhotosController@show')->where('pid', '[0-9]+')->name('show');