<?php

/**
 * Bootstrap da API
 */
require 'bootstrap.php';

/**
 * Rotas da API
 */
$app->get('/', function (Request $request, Response $response) use ($app) {
    $response->getBody()->write("Root de Microservice!");
    return $response;
});
$app->get('/bebe', function (Request $request, Response $response) use ($app) {
    $response->getBody()->write("Bebê de Microservice!");
    return $response;
});

require 'routes.php';

$app->run();