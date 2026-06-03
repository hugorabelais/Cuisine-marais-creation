<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Visiteur::Index');
$routes->get('index', 'Visiteur::Index');
$routes->match(['get', 'post'], 'contact', 'Visiteur::Contact');
$routes->get('rgpd', 'Visiteur::Rgpd');
$routes->get('qui-sommes-nous', 'Visiteur::QuiSommesNous');
$routes->get('nos-projets', 'Visiteur::Projet');
$routes->get('fournisseur', 'Visiteur::Fournisseur');