<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/me', 'Home\Home::me');
$routes->get('/register', 'Auth\Registration::view');
$routes->get('/hotel', 'Client\Hotel::view');

$routes->get('/auth/account/create', 'Auth\Registration::account');
$routes->get('/auth/login', 'Auth\Login::view');
$routes->get('/auth/logout', 'Auth\Login::logout');

$routes->get('/community/highscores', 'Community\Highscores::view');
$routes->get('/community/staff', 'Community\Staff::view');
$routes->get('/community/news', 'Community\Articles::view');
$routes->get('/community/article/(:num)/(:any)', 'Community\Articles::item/$1');

$routes->post('/register/account/create', 'Auth\Registration::create');
$routes->post('/register/store', 'Auth\Registration::store');
$routes->post('/auth/login/request', 'Auth\Login::request');
$routes->post('/auth/login/switch', 'Auth\Login::switch');

$routes->post('api/newuser/name/check', 'Auth\Nux::checkName');
$routes->post('api/newuser/select/name', 'Auth\Nux::selectName');
$routes->post('api/newuser/save/figure', 'Auth\Nux::saveFigure');
$routes->post('api/newuser/save/room', 'Auth\Nux::saveRoom');

$routes->group('housekeeping', function($routes)
{ 
    $routes->presenter('/', ['controller' =>'Admin\Dashboard']);
});
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
