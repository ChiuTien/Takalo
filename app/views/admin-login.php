<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échange'Objets - Administration</title>
    
    <!-- Bootstrap CSS local -->
    <link rel="stylesheet" href="<?= BASE_URL ?>bootstrap/css/bootstrap.min.css">

    <!-- Notre fichier CSS personnalisé -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body class="login-page">
    <div class="container login-container">
        <div class="row g-0">
            <!-- Section gauche -->
            <div class="col-md-6">
                <div class="left-section" style="background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);">
                    <div class="illustration animate-item">
                        <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="100" cy="100" r="85" stroke="white" stroke-width="1.5" fill="none"/>
                            <path d="M70 100 L95 75 L120 100 L95 125 L70 100" stroke="white" stroke-width="1.5" fill="none"/>
                            <circle cx="60" cy="100" r="4" fill="white" fill-opacity="0.5"/>
                            <circle cx="140" cy="100" r="4" fill="white" fill-opacity="0.5"/>
                            <circle cx="100" cy="100" r="8" fill="white" fill-opacity="0.3"/>
                        </svg>
                        <h2 style="color: white; -webkit-text-fill-color: white;">Espace Admin</h2>
                        <p style="color: rgba(255,255,255,0.8);">Gérez la plateforme d'échange</p>
                    </div>
                    
                    <div class="stats animate-item delay-1">
                        <div class="stat-item">
                            <div class="stat-number" style="color: white;">234</div>
                            <div class="stat-label" style="color: rgba(255,255,255,0.8);">Utilisateurs</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" style="color: white;">156</div>
                            <div class="stat-label" style="color: rgba(255,255,255,0.8);">Échanges</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section droite -->
            <div class="col-md-6">
                <div class="right-section">
                    <div class="header animate-item">
                        <h1>Administration</h1>
                        <p>Connectez-vous à votre espace administrateur</p>
                    </div>

                    <form id="adminLoginForm">
                        <div class="form-group animate-item delay-1">
                            <label for="admin-email">Identifiant admin</label>
                            <div class="input-wrapper">
                                <input type="text" class="form-control-custom" id="admin-email" placeholder="admin@echange.com" required>
                                <span class="input-icon">👤</span>
                            </div>
                        </div>

                        <div class="form-group animate-item delay-1">
                            <label for="admin-password">Mot de passe</label>
                            <div class="input-wrapper">
                                <input type="password" class="form-control-custom" id="admin-password" placeholder="••••••••" required>
                                <span class="input-icon">🔒</span>
                            </div>
                        </div>

                        <div class="links-container animate-item delay-2">
                            <a href="/" class="forgot-password">← Retour utilisateur</a>
                        </div>

                        <button type="submit" class="btn-login animate-item delay-2" style="background: linear-gradient(135deg, #2c3e50, #3498db);">
                            Connexion Admin
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Bootstrap JS local -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>