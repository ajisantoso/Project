<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [
   'as' => 'index', 'uses' => 'HomeController@index'
 ]);

Route::get('viewVendor', 'vendorController@index');
Route::get('viewKetersediaan', 'userController@index');
Route::get('addTipeLap', 'lapController@index');

Route::get('admin', function()
{
	return View::make('admin'); // laravel 5 return View('pages.about');
});

Route::get('user', function()
{
	return View::make('user'); // laravel 5 return View('pages.about');
});

Route::get('register', [
   'as' => 'register', 'uses' => 'SimpleauthController@register'
 ]);

Route::post('user-registration', [
  'as' => 'user-registration', 'uses' => 'SimpleauthController@userRegister'
]);

Route::post('vendors-registration', [
   'as' => 'vendors-registration', 'uses' => 'AdminController@VendorRegister'
 ]);

Route::post('/admin', [
   'as' => 'lapangan-registration', 'uses' => 'AdminController@lapanganRegister'
 ]);

Route::get('/registration/activate/{code}', [
 'as' => 'activate', 'uses' => 'SimpleauthController@activate'
 ]);

 Route::post('/login', [
 'as' => 'login', 'uses' => 'SimpleauthController@login'
 ]);

 Route::post('/landing', [
 'as' => 'landing', 'uses' => 'SimpleauthController@landing'
 ]);

Route::get('logout', [
 'as' => 'logout', 'uses' => 'SimpleauthController@logout'
 ]);
