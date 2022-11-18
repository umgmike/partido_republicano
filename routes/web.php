<?php

Route::get('/', function () { return view('welcome'); })->name('welcome');
Auth::routes();

Route::group(['namespace' => 'PARTIDO_RP', 'middleware' => 'auth'], function () {
	Route::get('logout', 'LoginController@logout')->name('logout');
	Route::get('home', 'HomeController@HomeAdmin')->name('home')->middleware('auth');


	Route::get('usuarios', 'UsuarioController@index')->name('page.usuarios')->middleware('auth');
	Route::get('usuarios/create', 'UsuarioController@create')->name('page.create-users')->middleware('auth');
	Route::post('usuarios/save', 'UsuarioController@store')->name('page.save-users')->middleware('auth');
	Route::get('usuarios/{id}/edit', 'UsuarioController@edit')->name('page-edit.users')->middleware('auth');
	Route::put('usuarios/{id}', 'UsuarioController@update')->name('page-update.users')->middleware('auth');
	Route::put('usuarios/pass/{id}', 'UsuarioController@update_pass')->name('page-update.users-pass')->middleware('auth');
	Route::delete('usuarios/{id}', 'UsuarioController@destroy')->name('page.delete')->middleware('auth');
	Route::get('roles', 'RolController@index')->name('page.rols-user')->middleware('auth');

	Route::get('Listado-general', 'GeneralController@ListGeneral')->name('pages.list-general')->middleware('auth');

	Route::get('Afiliados', 'AfiliadosController@getAfiliados')->name('afiliados.pr.get')->middleware('auth');
    Route::get('Afiliados/create', 'AfiliadosController@create')->name('afiliados.pr.create')->middleware('auth');
    Route::post('Afiliados/save', 'AfiliadosController@store')->name('afiliados.pr.store')->middleware('auth');
    Route::get('Afiliados/{id}/edit', 'AfiliadosController@edit')->name('afiliados.pr.edit')->middleware('auth');
    Route::put('Afiliados/{id}', 'AfiliadosController@update')->name('afiliados.pr.update')->middleware('auth');
    Route::delete('Afiliados/{id}', 'AfiliadosController@destroy')->name('afiliados.pr.delete')->middleware('auth');


    Route::get('AfiliadosReporte', 'ReportesController@afiliadosReport')->name('Reporte-Afiliados')->middleware('auth');
});

