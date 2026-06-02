<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Visiteur::Index');
$routes->get('index', 'Visiteur::Index');
$routes->match(['get', 'post'], 'contact', 'Visiteur::Contact');
$routes->get('rgpd', 'Visiteur::Rgpd');
