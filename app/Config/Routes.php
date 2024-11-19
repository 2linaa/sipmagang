<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('internship', function($routes) {
    $routes->post('submit', 'Internship::submit');
    $routes->post('check_status', 'Internship::check_status');
    $routes->get('confirm/(:num)', 'Internship::confirm/$1');
});
$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Register::index');
$routes->group('admin', function($routes) {
    $routes->get('internships', 'Internship::index');
    $routes->get('dashboard', 'Internship::home');
});
$routes->group('user', function($routes) {
    $routes->get('internships', 'Internship::index');
    $routes->get('dashboard', 'Internship::home');
});