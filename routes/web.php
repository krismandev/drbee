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

Route::get('/','FrontController@index')->name('index');
Auth::routes();

Route::post('/login','AuthController@postlogin')->name('postLogin');
Route::get('/logout','AuthController@logout')->name('logout');
Route::get('/produk','FrontController@produk')->name('produk');

Route::group(['middleware' => ['auth'],'prefix' => 'dashboard'], function(){
    Route::get('/','AdminController@index')->name('index_admin');


    Route::group(['prefix'=>'produk'],function(){
        Route::get('/','AdminController@getProduk')->name('getProduk');
        Route::get('/create','AdminController@createProduk')->name('createProduk');
        Route::post('/','AdminController@storeProduk')->name('storeProduk');
        Route::get('/{id}','AdminController@editProduk')->name('editProduk');
        Route::patch('/','AdminController@updateProduk')->name('updateProduk');
        Route::get('/delete/{id}','AdminController@deleteProduk')->name('deleteProduk');
    });

    Route::group(['prefix'=>'banner'],function(){
        Route::get('/','AdminController@getBanner')->name('getBanner');
        Route::post('/','AdminController@storeBanner')->name('storeBanner');
        Route::get('/delete/{id}','AdminController@deleteBanner')->name('deleteBanner');
    });
});
