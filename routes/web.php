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

Route::middleware('auth')->group(function () {

Route::get('profile/{slug}','ProfileController@index')->name('user.profile');

Route::get('changeprofileavatar','ProfileController@changeAvatar')->name('change.avatar');

Route::post('/updateavatar','ProfileController@updateAvatar')->name('update.avatar');
Route::get('/home', 'HomeController@index')->name('home');

});
