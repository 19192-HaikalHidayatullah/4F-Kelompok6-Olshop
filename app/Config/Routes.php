<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/home', 'User::index');
$routes->get('/', 'Home::index');
$routes->get('/pengunjung', 'Home::index');
$routes->get('/pengunjung/aksesoris', 'Home::aksesoris');
$routes->get('/pengunjung/laptop', 'Home::laptop');
$routes->get('/pengunjung/hp', 'Home::hp');
// admin permission.
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/akse', 'Admin::akse', ['filter' => 'role:admin']);
$routes->get('/admin/laptop', 'Admin::laptop', ['filter' => 'role:admin']);
$routes->get('/admin/hp', 'Admin::hp', ['filter' => 'role:admin']);
$routes->get('/admin/produk', 'Admin::produk', ['filter' => 'role:admin']);
$routes->get('/admin/transaksi', 'Admin::transaksi', ['filter' => 'role:admin']);
$routes->get('/admin/edithp/(:segment)', 'Admin::edithp/$1', ['filter' => 'role:admin']);
$routes->get('/admin/editlaptop/(:segment)', 'Admin::editlaptop/$1', ['filter' => 'role:admin']);
$routes->get('/admin/editakse/(:segment)', 'Admin::editakse/$1', ['filter' => 'role:admin']);

// user permission
$routes->get('/user', 'User::index', ['filter' => 'role:admin, user']);
$routes->get('/user/*', 'User::index', ['filter' => 'role:admin, user']);
$routes->get('/user/editprofile/(:segment)', 'User::editprofile/$1', ['filter' => 'role:admin, user']);
$routes->get('/user/updatetransaksi/(:segment)', 'User::updatetransaksi/$1', ['filter' => 'role:admin, user']);



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
