<?php

// Create a Router
$router = new \Bramus\Router\Router();
$homeController = new \App\Controllers\HomeController();
$userController = new \App\Controllers\UserController();

// Custom 404 Handler
$router->set404(function () use ($homeController) { $homeController->NotFound(); });
$router->all('/', function () use ($homeController) { $homeController->index(); });

$router->mount('/user', function () use ($router, $userController){
    $router->get('/', function () use ($userController) { $userController->index(); });
});

$router->run();