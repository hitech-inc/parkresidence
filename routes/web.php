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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend area
Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/features', 'SiteController@features');
Route::get('/cottages', 'SiteController@cottages');
Route::get('/3D-tour', 'SiteController@tour');
Route::get('/contacts', 'SiteController@contacts');
Route::get('/house-details', 'SiteController@houseDetails');
