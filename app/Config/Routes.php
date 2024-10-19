<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Signup::new', ['filter' => 'guest']);
$routes->get('/login', 'Login::new',  ['filter' => 'guest']);
$routes->get('/logout', 'Login::delete');
