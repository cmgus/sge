<?php

declare(strict_types=1);

require_once 'bootstrap.php';

// Routes
use Sge\App\Backend\Controllers\Auth\AuthPost;

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);
$responseFactory = new Laminas\Diactoros\ResponseFactory;
$strategy = new League\Route\Strategy\JsonStrategy($responseFactory);

$router = new League\Route\Router;

$router->setStrategy($strategy);
// map a route
$router->map('GET', '/', function (): array {
    return [
        'title'   => 'My New Simple API',
        'version' => 1,
    ];
});
$router->map('POST', '/', 'Sge\App\Backend\Controllers\Auth\AuthPost');
//$router->map('POST', '/', new AuthPost());
$response = $router->dispatch($request);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
