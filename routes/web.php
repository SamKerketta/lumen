<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\myController;
use Illuminate\Support\Facades\Route;

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

// traditional lumen 
$router->get('/get','myController@get');
$router->post('/post/{data}','myController@post');
$router->put('/put','myController@put');
$router->delete('/delete','myController@delete');

// group controller of lumen
$router->group(['prefix'=>'api'],function() use ($router)
{
    $router->get('/test1','myController@test1');
    $router->get('/test2','myController@test2');
    $router->get('/test3','myController@test3');
});

// api of the treditional laravel may work or not
Route::get('/api_hit',[myController::class,'hit']);