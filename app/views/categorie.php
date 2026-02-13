<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échange'Objets - Catégories</title>
    
    <!-- Bootstrap CSS local -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css">

    <!-- Notre fichier CSS personnalisé -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/font-awesome/css/all.min.css">
</head>
<body class="dashboard-page">
    <!-- Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Contenu principal -->
    <main>
        <div class="container-fluid mt-5 pt-4">
            <div class="main-content">
                <div class="page-title animate-item">
                    <h2>Catégories d'objets</h2>
                    <p>Choisissez une catégorie pour découvrir les objets disponibles à l'échange</p>
                </div>

                <div class="categories-grid">
                    <!-- Catégories dynamiques -->
                    <?php foreach ($categories as $categorie) { ?>
                        <a href="/listObjet/<?= $categorie->getIdCategorie() ?>" class="category-card animate-item delay-1">
                            <div class="category-icon">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <h3><?= $categorie->getValCategorie() ?></h3>
                            <p>Découvrir les objets</p>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include __DIR__ . '/footer.php'; ?>

    <!-- Bootstrap JS local -->
    <script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>