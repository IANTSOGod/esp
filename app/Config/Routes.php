<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about','Home::about');
$routes->get('/contact','Home::contact');
$routes->get('/finitiale','Home::finitiale');
$routes->get('/fmodulaire','Home::fmodulaire');
$routes->get('/fcontinue','Home::fcontinue');
$routes->get('/IG','Home::IG');
$routes->get('/IM','Home::IM');
$routes->get('/GL','Home::GL');
$routes->get('/SR','Home::SR');
$routes->get('/WEB','Home::WEB');
$routes->get('/inscription','Home::inscription');

