<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api/usuario', 'UsuarioController@get');
$router->get('/api/usuario/{id}', 'UsuarioController@getId');
$router->post('/api/usuario', 'UsuarioController@save');
$router->put('/api/usuario/{id}', 'UsuarioController@update');
$router->delete('/api/usuario/{id}', 'UsuarioController@delete');

$router->get('/usuario', 'UsuarioController@index');
$router->get('/criarUsuario', 'UsuarioController@createTemplate');
$router->get('/alterarUsuario/{id}', 'UsuarioController@updateTemplate');


$router->post('/create', 'UsuarioController@create');
$router->put('/edit/{id}', 'UsuarioController@edit');
$router->delete('/destroy/{id}', 'UsuarioController@destroy');