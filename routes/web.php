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
Route::get('/', ['as' => 'front.login', 'uses' => 'Front\FrontController@login']);
Route::post('/front/subscribe', ['as' => 'front.subscribe', 'uses' => 'Front\FrontController@subscribestore']);
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['admin'],['namespace'=>'admin']], function() {
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');
	 //book start
     Route::get('/book', ['as' => 'book.index', 'uses' => 'Admin\\BookController@index']);
     Route::get('/book/create', ['as' => 'book.create', 'uses' => 'Admin\\BookController@create']);
     Route::post('/book/store', ['as' => 'book.store', 'uses' => 'Admin\\BookController@store']);
     Route::get('/book/edit/{id}', ['as' => 'book.edit', 'uses' => 'Admin\\BookController@edit']);
     Route::put('/book/update/{id}', ['as' => 'book.update', 'uses' => 'Admin\\BookController@update']);
     Route::get('/book/delete/{id}', ['as' => 'book.delete', 'uses' => 'Admin\\BookController@destroy']);
     //book end

     //subscriber start
     Route::get('/subscriber', ['as' => 'subscriber.index', 'uses' => 'Admin\\IndexController@subscriber']);
     //subscriber end

});