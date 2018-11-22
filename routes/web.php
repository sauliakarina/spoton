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
    return "Hello world";
});

$router->post('/login', 'AuthController@login');
$router->post('/register', 'AuthController@register');
$router->get('/user', 'UserController@userHasLogin');

$router->post('/kategori', 'KategoriController@store');
$router->get('/kategori', 'KategoriController@index');
$router->delete('/kategori/{id}', 'KategoriController@delete');
$router->post('/kategori/update/{id}', 'KategoriController@update');
$router->get('/kategori/{id}', 'KategoriController@show');

$router->post('/produk', 'ProdukController@store');
$router->get('/produk', 'ProdukController@index');
$router->delete('/produk/{id}', 'ProdukController@delete');
$router->post('/produk/update/{id}', 'ProdukController@update');
$router->get('/produk/{id}', 'ProdukController@show');


