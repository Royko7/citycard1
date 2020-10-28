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

//Route::get('/admin', function () {

//    return view('admin.admin')->middleware('guest');
//});

Route::get('/admin', 'AdminController@index')->middleware('admin')->name('admin');

Route::get('profile', function () {
})->middleware('verified');

//Route::resource('routes','RoutesController')->middleware('admin');
Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

//Route::get('/home','EloquentController@Home');
Route::resource('region','RegionController')->middleware('admin');
Route::resource('city','CityController')->middleware('admin');
Route::resource('course','CourseController')->middleware('admin');
Route::resource('stop','StopController')->middleware('admin');
//Route::post('city/create','RegionController@city')->name('region.city');
Route::get('/home', 'HomeController@index')->middleware('user')->name('home');
Route::resource( 'cabinet','CabinetController')->middleware('user');
//Auth::logout();
Auth::routes();
