<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test','MainController::test');
$routes->post('Save','MainController::Save');
$routes->get('/Delete/(:any)','MainController::Delete/$1');
$routes->get('/Update/(:any)','MainController::Update/$1');