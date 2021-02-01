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

$router->get('/{id}', function ($id) use ($router) {
    // return $router->app->version();
    // return $id;
    switch ($id) {
        case '500':
            # code...
            return "
                    <h1>$id</h1>
                    <p>ola</p>
            ";
            break;

        case '501':
        # code...
        return "
                <h1>$id</h1>
                <p>ola</p>
        ";
        break;

        case '502':
        # code...
        return "
                <h1>$id</h1>
                <p>ola</p>
        ";
        break;


        default:
            # code...
            return "<h1>id não identificado</h1>";
            break;
    }
});
