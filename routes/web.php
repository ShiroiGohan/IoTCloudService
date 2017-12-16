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

Route::get('/', 'StaticController@index') -> name('root');

Route::get('/apps', 'ApplicationController@index') -> name('application_index');
Route::get('/apps/new', 'ApplicationController@new') -> name('application_new');
Route::post('/apps/new', 'ApplicationController@create') -> name('application_create');
Route::get('/apps/{id}', 'ApplicationController@view') -> name('application_view');
Route::get('/apps/{id}/edit', 'ApplicationController@edit') -> name('application_edit');
Route::put('/apps/{id}/edit', 'ApplicationController@update') -> name('application_update');
Route::get('/apps/{id}/delete', 'ApplicationController@delete') -> name('application_delete');
Route::delete('/apps/{id}/delete', 'ApplicationController@destroy') -> name('application_destroy');

Route::get('/apps/{app_id}/types', 'ApplicationDataController@index') -> name('application_data_index');
Route::get('/apps/{app_id}/types/new', 'ApplicationDataController@new') -> name('application_data_new');
Route::post('/apps/{app_id}/types/new', 'ApplicationDataController@create') -> name('application_data_create');
Route::get('/apps/{app_id}/types/{id}', 'ApplicationDataController@view') -> name('application_data_view');
Route::get('/apps/{app_id}/types/{id}/edit', 'ApplicationDataController@edit') -> name('application_data_edit');
Route::put('/apps/{app_id}/types/{id}/edit' ,'ApplicationDataController@update') -> name('application_data_update');
Route::get('/apps/{app_id}/types/{id}/delete', 'ApplicationDataController@delete') -> name('application_data_delete');
Route::delete('/apps/{app_id}/types/{id}/delete', 'ApplicationDataController@destroy') -> name('application_data_destroy');

Route::get('/apps/{app_id}/keys', 'ApplicationKeyController@index') -> name('application_key_index');
Route::get('/apps/{app_id}/keys/new', 'ApplicationKeyController@new') -> name('application_key_new');
Route::post('/apps/{app_id}/keys/new', 'ApplicationKeyController@create') -> name('application_key_create');
Route::get('/apps/{app_id}/keys/{id}', 'ApplicationKeyController@view') -> name('application_key_view');
Route::get('/apps/{app_id}/keys/{id}/edit', 'ApplicationKeyController@edit') -> name('application_key_edit');
Route::put('/apps/{app_id}/keys/{id}/edit', 'ApplicationKeyController@update') -> name('application_key_update');
Route::get('/apps/{app_id}/keys/{id}/delete', 'ApplicationKeyController@delete') -> name('application_key_delete');
Route::delete('/apps/{app_id}/keys/{id}/delete', 'ApplicationKeyController@destroy') -> name('application_key_destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/not_found', 'StaticController@not_found') -> name('not_found');
Route::get('/internal_error', 'StaticController@internal_error') -> name('internal_error');
