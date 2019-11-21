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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop');
Route::get('/producto', 'HomeController@producto');
Route::get('/carrito', 'HomeController@carrito');
Route::get('/factura', 'HomeController@factura');
Route::post('/comprar', 'HomeController@comprar');
Route::get('/borrar', 'HomeController@borrar');
Route::post('/pagar', 'HomeController@pagar');
Route::get('/pagos', 'HomeController@pagos');
Route::get('/nosotros', 'HomeController@nosotros');
Route::get('/contactenos', 'HomeController@contactenos');
Route::post('/correo', 'HomeController@correo');
Route::post('/test', 'HomeController@test');