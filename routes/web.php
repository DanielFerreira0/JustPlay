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
    return view('/home');
});

Auth::routes();

Route::get('backoffice/home', 'HomeController@index');
Route::get('backoffice/profile', 'HomeController@profile');
Route::get('backoffice/changepassword', 'HomeController@changepassword');

Route::get('backoffice/login','AuxController@login');
Route::get('backoffice/register','AuxController@register');

Route::get('backoffice/customers','CustomerController@index');
Route::post('backoffice/customers','CustomerController@add');

Route::get('backoffice/fields','FieldController@index');
Route::post('backoffice/fields','FieldController@add');
Route::get('backoffice/details/{id}','FieldController@details');


Route::get('backoffice/delete/{id}','FielController@delete');







