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
                    <!-- Catégorie Électronique -->
                    <a href="objet.html?id=1" class="category-card animate-item delay-1">
                        <span class="category-icon">📱</span>
                        <h3>Électronique</h3>
                        <p class="category-description">Smartphones, ordinateurs, tablettes, accessoires high-tech</p>
                        <div class="category-stats">
                            <span><i>📦</i> 234 objets</span>
                            <span><i>💰</i> 50-2000€</span>
                        </div>
                    </a>

                    <!-- Catégorie Mode -->
                    <a href="objet.html?id=2" class="category-card animate-item delay-1">
                        <span class="category-icon">👕</span>
                        <h3>Mode & Accessoires</h3>
                        <p class="category-description">Vêtements, chaussures, sacs, bijoux, montres</p>
                        <div class="category-stats">
                            <span><i>📦</i> 189 objets</span>
                            <span><i>💰</i> 10-500€</span>
                        </div>
                    </a>

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