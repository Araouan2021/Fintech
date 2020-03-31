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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['middleware'=>'auth'], function(){
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');
//Route::get('applications/create', 'ApplicationsController@create'); 
Route::get('/create', function (){
	$firstname = "John";
	$lastname = "Mensah";
	$phonenumber = "0207899087";
	$farmlocation = "Winneba";
	$MOMOnumber = "0207899087";
	$loanamount = "800c";
	Application::create(['firstname'=>$firstname, 'lastname'=>$lastname, 'phonenumber'=>$phonenumber, 'farmlocation'=>$farmlocation, 'MOMOnumber'=>$MOMOnumber, 'loanamount'=>$loanamount]);
        return view('create');
});
Route::get('uploadfile','HomeController@uploadfile');
Route::post('/uploadfile','HomeController@uploadFileImage');
//Route::get('/add-application', 'ApplicationsController@ShowAddApplicationForm')->name('applications.add');
//Route::post('/add', 'ApplicationsController@AddApplication')->name('applications.save');
//Route::get('/add/', [ 'as' => 'applications.save', 'applications' => 'ApplicationsController@save']);
//Route::get('/applications/details/{id}', 'ApplicationsController@showDetails')->name('applications.details');




Route::get('/applications', 'ApplicationsController@index');
Route::get('applications/{application}', 'ApplicationsController@show');
Route::post('applications', 'ApplicationsController@store');
Route::put('applications/{applications}', 'ApplicationsController@update');
Route::delete('applications/{application}', 'ApplicationsController@delete');

Route::get('/add-money', 'FormsController@ShowAddMoneyForm')->name('forms.add');
Route::post('add', 'FormsController@AddMoney')->name('forms.save');
Route::get('/forms', 'FormsController@ShowForm')->name('forms');

//)};

