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
});
$router->group(['prefix' => 'api/rumah-sakit'], function () use ($router) {
    $router->get('/', 'RumahSakitController@index');          // Ambil semua rumah sakit
    $router->get('{id}', 'RumahSakitController@show');        // Ambil 1 rumah sakit
    $router->post('/', 'RumahSakitController@store');         // Tambah data rumah sakit
    $router->put('{id}', 'RumahSakitController@update');      // Update data rumah sakit
    $router->delete('{id}', 'RumahSakitController@destroy');  // Hapus rumah sakit
});


