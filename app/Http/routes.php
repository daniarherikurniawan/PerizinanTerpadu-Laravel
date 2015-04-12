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
Route::get('listperizinan', 'PerizinanController@showListPerizinan');

Route::get('detailperizinan/{str}', 'PerizinanController@showDetailPerizinan');

Route::get('isiform/{str}', 'PerizinanController@showFormulir');


Route::get('login', 'HomeController@login');

Route::get('logout', 'HomeController@logout');

Route::get('clean', 'HomeController@clean');

Route::get('editakun', 'HomeController@editAkun');

Route::patch('login', 'HomeController@checkLogin');

Route::patch('updateakun', 'HomeController@updateAkun');

Route::get('signup', 'HomeController@signup');

Route::patch('signup', 'HomeController@checkSignup');

Route::get('profil', 'HomeController@profil');

Route::get('home', 'HomeController@home');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
