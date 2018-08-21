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

Route::get('{any}',function(){
	return view("home");
})->where('any','.*');
// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/admin', 'HomeController@index')->name('home');

 Auth::routes();
 // Authentication Routes...
// Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('admin/login', 'Auth\LoginController@login');
// Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('admin/register', 'Auth\RegisterController@register');

//     // Password Reset Routes...
// Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('admin/home', 'HomeController@index')->name('home');

// // Admin
// Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware' => ['auth']], function () {
// // Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles','RoleController');
//     Route::resource('users','UserController');
//     Route::resource('products','ProductController');
//     Route::resource('purposes','PurposeController');
//     Route::resource('property_types','PropertyTypeController');
//     Route::resource('distances','DistanceController');
// });