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
		$email = $app->request()->data->email;
		$mdp = $app->request()->data->mdp;

		if(empty($email) || empty($mdp)) {
			// $app->flash('error', 'Veuillez remplir tous les champs.');
			$app->redirect('/');
			return;
		}

		$controllerUser = new ControllerUser();
		$users = $controllerUser->listUser();

		foreach($users as $user) {
			if($user->getEmail() === $email && $user->getMdp() === $mdp) {
				echo "Connexion réussie pour l'utilisateur : " . $user->getEmail();
				// $app->flash('success', 'Connexion réussie !');
				// $app->redirect('/accueil');
				return;
			}
		}

		// $app->flash('error', 'Email ou mot de passe incorrect.');
		$app->redirect('/');
	});
	
}, [ SecurityHeadersMiddleware::class ]);