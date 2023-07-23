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
$router->get('/', function () {
      echo "this";
});

$router->get('/users', function () {
    // Return a list of users
});

$router->get('/users/{id}', function ($id) {
    // Return a specific user
});

$router->post('/users', function () {
    // Create a new user
});

$router->put('/users/{id}', function ($id) {
    // Update a specific user
});

$router->delete('/users/{id}', function ($id) {
    // Delete a specific user
});

$router->get('users/{id}', 'userController@getUser');