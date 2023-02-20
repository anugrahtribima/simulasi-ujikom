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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang', 'BarangController@index')->name('barang');
Route::get('/barang/create', 'BarangController@create')->name('barang.create');
Route::get('/barang/stock', 'BarangController@stock')->name('barang.stock');
Route::get('/barang/restock', 'BarangController@restock')->name('barang.restock');

Route::get('/barang/masuk', 'BarangController@masuk')->name('barang.masuk');
Route::get('/barang/keluar', 'BarangController@keluar')->name('barang.keluar');


Route::get('/brand', 'BrandController@index')->name('brand');

Route::get('/katagori', 'KatagoriController@index')->name('katagori');

Route::get('/satuan', 'SatuanController@index')->name('satuan');


Route::get('generate-pdf','HomeController@generatePDF');

Route::get('/nexmo','NexmoController@index');

Route::post('/nexmo','NexmoController@store')->name('nexmo.submit');

