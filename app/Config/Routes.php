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
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('/tasks/update/(:num)', 'Tasks::update/$1');
$routes->get('/tasks/delete/(:num)', 'Tasks::delete/$1');
