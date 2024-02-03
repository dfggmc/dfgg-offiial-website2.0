<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/page/history', 'Page::history');
$routes->get('/page/ListOfSponsors', 'Page::ListOfSponsors');
