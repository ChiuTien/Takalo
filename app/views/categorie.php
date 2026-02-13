<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échange'Objets - Catégories</title>
    
    <!-- Bootstrap CSS local -->
    <link rel="stylesheet" href="<?= BASE_URL ?>bootstrap/css/bootstrap.min.css">

    <!-- Notre fichier CSS personnalisé -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body class="dashboard-page">
    <!-- Placeholder pour le header -->
    <div id="header-placeholder"></div>

    <!-- Contenu principal -->
    <main>
        <div class="container-fluid mt-5 pt-4">
            <div class="main-content">
                <div class="page-title animate-item">
                    <h2>Catégories d'objets</h2>
                    <p>Choisissez une catégorie pour découvrir les objets disponibles à l'échange</p>
                </div>

                <div class="categories-grid">
                    <?php foreach ($categories as $categorie) {?>
                           <a href="/listObjet/<?= $categorie->getIdCategorie() ?>" class="category-card animate-item delay-1">
                        <h3><?= $categorie->getNomCategorie() ?></h3>
                        
                        </div>
                    </a>
                 <?php   }?>
                    <!-- Catégorie Électronique -->
                 

                    

                    <!-- Ajoutez les autres catégories ici... -->
                </div>
            </div>
        </div>
    </main>

    <!-- Placeholder pour le footer -->
    <div id="footer-placeholder"></div>

    <!-- Script pour inclure header et footer -->
    <script src="bootstrap/js/incude.js"></script>
    
    <!-- Bootstrap JS local -->
    <script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>