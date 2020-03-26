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

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['middleware'=>'auth'], function(){
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');
Route::get('applications/create', 'ApplicationsController@create'); 
//Route::get('/add-application', 'ApplicationsController@ShowAddApplicationForm')->name('applications.add');
//Route::post('/add', 'ApplicationsController@AddApplication')->name('applications.save');
//Route::get('/add/', [ 'as' => 'applications.save', 'applications' => 'ApplicationsController@save']);
Route::get('/applications/details/{id}', 'ApplicationsController@showDetails')->name('applications.details');



//Route::post('/applications', 'ApplicationsController@store');
Route::get('/applications', 'ApplicationsController@index');
//Route::get('applications/{application}', 'ApplicationsController@show');
//Route::put('applications/{applications}', 'ApplicationsController@update');
//Route::delete('applications/{application}', 'ApplicationsController@delete');

Route::get('/add-money', 'FormsController@ShowAddMoneyForm')->name('forms.add');
Route::post('add', 'FormsController@AddMoney')->name('forms.save');
Route::get('/forms', 'FormsController@ShowForm')->name('forms');

//)};

