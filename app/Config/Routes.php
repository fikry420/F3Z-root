<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// app/Config/Routes.php
$routes->get('/', 'Welcome::index');
#$routes->get('welcome/barang', 'Welcome::barang');
$routes->get('/barang/barang', 'barang::databarang');
$routes->get('/barang/Btambah', 'barang::create');
$routes->post('/barang/store', 'Barang::store');
