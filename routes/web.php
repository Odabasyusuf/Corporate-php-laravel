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
Route::group(['middleware' => 'guest'], function (){
    Route::resource('/install','InstallController');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ->middleware(['auth'])
Route::namespace('admin')->prefix('admin')->middleware(['auth'])->name('admin.')->group(function (){

    Route::get('/admin','AdminController@index')->name('admin');
    Route::get('/routes','RouteController@index')->name('routes');

});


//Route::get('/admin','Admin\\AdminController@index')->name('admin');
//Route::get('/routes','Admin\\RouteController@index')->name('routes');
