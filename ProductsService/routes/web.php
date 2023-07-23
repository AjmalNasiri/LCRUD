<?php
use App\Http\Controllers\productController;
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
// routes/products.php

$router->get('/products/{id}',"productController@getProducts");

// $router->get('/products/{id}', function ($id) {
//     // Return a specific product
// });

$router->post('/products', function () {
    echo "fsfsaf";
});

// $router->put('/products/{id}', function ($id) {
//     // Update a specific product
// });

// $router->delete('/products/{id}', function ($id) {
//     // Delete a specific product
// });
