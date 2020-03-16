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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');
Route::get('/add-application', 'ApplicationController@ShowAddApplicationForm')->name('applications.add');
Route::post('add', 'ApplicationController@AddApplication')->name('applications.save');
Route::get('/applications', 'ApplicationController@ShowApplications')->name('applications');
Route::get('/add-money', 'FormController@ShowAddMoneyForm')->name('forms.add');
Route::post('add', 'FormController@AddMoney')->name('forms.save');
Route::get('/forms', 'FormController@ShowForm')->name('forms');

Route::get('applications', 'ApplicationController@index');
 
Route::get('applcations/create', 'ApplicationController@create');
 
Route::get('applcations/{id}', 'ApplicationController@show');
 
Route::post('applications', 'ApplicationController@store');

Route::get('/home', 'HomeController@index')->name('home');
