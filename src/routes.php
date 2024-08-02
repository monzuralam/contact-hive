<?php

use Slim\App;
use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Controllers\ErrorController;

/**
 * Route
 */
return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/contacts', [ContactController::class, 'index']);
    $app->post('/contacts', [ContactController::class, 'create']);
    $app->get('/contacts/{id}', [ContactController::class, 'show']);
    $app->put('/contacts/{id}', [ContactController::class, 'update']);
    $app->delete('/contacts/{id}', [ContactController::class, 'delete']);
    $app->post('/contacts/{id}/upload', [ContactController::class, 'upload']);
    $app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'],'/{route:.*}', [ErrorController::class, 'notFound']);
};
