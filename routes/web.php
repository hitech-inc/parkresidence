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
Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/location', 'SiteController@location');
Route::get('/infrastructure', 'SiteController@infrastructure');
Route::get('/contacts', 'SiteController@contacts');
Route::post('/feedback', 'SiteController@feedback');


Auth::routes();

// Admin area
Route::get('backend', 'HomeController@index');

Route::get('backend/houses', ['as'=> 'backend.houses.index', 'uses' => 'Backend\HousesController@index']);
Route::post('backend/houses', ['as'=> 'backend.houses.store', 'uses' => 'Backend\HousesController@store']);
Route::get('backend/houses/create', ['as'=> 'backend.houses.create', 'uses' => 'Backend\HousesController@create']);
Route::put('backend/houses/{houses}', ['as'=> 'backend.houses.update', 'uses' => 'Backend\HousesController@update']);
Route::patch('backend/houses/{houses}', ['as'=> 'backend.houses.update', 'uses' => 'Backend\HousesController@update']);
Route::delete('backend/houses/{houses}', ['as'=> 'backend.houses.destroy', 'uses' => 'Backend\HousesController@destroy']);
Route::get('backend/houses/{houses}', ['as'=> 'backend.houses.show', 'uses' => 'Backend\HousesController@show']);
Route::get('backend/houses/{houses}/edit', ['as'=> 'backend.houses.edit', 'uses' => 'Backend\HousesController@edit']);


// Страницы в которых передаю параметры нужно указывать с самом низу, потому что итерпретатор будет пытаться вставить туда то что ниже, и произойдет ошибка.

// Houses-details page
Route::get('house-details/{slug?}', 'HousesController@houses');
Route::get('town-houses/{slug?}', 'SiteController@townHouses');
Route::get('/villas/{slug?}', 'SiteController@villas');



Route::get('backend/texts', ['as'=> 'backend.texts.index', 'uses' => 'Backend\textsController@index']);
Route::post('backend/texts', ['as'=> 'backend.texts.store', 'uses' => 'Backend\textsController@store']);
Route::get('backend/texts/create', ['as'=> 'backend.texts.create', 'uses' => 'Backend\textsController@create']);
Route::put('backend/texts/{texts}', ['as'=> 'backend.texts.update', 'uses' => 'Backend\textsController@update']);
Route::patch('backend/texts/{texts}', ['as'=> 'backend.texts.update', 'uses' => 'Backend\textsController@update']);
Route::delete('backend/texts/{texts}', ['as'=> 'backend.texts.destroy', 'uses' => 'Backend\textsController@destroy']);
Route::get('backend/texts/{texts}', ['as'=> 'backend.texts.show', 'uses' => 'Backend\textsController@show']);
Route::get('backend/texts/{texts}/edit', ['as'=> 'backend.texts.edit', 'uses' => 'Backend\textsController@edit']);
