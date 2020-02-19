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


Route::get('/', function () {
    return redirect(url('/shop'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::resource('/brands', 'BrandController');
Route::resource('/women', 'WomanController');
Route::resource('/men', 'manController');
Route::resource('/children', 'ChildController');
Route::resource('/accessories', 'AccessorieController');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contactus', 'ContactController@index')->name('contactus');
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/wish', 'wishController@index')->name('wish');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
*/

Route::get('/{any}','HandlerController@index')->where('any','*');


