<?php

use App\Controllers\Home;
use App\Controllers\UserController;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/profile/(:any)/(:any)/(:any)','Home::profile');
$routes->get('/user/profile', 'UserController::profile');
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user', 'UserController::index');


$routes->get('user/(:any)/edit', [UserController::class, 'edit']);


$routes->put('/user/(:any)', [UserController::class, 'update']);


$routes->get('user/(:any)', [UserController::class, 'show']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);