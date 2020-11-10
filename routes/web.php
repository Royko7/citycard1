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
    return view('main');
});
Route::get('/admin', 'AdminController@index')->middleware('admin')->name('admin');
Route::get('profile', function () {
})->middleware('verified');
Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::resource('region','RegionController')->middleware('admin');
Route::resource('city','CityController')->middleware('admin');
Route::resource('course','CourseController')->middleware('admin');
Route::resource('stop','StopController')->middleware('admin');
Route::resource('transport','TransportController')->middleware('admin');
Route::resource('ticket','TicketController')->middleware('admin');
Route::resource('price','PriceController')->middleware('admin');
Route::resource('news','NewsController')->middleware('user');
Route::get('/home', 'HomeController@index')->middleware('user')->name('home');
Route::resource( 'cabinet','CabinetController')->middleware('user');
Auth::routes();
