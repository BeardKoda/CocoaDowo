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
Route::get('/about.html','FrontController@about')->name('about');
Route::get('/farmers.html','FrontController@farmers')->name('farmers');
Route::get('/products.html','FrontController@products')->name('products');
Route::get('/product/descritpion/{id}.html','FrontController@product')->name('product');

Route::prefix('')->group(function(){
  Route::get('/login','Sponsor\AuthController@showLoginForm')->name('login');
  Route::post('/login', 'Sponsor\AuthController@login')->name('sponsor-logged');
  Route::get('/signup','Sponsor\AuthController@showRegisterForm')->name('register');
  Route::post('/signup', 'Sponsor\AuthController@register')->name('sponsor-registered');
  Route::get('/verifyemail/{token}', 'Sponsor\AuthController@verify')->name('activate'); 

  Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'Sponsor\DashboardController@index')->name('dashboard');
    Route::get('/locations', 'Sponsor\DashboardController@locations')->name('locations');
    Route::get('/investments', 'Sponsor\InvestmentController@index')->name('investments');
    Route::get('/wallet', 'Sponsor\WalletController@index')->name('wallet');
    Route::get('/investment/all', 'Sponsor\InvestmentController@myindex')->name('investments.myindex');
    Route::get('/investment/type/{id}', 'Sponsor\InvestmentController@type')->name('investment-type');
    Route::get('/investment/product/{id}', 'Sponsor\InvestmentController@payForm')->name('investment-product');
    Route::get('/transactions', 'Sponsor\InvestmentController@getTransactions')->name('transactions');
    // Route::get('/payments', 'Sponsor\InvestmentController@payForm')->name('payments');
    // payment
    Route::post('/pay', 'Sponsor\PayController@initialize')->name('pay');
    Route::post('/pay/callback', 'Sponsor\PayController@callback')->name('callback');

    Route::get('/settings', 'Sponsor\DashboardController@settings')->name('settings');
    Route::post('/settings/profile/save', 'Sponsor\DashboardController@saveProfile')->name('save-profile');
    Route::get('/logout', 'Sponsor\AuthController@logout')->name('logout');

    // Route::get('/investment/plan', 'Sponsor\InvestmentController@payplan')->name('pay-plan');
    // Route::post('/paymentplans/create', 'Sponsor\PayController@createPaymentPlan')->name('createpaymentplan2');
    // Route::get('/paymentplans', 'sponsor\PayController@fetchPaymentPlan')->name('fetchPaymentPlan');
  });
});


// Admin Routes
Route::prefix('admin')->group(function(){
    // Authentication Routes
    Route::get('/login', 'Admin\Auth\AdminLoginController@showloginForm')->name('admin.login');
    Route::post('/login', 'Admin\Auth\AdminLoginController@login')->name('admin.login.submit');
    // Logged in Routes
    Route::group(['middleware' => 'auth:admin'], function(){
      Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
      Route::post('/paymentplans/create', 'Admin\PayController@createPaymentPlan')->name('createpaymentplan');
      Route::get('/paymentplans', 'Admin\PayController@fetchPaymentPlan')->name('fetchPaymentPlan');
      Route::prefix('supervisors')->group(function(){
        Route::get('/', 'Admin\AdminController@getAdmins')->name('admin');
        Route::get('/suspended', 'Admin\AdminController@getSuspendedAdmins')->name('admin-suspended');
        Route::get('/deleted', 'Admin\AdminController@getDeletedAdmins')->name('admin-deleted');
        Route::get('/new', 'Admin\AdminController@add')->name('admin-new');
        Route::post('/new', 'Admin\AdminController@store')->name('admin-add');
        Route::get('/edit/{id}', 'Admin\AdminController@edit')->name('admin-edit');
        Route::post('/edit/{id}', 'Admin\AdminController@update')->name('admin-save');
        Route::get('/suspend/{id}', 'Admin\AdminController@deactivate')->name('admin-suspend');
        Route::get('/unsuspend/{id}', 'Admin\AdminController@activate')->name('admin-unsuspend');
        Route::get('/delete/{id}', 'Admin\AdminController@delete')->name('admin-delete');
      });
      Route::prefix('Sponsors')->group(function(){
        Route::get('/', 'Admin\SponsorController@getSponsors')->name('admin-users');
        Route::get('/premium', 'Admin\SponsorController@getPremiumSponsors')->name('admin-premium-users');
        Route::get('/suspended', 'Admin\SponsorController@getSuspendedSponsors')->name('admin-suspended-users');
        Route::get('/deleted', 'Admin\SponsorController@getDeletedSponsors')->name('admin-deleted-users');
        Route::get('/new', 'Admin\SponsorController@add')->name('admin-users-new');
        Route::post('/new', 'Admin\SponsorController@store')->name('admin-users-add');
        Route::get('/edit/{id}', 'Admin\SponsorController@edit')->name('admin-users-edit');
        Route::post('/edit/{id}', 'Admin\SponsorController@update')->name('admin-users-save');
        Route::get('/suspend/{id}', 'Admin\SponsorController@deactivate')->name('admin-users-suspend');
        Route::get('/unsuspend/{id}', 'Admin\SponsorController@activate')->name('admin-users-unsuspend');
        Route::get('/delete/{id}', 'Admin\SponsorController@delete')->name('admin-users-delete');
      });
      
      Route::prefix('Farmers')->group(function(){
        Route::get('/', 'Admin\FarmerController@getFarmers')->name('admin-farmers');
        Route::get('/suspended', 'Admin\FarmerController@getSuspendedFarmers')->name('admin-suspended-farmer');
        Route::get('/deleted', 'Admin\FarmerController@getDeletedFarmers')->name('admin-deleted-farmer');
        Route::get('/new', 'Admin\FarmerController@add')->name('admin-farmer-new');
        Route::post('/new', 'Admin\FarmerController@store')->name('admin-farmer-add');
        Route::get('/edit/{id}', 'Admin\FarmerController@edit')->name('admin-farmer-edit');
        Route::post('/edit/{id}', 'Admin\FarmerController@update')->name('admin-farmer-save');
        Route::get('/suspend/{id}', 'Admin\FarmerController@deactivate')->name('admin-farmer-suspend');
        Route::get('/unsuspend/{id}', 'Admin\FarmerController@activate')->name('admin-farmer-unsuspend');
        Route::get('/delete/{id}', 'Admin\FarmerController@delete')->name('admin-farmer-delete');
      });

      Route::resource('/products', 'Admin\ProductController');
      Route::resource('/investments', 'Admin\InvestmentController');
    });
    // Logout
    Route::get('/logout', 'Admin\Auth\AdminLoginController@logout')->name('admin-logout');
});
