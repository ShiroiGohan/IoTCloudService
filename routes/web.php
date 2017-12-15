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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/not_found', 'StaticController@not_found') -> name('not_found');
Route::get('/internal_error', 'StaticController@internal_error') -> name('internal_error');
