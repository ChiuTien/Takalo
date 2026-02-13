<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échange'Objets - Inscription</title>

    <!-- Bootstrap CSS local -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/bootstrap/css/bootstrap.min.css">

    <!-- Notre fichier CSS personnalisé -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>

<body class="login-page">
    <div class="container-fluid login-container px-0">
        <div class="row g-0">
            <!-- Section gauche -->
            <div class="col-md-6">
                <div class="left-section">
                    <div class="illustration animate-item">
                        <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="100" cy="100" r="85" stroke="url(#gradientStroke)" stroke-width="1.5" fill="none" />
                            <path d="M70 100 L95 75 L120 100 L95 125 L70 100" stroke="var(--accent-primary)" stroke-width="1.5" fill="none" />
                            <circle cx="60" cy="100" r="4" fill="var(--accent-secondary)" />
                            <circle cx="140" cy="100" r="4" fill="var(--accent-tertiary)" />
                            <circle cx="100" cy="100" r="8" fill="url(#gradientDot)" />
                            <defs>
                                <linearGradient id="gradientStroke" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="var(--accent-primary)" stop-opacity="0.3" />
                                    <stop offset="100%" stop-color="var(--accent-secondary)" stop-opacity="0.3" />
                                </linearGradient>
                                <linearGradient id="gradientDot" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="var(--accent-primary)" />
                                    <stop offset="100%" stop-color="var(--accent-secondary)" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <h2>Échange'Objets</h2>
                        <p>Rejoignez notre communauté<br>et commencez à échanger</p>
                    </div>
                </div>
            </div>

            <!-- Section droite -->
            <div class="col-md-6">
                <div class="right-section">
                    <div class="header animate-item">
                        <h1>Créer un <span>compte</span></h1>
                        <p>Rejoignez des milliers d'utilisateurs</p>
                    </div>

                    <form id="signupForm">
                        <div class="form-group animate-item delay-1">
                            <label for="nom">Nom </label>
                            <div class="input-wrapper">
                                <input type="text" class="form-control-custom" id="nom" placeholder="Jean Dupont" required>
                                <span class="input-icon">👤</span>
                            </div>
                        </div>

                        <div class="form-group animate-item delay-1">
                            <label for="prenom">Prenom</label>
                            <div class="input-wrapper">
                                <input type="text" class="form-control-custom" id="prenom" placeholder="Jean" required>
                                <span class="input-icon">👤</span>
                            </div>
                        </div>

                        <div class="form-group animate-item delay-1">
                            <label for="password">Mot de passe</label>
                            <div class="input-wrapper">
                                <input type="password" class="form-control-custom" id="password" placeholder="••••••••" required>
                                <span class="input-icon">🔒</span>
                            </div>
                        </div>

                        <button type="submit" class="btn-login animate-item delay-2">
                            S'inscrire
                        </button>

                        <div class="signup-link animate-item delay-3">
                            Déjà un compte ?
                            <a href="<?= BASE_URL ?>/">Se connecter</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS local -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>