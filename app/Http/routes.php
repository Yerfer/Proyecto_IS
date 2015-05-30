<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::resource('maquinas','MaquinaController');
Route::resource('usuario','UsuarioController');
Route::resource('login','LoginController');
Route::get('logout','LoginController@logout');
Route::resource('administrador','AdminController');
Route::resource('deportista','DeportistaController');
Route::resource('perfil','PerfilDeportistaController');
Route::resource('medidas','MedidasController');
Route::resource('entrenador','EntrenadorController');
Route::resource('ejercicios','EjercicioController');


Route::resource('pro/rutinas','pro\RutinasController');
Route::resource('depor/objetivos','deportista\ObjetivosController');





