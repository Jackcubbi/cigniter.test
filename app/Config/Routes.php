<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/list', 'Home::list');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/tasks/(:num)', 'Tasks::show/$1');
$routes->get('/tasks/add_task', 'Tasks::add_task');
$routes->post('/tasks/store', 'Tasks::store');
$routes->post('/tasks/update/(:num)', 'Tasks::update');
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
