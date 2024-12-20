<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->post('/login_proses', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Home::index');
// $routes->get('/', 'Dashboard::index');
$routes->get('/data-karyawan', 'Datakaryawan::index');
$routes->get('/tambah-karyawan/tambah', 'Datakaryawan::tambah');
$routes->post('/tambah-karyawan/create', 'Datakaryawan::create');
$routes->get('/karyawan/edit/(:any)', 'Datakaryawan::edit/$1');
$routes->post('/karyawan/update/(:any)', 'Datakaryawan::update/$1');
$routes->get('/karyawan/delete/(:any)', 'Datakaryawan::delete/$1');
$routes->get('/data-penilaian', 'Datapenilaian::index');
$routes->get('/data-penilaian/tambah', 'Datapenilaian::tambah');
$routes->post('/data-penilaian/create', 'Datapenilaian::create');
$routes->get('/data-penilaian/edit/(:any)', 'Datapenilaian::edit/$1');
$routes->post('/data-penilaian/update/(:any)', 'Datapenilaian::update/$1');
$routes->get('/data-penilaian/delete/(:any)', 'Datapenilaian::delete/$1');
$routes->post('/data-penilaian/cetak', 'Datapenilaian::cetak');

$routes->get('/data-slip-gaji', 'Datakaryawan::slip_gaji');
