<?php

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
		$app->render('welcome');
	});

	$router->post('/accueil', function() use ($app) {
		// Récupérer les données du formulaire
		$email = $app->request()->data->email;
		$mdp = $app->request()->data->mdp;

		echo "Email: $email, Mot de passe: $mdp"; // Affiche les données pour vérification
		// Ici, vous pouvez ajouter la logique de validation et d'authentification
	});
	
}, [ SecurityHeadersMiddleware::class ]);