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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@ambildata')->name('home');
Route::get('/home/search', 'HomeController@searchdata')->name('search');

Route::group(['middleware'=>'Member'],function(){
    Route::get('/detail/{id}','HomeController@detailproduct')->name('detail');
    Route::get('/addCart/{id}', 'HomeController@addcart')->name('addCart');
    Route::get('/cart', 'HomeController@listcart')->name('cart');
    Route::post('/insertCart/{id}', 'HomeController@insertcart')->name('insertCart');
    Route::get('/cart/delete/{id}', 'HomeController@destroy');
    Route::get('/cart/edit/{id}', 'HomeController@edit');
    Route::patch('/cart/update/{id}', 'HomeController@update')->name('update');
    Route::get('/checkout', 'HomeController@checkout');
    Route::get('/history', 'HomeController@history')->name('history');
    Route::get('/detailTransaction/{date}', 'HomeController@detailtransaction')->name('detailtransaction');
});

Route::group(['middleware'=>'Admin'],function(){
    Route::get('/admin', function () {
        return view('admin');
    });
    // Route::get('/admin/addproduct', function () {
    //     return view('addproduct');
    // });
    Route::post('/addproduct', 'HomeController@addproduct')->name('addproduct');
    Route::get('/admproduct', 'HomeController@product')->name('admproduct');
    Route::get('/admin/viewCategory', 'HomeController@viewCategory')->name('viewCategory');
    Route::get('/admin/addCategory', function () {
        return view('addCategory');
    });
    Route::post('/admin/categoryAdded', 'HomeController@categoryAdded')->name('categoryAdd');
    Route::get('/admin/delete/{id}', 'HomeController@destroyProduct')->name('destroyProduct');
    Route::get('/admin/listProduct', 'HomeController@viewProduct')->name('listProduct');
    Route::get('/detailcategory/{id}','HomeController@detailcategory')->name('detailcategory');
});