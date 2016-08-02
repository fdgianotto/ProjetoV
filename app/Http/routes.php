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

Route::auth();

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Rotas para solicitar trocar de senha...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Rotas para trocar a senha...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/', 'Index@index');
Route::get('/sobre', 'Index@about');
Route::get('/login', 'Index@login');
Route::get('/register', 'Index@register');
Route::get('/perfil', 'Pag_Login@perfil');
Route::get('/config', 'Pag_Login@config');
Route::get('/proj', 'Index@projetos');
Route::get('/proj', 'projeto@projects_user');
Route::post('/upload', 'AlterarDados@uploadPerfil');
Route::post('/config', 'AlterarDados@alterarNome');
Route::post('/config', 'AlterarDados@alterarSenha');

// Rotas para teste...

Route::get('/search', function () {
    return view('search_result');
});

Route::get('/details', function () {
    return view('details');
});