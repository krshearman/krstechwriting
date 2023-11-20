<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');
$routes->get('/home', 'Pages::index');
$routes->get('/index', 'Pages::index');
$routes->get('/index.html', 'Pages::index');
$routes->get('/(:alphanum)', 'Pages::pages/$1');


/*$routes->get('/blog', 'Blog::blog');
$routes->get('pages/(:alphanum)', 'Pages::pages/$1');
$routes->get('/(:alphanum)', 'Pages::pages/$1');
$routes->get('templates/(:alphanum)', 'Pages::templates/$1');*/



/**$routes->get('pages/welcome_message', 'Test::test');**/
/**$routes->get('pages/(:any)', ['Pages::pages/$1']);**/

