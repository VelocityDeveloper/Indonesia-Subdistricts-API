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
    $router->get('cities',  ['uses' => 'CityController@showAllCities']);
    $router->get('cities/{city_id}', ['uses' => 'CityController@showOneCity']);
    // $router->post('city', ['uses' => 'CityController@create']);
    // $router->delete('city/{id}', ['uses' => 'CityController@delete']);
    // $router->put('city/{id}', ['uses' => 'CityController@update']);

    $router->get('provinces',  ['uses' => 'ProvincesController@showAllProvinces']);
    $router->get('provinces/{province_id}', ['uses' => 'ProvincesController@showOneProvince']);
    // $router->post('province', ['uses' => 'ProvincesController@create']);
    // $router->delete('province/{id}', ['uses' => 'ProvincesController@delete']);
    // $router->put('province/{id}', ['uses' => 'ProvincesController@update']);

    $router->get('subdistricts',  ['uses' => 'SubdistrictsController@showAllSubdistricts']);
    $router->get('subdistricts/{subdistrict_id}', ['uses' => 'SubdistrictsController@showOneSubdistrict']);
    // $router->post('province', ['uses' => 'SubdistrictsController@create']);
    // $router->delete('province/{id}', ['uses' => 'SubdistrictsController@delete']);
    // $router->put('province/{id}', ['uses' => 'SubdistrictsController@update']);
  });