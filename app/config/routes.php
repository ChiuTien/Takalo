<?php

use app\controllers\ApiExampleController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	$router->get('/', function() use ($app) {
<<<<<<< HEAD
		$app->render('login');
=======
		$app->render('welcome');
>>>>>>> ba94feaffb7fd6974bbec433e9547e521e55df8c
	});

	$router->get('/hello-world/@name', function($name) {
		echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
	});
	
}, [ SecurityHeadersMiddleware::class ]);