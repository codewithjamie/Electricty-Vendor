<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PageController@Home');
Route::get('/about', 'HomeController@About');
Route::get('/contact', 'HomeController@Contact');
Route::get('/help', 'HomeController@Help');
Route::get('/faqs', 'HomeController@faq');
Route::get('/discos/{slug}', 'PageController@fetch')->where('slug', '[\-_A-Za-z]+');

Auth::routes(['verify' => true]);
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::post('update-profile', 'ActionController@store')->name('update.profile');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/logout', 'HomeController@LogoutLink')->name('logout');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');
Route::get('/dashboard/admin', 'AdminController@index')->name('dashboard/admin')->middleware('verified');
Route::get('/dashboard/all-users', 'ActionUserController@index')->name('dashboard/all-users')->middleware('verified');
Route::get('/dashboard/users/active-users', 'ActionUserController@fetchActiveUsers')->name('dashboard/users/inactive-users');
Route::get('/dashboard/users/inactive-users', 'ActionUserController@fetchInactiveUsers')->name('dashboard/users/inactive-users');
Route::get('/dashboard/users/view-user/{id}', 'ActionUserController@viewUser');
Route::get('/dashboard/users/user-logs/{email}', 'ActionUserController@UserLog');
Route::get('/dashboard/users/fund-wallet/{email}', 'ActionUserController@Fundme');
Route::get('/dashboard/fund-account', 'ActionUserController@FundUser');
Route::post('/fund-account', 'DepositController@store');


Route::get('/dashboard/all-agents', 'AgentController@index')->name('dashboard/all-agents')->middleware('verified');
Route::get('/dashboard/agents/active-agents', 'AgentController@fetchActiveAgent')->name('dashboard/agents/inactive-agents');
Route::get('/dashboard/agents/inactive-agents', 'AgentController@fetchInactiveAgent')->name('dashboard/agents/inactive-agents');
Route::get('/dashboard/agents/view-agent/{id}', 'AgentController@viewAgent');


Route::get('/dashboard/discos/all', 'DiscosController@index')->name('dashboard/all');
Route::get('/dashboard/discos/create-disco', 'DiscosController@create')->name('dashboard/create');
Route::get('/dashboard/discos/edit-disco/{id}', 'DiscosController@edit')->name('dashboard/edit');
Route::post('/discos/store-disco', 'DiscosController@store')->name('discos/store-disco');
Route::patch('/discos/update-disco/{id}', 'DiscosController@update')->name('dashboard/update-disco');
Route::get('/dashboard/agents/active-discos', 'AgentController@fetchActiveDisco')->name('dashboard/agents/inactive-discos');
Route::get('/dashboard/agents/inactive-discos', 'AgentController@fetchInactiveDisco')->name('dashboard/agents/inactive-discos');
Route::delete('/dashboard/discos/delete-disco/{id}', 'DiscosController@destroy')->name('dashboard/delete-disco');

Route::get('/dashboard/commissions', 'CommissionController@index')->name('/dashboard/commissions');
Route::get('/dashboard/commissions/create', 'CommissionController@create')->name('/dashboard/create');
Route::post('/commissions/create-commission', 'CommissionController@store')->name('/commissions/create-commission');
Route::get('/dashboard/commissions/edit/{id}', 'CommissionController@edit')->name('/dashboard/edit');
Route::patch('/commissions/update-commission/{id}', 'CommissionController@update')->name('/dashboard/update');
Route::delete('/commissions/delete-commission/{id}', 'CommissionController@destroy')->name('/dashboard/delete');

Route::get('/dashboard/discounts', 'DiscountController@index')->name('/dashboard/discounts');
Route::get('/dashboard/discounts/create', 'DiscountController@create')->name('/dashboard/create-discount');
Route::get('/dashboard/discounts/edit/{id}', 'DiscountController@edit')->name('/dashboard/edit-discount');
Route::get('/dashboard/discounts/delete/{id}', 'DiscountController@destory')->name('/dashboard/delete-discount');
Route::post('/discounts/create-discount', 'DiscountController@store')->name('/discounts/create-discount');
Route::patch('/discounts/update-discount/{id}', 'DiscountController@update')->name('/dashboard/update');
Route::delete('/discounts/delete-discount/{id}', 'DiscountController@destroy')->name('/dashboard/delete');



Route::get('/dashboard/agent', 'AgentUsrController@index')->name('dashboard/agent')->middleware('verified');
Route::get('/dashboard/user', 'UserController@index')->name('dashboard/agent')->middleware('verified');
Route::get('/dashboard/buy-power', 'UserController@pow')->name('dashboard/buy-power')->middleware('verified');
Route::get('/dashboard/deposit', 'DepositController@index')->name('dashboard/deposit')->middleware('verified');


Route::get('/dashboard/notifications/all', 'NotificationController@index');
Route::post('/dashboard/create-notification', 'NotificationController@store');
Route::patch('/dashboard/update-notification/{id}', 'NotificationController@update');
Route::delete('/dashboard/delete-notification/{id}', 'NotificationController@destroy');

Route::get('/dashboard/deposits/deposit-list', 'DepositController@list');

Route::get('/dashboard/sale/sales-list', 'SaleController@index');

Route::get('/dashboard/purchases/purchase-list', 'PurchaseController@index');

Route::get('/dashboard/account', function() {
    return view('dashboard/pages/settings/profile');
});
Route::get('/dashboard/profile', function() {
    return view('dashboard/pages/settings/account-profile');
});
Route::get('/dashboard/logs', function() {
    return view('dashboard/pages/settings/logs');
});
Route::get('/user/commissions', function() {
    return view('dashboard/pages/commissions');
});
Route::get('/dashboard/kyc', function() {
    return view('dashboard/pages/kyc');
});
Route::get('/dashboard/purchase', function() {
    return view('dashboard/pages/purchase-log');
});

Route::get('/dashboard/settings/logs', 'ActivityLogController@index')->name('/dashboard/settings/logs');




/*
 ***********************************************************************************
 **************************** Location Routing Ends  *****************************
 ***********************************************************************************
*/
Route::get('dropdownlist','LocationController@index');
Route::get('get-state-list','LocationController@getStateList');
Route::get('get-city-list','LocationController@getCityList');
Route::get('get-lga-list','LocationController@getLGAList');
