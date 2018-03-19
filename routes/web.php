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

Route::get('/', 'ViewController@index')->name('index');
Route::get('/booking/{id}', 'ViewController@booking')->name('booking');
Route::get('/tour-details/{id}', 'ViewController@tour')->name('tour-details');

Route::post('/addbooking','ViewController@addbooking')->name('addbooking');
Route::post('insert','HomeController@insert')->name('insert');
Route::post('/update','HomeController@update')->name('update');
Route::get('/logout', 'View Controller@logout');
Route::post('/login', function(){
  return view('login');
});




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/travel', 'HomeController@travel')->name('travel');
Route::get('/event', 'HomeController@event')->name('event');
Route::get('/addpackage', 'HomeController@addpackage')->name('addpackage');
Route::get('/editpackage', 'HomeController@editpackage')->name('editpackage');
Route::get('/deletepacakege/{id}', 'HomeController@deletepackage')->name('deletepackage');
Route::get('/updatepackage/{id}', 'HomeController@updatepackage')->name('updatepackage');
Route::get('/dashboard', function(){
  return view('dashboard');
});
