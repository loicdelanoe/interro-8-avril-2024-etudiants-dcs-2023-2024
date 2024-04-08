<?php

use App\Http\controllers\AuthenticatedSessionController;
use App\Http\Controllers\JiriController;
use App\Http\controllers\RegisteredUserController;

/** @var Core\Router $router */
$router->get('/', [JiriController::class, 'index']);

$router->get('/jiris', [JiriController::class, 'index']);

$router->get('/jiri', [JiriController::class, 'show']);

$router->get('/jiri/create', [JiriController::class, 'create']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/jiri/edit', [JiriController::class, 'edit']);
$router->patch('/jiri', [JiriController::class, 'update'])->csrf();


$router->delete('/jiri', [JiriController::class, 'destroy'])->csrf();


$router->get('/register', [RegisteredUserController::class, 'create'])->guest();
$router->post('/register', [RegisteredUserController::class, 'store'])->csrf();

$router->get('/login', [AuthenticatedSessionController::class, 'create'])->guest();
$router->post('/login', [AuthenticatedSessionController::class, 'store'])->csrf();

$router->delete('/logout', [AuthenticatedSessionController::class,'destroy'])->csrf();


