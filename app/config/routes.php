<?php

	use app\middlewares\SecurityHeadersMiddleware;
	use flight\Engine;
	use flight\net\Router;
	use app\controllers\ControllerUser;
	use \app\models\User;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	//Les Get
	$router->get('/', function() use ($app) {
		$app->render('welcome');
	});

	$router->get('/admin-login', function() use ($app) {
		$app->render('admin-login');
	});

	$router->get('/inscription', function() use ($app) {
		$app->render('inscription');
	});

	//Les Post
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
				$app->redirect('/categorie');
			}
		}

		// $app->flash('error', 'nom ou mot de passe incorrect.');
		$app->render('welcome', ['error' => 'nom ou mot de passe incorrect.']);
	});

	$router->post('/enregistrer', function() use ($app) {
		$nom = $app->request()->data->nom;
		$prenom = $app->request()->data->prenom;
		$mdp = $app->request()->data->mdp;

		if(empty($nom) || empty($prenom) || empty($mdp)) {
			$app->render('inscription', ['error' => 'Tous les champs sont requis.']);
			return;
		}

		$user = new User();
		$user->setNomUser($nom);
		$user->setPrenomUser($prenom);
		$user->setMdpUser($mdp);

		try {
			$controllerUser = new ControllerUser();
			$controllerUser->addUser($user);
			echo "Inscription réussie pour l'utilisateur : " . $user->getNomUser();
			// $app->redirect('/');
		} catch (\Throwable $th) {
			echo "Erreur lors de l'inscription : " . $th->getMessage();
			// $app->render('inscription', ['error' => 'Erreur lors de l\'inscription.']);
		}
	});
		$router->get('/listObjet', function() use ($app) {
		
		$categorieController = new ControllerCategorie();
		$categories = $categorieController->listCategorie();
		$app->render('categorie', ['categories' => $categories]);

	});
	
	$router->get('/listObjet/tous', function() use ($app) {
		$objetController = new ControllerObjet();
		$objet = $objetController->listObjet();
		$app->render('objetByCategorie', ['objet' => $objet]);
	});
	$router->get('/listObjet/@id', function($id) use ($app) {
		$objetController = new ControllerObjet();
		$categorie = new Categorie();
		$categorie->setIdCategorie($id);
		$objet = $objetController->getObjetByCategorie($categorie);
		$app->render('objetByCategorie', ['objet' => $objet]);
	});
	
}, [ SecurityHeadersMiddleware::class ]);