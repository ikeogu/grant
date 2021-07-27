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
|php
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('search-property', function (){
	dd('here');
})->name('search-property');*/
Route::post('search-property', 'SearchController@searchProperty')->name('search-property');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('home', 'AdminController@index')->name('admin');

    // admin properties route
    Route::get('add-property', 'AdminController@addProperty')->name('add-property');
    Route::get('properties', 'AdminController@properties')->name('admin-properties');
    Route::get('properties-table', 'AdminController@propertiesTable')->name('admin-properties-table');
    Route::get('edit-property/{slug}', 'AdminController@editProperty')->name('admin-edit-property');
    Route::get('properties/{slug}', 'AdminController@propertyDetail')->name('admin-property-view');
    Route::post('delete-property', 'AdminController@deleteProperty');
    Route::get('delete-single-property/{slug}', 'AdminController@deleteSingleProperty')->name('delete-single-property');

    // admin users routes

    Route::get('users', 'AdminController@users')->name('users');
    Route::post('delete-user', 'AdminController@deleteUser');
    Route::get('user-detail/{id}', 'AdminController@userDetail')->name('user-detail');
    Route::post('update-user', 'AdminController@updateUser')->name('update-user');
});
Route::post('upload-property', 'PropertyController@uploadProperty')->name('upload-property');
Route::get('edit-property/{slug}', 'PropertyController@editProperty')->name('edit-property');
Route::get('properties', 'PropertyController@index')->name('properties');
Route::post('delete-property-photo', 'PropertyController@deletePhoto')->name('delete-property-photo');
Route::post('update-property/{slug}', 'PropertyController@updateProperty')->name('update-property');
Route::get('properties/{slug}', 'PropertyController@show')->name('property-detail');
Route::post('send-message', 'PropertyController@sendMessage')->name('send-message');
Route::get('my-interests', 'UserController@myInterests')->name('my-interests');
Route::get('update', 'PropertyController@update');
Route::post('remove-wishlist', 'UserController@removeFromWishList');
Route::get('like-property/{code}/{user_id}', 'PropertyController@insertInterest');
Route::get('verify-property-pay', 'PaymentController@verifyPayment')->name('verify-property-pay');
Route::post('property-payment', 'PaymentController@pay')->name('pay');
Route::get('payment-success', 'PaymentController@successPage')->name('payment-success');
Route::get('purchased_property', 'UserController@purchased')->name('purchased');

Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('add-property', 'UserController@addProperty')->name('addPro');
    Route::get('my-property-', 'UserController@myPro')->name('my_pro');
    Route::get('view-property-/{id}', 'UserController@showPro')->name('showPro');
});