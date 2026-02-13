<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échange'Objets - Connexion</title>
    
    <!-- Bootstrap CSS local -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/bootstrap/css/bootstrap.min.css">

    <!-- Notre fichier CSS personnalisé -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body>
    <div class="container login-container">
        <div class="row g-0">
            <!-- Section gauche -->
            <div class="col-md-6">
                <div class="left-section">
                    <div class="illustration animate-item">
                        <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Cercle extérieur avec dégradé -->
                            <circle cx="100" cy="100" r="85" stroke="url(#gradientStroke)" stroke-width="1.5" fill="none"/>
                            
                            <!-- Symbole d'échange coloré -->
                            <path d="M70 100 L95 75 L120 100 L95 125 L70 100" stroke="var(--accent-primary)" stroke-width="1.5" fill="none"/>
                            
                            <!-- Points décoratifs colorés -->
                            <circle cx="60" cy="100" r="4" fill="var(--accent-secondary)"/>
                            <circle cx="140" cy="100" r="4" fill="var(--accent-tertiary)"/>
                            
                            <!-- Lignes d'échange -->
                            <path d="M40 80 L70 80" stroke="var(--border-light)" stroke-width="1.5" stroke-dasharray="4 4"/>
                            <path d="M130 120 L160 120" stroke="var(--border-light)" stroke-width="1.5" stroke-dasharray="4 4"/>
                            
                            <!-- Point central avec dégradé -->
                            <circle cx="100" cy="100" r="8" fill="url(#gradientDot)"/>
                            
                            <!-- Dégradés -->
                            <defs>
                                <linearGradient id="gradientStroke" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="var(--accent-primary)" stop-opacity="0.3"/>
                                    <stop offset="100%" stop-color="var(--accent-secondary)" stop-opacity="0.3"/>
                                </linearGradient>
                                <linearGradient id="gradientDot" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="var(--accent-primary)"/>
                                    <stop offset="100%" stop-color="var(--accent-secondary)"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <h2>Échange'Objets</h2>
                        <p>Donnez une seconde vie à vos objets<br>et découvrez des trésors cachés</p>
                    </div>
                    
                    <div class="stats animate-item delay-1">
                        <div class="stat-item">
                            <div class="stat-number">50k+</div>
                            <div class="stat-label">Membres</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100k+</div>
                            <div class="stat-label">Échanges</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4.8</div>
                            <div class="stat-label">Avis</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section droite -->
            <div class="col-md-6">
                <div class="right-section">
                    <div class="header animate-item">
                        <h1>Bon retour <span>parmi nous</span></h1>
                        <p>Connectez-vous pour accéder à votre espace d'échange</p>
                    </div>

                    <form>
                        <div class="form-group animate-item delay-1">
                            <label for="email">Adresse email</label>
                            <div class="input-wrapper">
                                <input type="email" class="form-control-custom" id="email" placeholder="nom@exemple.com" required>
                                <span class="input-icon">✉️</span>
                            </div>
                        </div>

                        <div class="form-group animate-item delay-1">
                            <label for="password">Mot de passe</label>
                            <div class="input-wrapper">
                                <input type="password" class="form-control-custom" id="password" placeholder="••••••••" required>
                                <span class="input-icon">🔒</span>
                            </div>
                        </div>

                        <div class="links-container animate-item delay-2">
                            <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                            <a href="#" class="admin-link">
                                <span>👤</span>
                                Accès administrateur
                            </a>
                        </div>

                        <button type="submit" class="btn-login animate-item delay-2">
                            Se connecter
                        </button>

                        <div class="signup-link animate-item delay-3">
                            Nouveau sur Échange'Objets ?
                            <a href="#">Créer un compte</a>
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