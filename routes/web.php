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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/cart', 'CartController@index');
Route::get('/order', 'CartController@order')->middleware('auth');
Route::get('/paid', 'CartController@paid')->middleware('auth');
Route::get('/library', 'LibraryController@index')->middleware('auth');
Route::get('/download/{id}', 'LibraryController@download');


Route::get('/test', function () {
    $arr = /*array_keys(*/(array) session()->get('cart')/*)*/;
    return $arr;
    return var_export(array_search("1",(array)$arr,true),true);
});