<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Store::home');
$routes->get('/products', 'Store::products');
$routes->get('/product-detail', 'Store::productDetail');
$routes->get('/cart', 'Store::cart');
$routes->get('/checkout', 'Store::checkout');
$routes->get('/order-success', 'Store::orderSuccess');
$routes->get('/orders', 'Store::orders');
$routes->get('/order-track', 'Store::orderTrack');
$routes->get('/profile', 'Store::profile');
$routes->get('/about', 'Store::about');
$routes->get('/contact', 'Store::contact');
$routes->get('/login', 'Store::login');
$routes->get('/register', 'Store::register');

$routes->group('admin', static function ($routes) {
	$routes->get('/', 'AdminPanel::dashboard');
	$routes->get('products', 'AdminPanel::products');
	$routes->get('orders', 'AdminPanel::orders');
	$routes->get('users', 'AdminPanel::users');
});
