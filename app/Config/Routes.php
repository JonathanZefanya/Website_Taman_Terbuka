<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('place_detail', 'Place::detail');
$routes->get('/', 'HomeController::index');
$routes->get('place_detail/(:num)', 'HomeController::placeDetail/$1');
$routes->get('explore_place', 'HomeController::explorePlace');
$routes->get('explore_place_detail', 'index::explorePlace');

$routes->get('mastering', 'AdminController::login');
$routes->post('mastering/loginAuth', 'AdminController::loginAuth');
$routes->get('mastering/logout', 'AdminController::logout');
$routes->get('mastering/dashboard', 'AdminController::dashboard', ['filter' => 'auth']);
$routes->get('mastering/addPlace', 'AdminController::addPlace', ['filter' => 'auth']);
$routes->post('mastering/savePlace', 'AdminController::savePlace', ['filter' => 'auth']);
$routes->get('mastering/editPlace/(:num)', 'AdminController::editPlace/$1', ['filter' => 'auth']);
$routes->post('mastering/updatePlace/(:num)', 'AdminController::updatePlace/$1', ['filter' => 'auth']);
$routes->get('mastering/deletePlace/(:num)', 'AdminController::deletePlace/$1', ['filter' => 'auth']);
