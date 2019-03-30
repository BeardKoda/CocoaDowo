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
// Route::get('/test','Sponsor\AuthController@test')->name('test');
//
// Route::get('/', function () {
//     return view('welcome');
// });

// front Page Routes
Route::get('/','FrontController@index')->name('home');

Route::get('/login','Sponsor\AuthController@showLoginForm')->name('login');
Route::post('/login', 'Sponsor\AuthController@login')->name('sponsor-logged');
Route::get('/signup','Sponsor\AuthController@showRegisterForm')->name('register');
Route::post('/signup', 'Sponsor\AuthController@register')->name('sponsor-registered');
Route::get('/verifyemail/{token}', 'Sponsor\AuthController@verify')->name('activate');

Route::group(['middleware' => 'auth'], function(){
  Route::get('/dashboard', 'Sponsor\DashboardController@index')->name('dashboard');
  Route::get('/locations', 'Sponsor\DashboardController@locations')->name('locations');
  Route::get('/payments', 'Sponsor\DashboardController@payments')->name('payments');
  Route::get('/settings', 'Sponsor\DashboardController@settings')->name('settings');
  Route::post('/settings/profile/save', 'Sponsor\DashboardController@saveProfile')->name('save-profile');
  Route::get('/logout', 'Sponsor\AuthController@logout')->name('logout');
});
