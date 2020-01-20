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

Route::get('/', function() {
    return view('top.top');
});

Route::get('todo', 'TodoController@index')
    ->middleware('auth');
Route::get('todo/show', 'TodoController@show')
    ->middleware('auth');
Route::get('todo/new', 'TodoController@new')
    ->middleware('auth');
Route::post('todo/new', 'TodoController@create')
    ->middleware('auth');
Route::get('todo/edit/{id}', 'TodoController@edit')
    ->middleware('auth');
Route::post('todo/edit', 'TodoController@update')
    ->middleware('auth');
Route::get('todo/del/{id}', 'TodoController@del')
    ->middleware('auth');
Route::post('todo/del', 'TodoController@remove')
    ->middleware('auth');

Route::get('link', 'LinkController@index')
    ->middleware('auth');
Route::get('link/new', 'LinkController@new')
    ->middleware('auth');
Route::post('link/new', 'LinkController@create')
    ->middleware('auth');
Route::get('link/edit/{id}', 'LinkController@edit')
    ->middleware('auth');
Route::post('link/edit', 'LinkController@update')
    ->middleware('auth');
Route::get('link/del/{id}', 'LinkController@del')
    ->middleware('auth');
Route::post('link/del', 'LinkController@remove')
    ->middleware('auth');

Route::get('tree', 'TreeController@index')
    ->middleware('auth');
Route::get('tree/new', 'TreeController@new')
    ->middleware('auth');
Route::post('tree/new', 'TreeController@create')
    ->middleware('auth');
Route::get('tree/edit/{id}', 'TreeController@edit')
    ->middleware('auth');
Route::post('tree/edit', 'TreeController@update')
    ->middleware('auth');
Route::get('tree/del/{id}', 'TreeController@del')
    ->middleware('auth');
Route::post('tree/del', 'TreeController@remove')
    ->middleware('auth');

Route::get('link_tree/{id}', 'LinkTreeController@index')
    ->middleware('auth');
Route::get('link_tree/new/{id}', 'LinkTreeController@new')
    ->middleware('auth');
Route::post('link_tree/new', 'LinkTreeController@create')
    ->middleware('auth');
Route::get('link_tree/order', 'LinkTreeController@order')
    ->middleware('auth');
Route::post('link_tree/order', 'LinkTreeController@order')
    ->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')
    ->middleware('auth');
