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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('password')->as('password.')->group(function(){
	Route::get('edit', 'rrhh\UsersController@editPassword')->name('edit');
	Route::put('update', 'rrhh\UsersController@updatePassword')->name('update');
});

Route::prefix('rrhh')->as('rrhh.')->group(function(){
	Route::put('users/{user}/password', 'rrhh\UsersController@resetPassword')->name('users.password.reset');

	Route::get('users/{user}/roles', 'rrhh\RolesController@index')->name('roles.index');
	Route::post('users/{user}/roles','rrhh\RolesController@attach')->name('roles.attach');
	
	Route::resource('cargos','rrhh\CargoController')->middleware('auth');

	Route::resource('users','rrhh\UsersController')->middleware('auth');

});

Route::prefix('recursos')->as('recursos.')->group(function(){
	Route::get('telefono/directorio', 'Recursos\TelefonoController@directorio')->name('telefono.directorio');
	Route::resource('telefono','Recursos\TelefonoController')->middleware('auth');
});