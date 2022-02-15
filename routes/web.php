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
# '/' → URLの名前
# Route ファザード
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sample', function () {
//     return view('sample');
// });

// Route::get('URL', 'コントローラ@コントローラーのメソッド')->name('URLの名前');
Route::get('/sample', 'SampleController@index')->name('sample.index');