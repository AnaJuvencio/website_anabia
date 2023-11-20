<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Home');
$routes->get('/', 'Home::index');
$routes->set404Override('App\Controllers\Your404Controller::index');

