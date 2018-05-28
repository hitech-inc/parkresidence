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
// Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/features', 'SiteController@features');
Route::get('/cottages', 'SiteController@cottages');
Route::get('/3D-tour', 'SiteController@tour');
Route::get('/contacts', 'SiteController@contacts');
Route::get('/house-details', 'SiteController@houseDetails');
Route::get('/{slug?}', 'SiteController@index');


Auth::routes();

// Admin area
Route::get('/backend', 'HomeController@index');

Route::get('backend/houses', ['as'=> 'backend.houses.index', 'uses' => 'Backend\HousesController@index']);
Route::post('backend/houses', ['as'=> 'backend.houses.store', 'uses' => 'Backend\HousesController@store']);
Route::get('backend/houses/create', ['as'=> 'backend.houses.create', 'uses' => 'Backend\HousesController@create']);
Route::put('backend/houses/{houses}', ['as'=> 'backend.houses.update', 'uses' => 'Backend\HousesController@update']);
Route::patch('backend/houses/{houses}', ['as'=> 'backend.houses.update', 'uses' => 'Backend\HousesController@update']);
Route::delete('backend/houses/{houses}', ['as'=> 'backend.houses.destroy', 'uses' => 'Backend\HousesController@destroy']);
Route::get('backend/houses/{houses}', ['as'=> 'backend.houses.show', 'uses' => 'Backend\HousesController@show']);
Route::get('backend/houses/{houses}/edit', ['as'=> 'backend.houses.edit', 'uses' => 'Backend\HousesController@edit']);
