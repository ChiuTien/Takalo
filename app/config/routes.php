<?php

	use app\middlewares\SecurityHeadersMiddleware;
	use flight\Engine;
	use flight\net\Router;
	use app\controllers\ControllerUser;

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
		$nom = $app->request()->data->nom;
		$mdp = $app->request()->data->mdp;

		if(empty($nom) || empty($mdp)) {
			$app->render('welcome',['error' => 'nom et mot de passe sont requis.']);
			return;
		}

		$controllerUser = new ControllerUser();
		$users = $controllerUser->listUser();

		foreach($users as $user) {
			if($user->getNomUser() === $nom && $user->getMdpUser() === $mdp) {
				session_start();
				$_SESSION['user_id'] = $user->getIdUser();
				echo "Connexion réussie pour l'utilisateur : " . $user->getNomUser();
				// $app->redirect('/accueil');
				return;
			}
		}

		// $app->flash('error', 'nom ou mot de passe incorrect.');
		$app->render('welcome', ['error' => 'nom ou mot de passe incorrect.']);
	});
	
}, [ SecurityHeadersMiddleware::class ]);