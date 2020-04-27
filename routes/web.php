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
use App\Application;
use App\Form;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['middleware'=>'auth'], function(){
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');
Route::get('uploadfile','HomeController@uploadFilePost');
Route::post('/uploadfile','HomeController@uploadFileImage');
Route::get('/attach-application', 'ApplicationsController@ShowAttachApplicationForm')->name('applications.attach');
Route::post('/attach', 'ApplicationsController@save')->name('applications.save');
Route::get('/applications', 'ApplicationsController@index')->name('applications');
Route::get('applications/{application}', 'ApplicationsController@show');
Route::put('applications/{applications}', 'ApplicationsController@update');
Route::delete('applications/{application}', 'ApplicationsController@delete');
Route::get('/applications/details/{id}', 'ApplicationsController@showDetails')->name('applications.details');


Route::get('/add-money', 'FormsController@ShowAddMoneyForm')->name('forms.add');
Route::post('/add', 'FormsController@AddMoney')->name('forms.save');
Route::get('/forms', 'FormsController@index')->name('forms');
Route::get('forms/{form}', 'FormsController@show');
//});
