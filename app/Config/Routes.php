<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::tryy');
$routes->get('/product/(:any)', 'ProductController::product/$1');
$routes->post('/save', 'ProductController::save');