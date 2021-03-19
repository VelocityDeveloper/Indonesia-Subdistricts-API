<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    // return 'Velocity Rest API Alamat';
});

$router->get('/mbuh', function () use ($router) {
    // return $router->app->version();
    // return 'Velocity Rest API Alamat';
    return 'Successs!';
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('city',  ['uses' => 'CityController@showAllCity']);
    $router->get('city/{id}', ['uses' => 'CityController@showOneCity']);
    // $router->post('city', ['uses' => 'CityController@create']);
    // $router->delete('city/{id}', ['uses' => 'CityController@delete']);
    // $router->put('city/{id}', ['uses' => 'CityController@update']);
  });