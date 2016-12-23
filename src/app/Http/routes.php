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

$app->get('/', function () use ($app) {
  return view('greeting');
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('status','StatusController@index');

    $app->get('status/{id}','StatusController@getStatus');

    $app->post('status','StatusController@createStatus');

    $app->delete('status/{id}','StatusController@deleteStatus');
});
