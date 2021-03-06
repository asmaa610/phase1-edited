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

/*Route::get('/', function () {
    return view('welcome');
});*/

route::get('/','frontcontroller@index');

Route::get('/reserve/save','reservecontroller@index');

Route::get('/logIn','logincontroller@index');

Route::get('/adminstate','adminstatecontroller@index');

Route::get('/payment','paymentcontroller@index');

Route::get('/print','printcontroller@index')->name("print");

Route::get('/profit','profitcontroller@index');

Route::get('/usersetting','usersettingcontroller@index');

Route::get('/edit/{id}','usersettingcontroller@edit');

Route::get('/setting','settingcontroller@index');

Route::get('/room','roomcontroller@index');

Route::get('/delete','deletecontroller@index');

Route::post('/contact','frontcontroller@store');

Route::post('/reservemodel','reservecontroller@store');

Route::post('/login','logincontroller@store');

Route::post('/update' , 'usersettingcontroller@update');

Route::post('/room','roomcontroller@store');

Route::post('/delete' , 'deletecontroller@destroy');