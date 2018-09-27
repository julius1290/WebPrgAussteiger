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
    return view('welcome2');
});


Route::get("ausstieg/{daten}", 'Controller@GetsomeData');

Route::get("/persönlichkeitstest", 'Controller@getTestSite');

Route::post("/check", 'DataBaseController@checkDbConnection');

Route::get("/check", 'DataBaseController@getCheckDbSite');

Route::post("/calculate", 'CalculateController@calculateResult');

Route::get("/contact", 'Controller@getContactView');

Route::get("/aboutus", 'Controller@getAboutUsView');

Route::get("/impressum", 'Controller@getImpressumView');

Route::get("/FAQ", 'Controller@getFAQView');
