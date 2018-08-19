<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users','Api\UserController');
Route::get('get_all_roles','Api\UserController@getAllRoles');

Route::resource('purposes','Api\PurposeController');
Route::resource('property_types','Api\PropertyTypeController');
Route::resource('distances','Api\DistanceController');
// Route::get('/admin', 'HomeController@index')->name('home');
