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

Route::get('/', 'ocrController@index');
Route::get('/uploadfile', 'UploadController@uploadFile');
Route::post('/uploadFilePost', 'UploadController@uploadFilePost')->name('uploadFilePost');
Route::get('/uploadFilelang', 'UploadController@languageGet');