<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog', 'Blog::blog');
$routes->get('pages/(:alphanum)', 'Pages::pages/$1');
/**$routes->get('pages/welcome_message', 'Test::test');**/
/**$routes->get('pages/(:any)', ['Pages::pages/$1']);**/

