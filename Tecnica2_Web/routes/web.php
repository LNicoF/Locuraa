<?php

// Rutas públicas
Route::view('/', 'welcome') -> name('welcome');
Route::view('/equipo', 'equipo') -> name('equipo');

Auth::routes();

// Rutas para usuarios
Route::get('/alumno/ingresar', 'AlumnoController@create')->middleware('auth')-> name('alumno.create');
Route::post('/alumno/ingresar/formulario', 'AlumnoController@store')->middleware('auth')-> name('alumno.store');
Route::view('/alumno/modulos', 'alumno.modulos')->middleware('auth')->name('modulos');
Route::get('/alumno/listado', 'AlumnoController@index') -> name('alumno.index');
Route::get('/alumno/{alumno}/editar', 'AlumnoController@edit') -> name('alumno.edit');
Route::patch('/alumno/{alumno}/update', 'AlumnoController@update') -> name('alumno.update');
Route::get('/alumno/{alumno}/destroy', 'AlumnoController@destroy') -> name('alumno.destroy');
Route::get('/alumno/{alumno}/pdf', 'PdfController@create') -> name('alumno.pdf');

// Rutas para admin
Route::get('/listado_preinscriptos','AdminController@preinscriptos')->middleware('is_admin')->name('preincriptos');
Route::get('/listado_alfabetico/{anio?}','AdminController@pre_alfabetico')->middleware('is_admin')->name('preincriptos_alfabetico');
Route::get('/listado_preinscriptos/{id_alumno}','AdminController@preinscriptos_completo')->middleware('is_admin')->name('preinscriptos.completo');
Route::get('/listado_preinscriptos_imp/{id_alumno}','AdminController@preinscriptos_adicional')->middleware('is_admin')->name('preinscriptos.adicional');
