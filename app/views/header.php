<!-- Header réutilisable -->
<header>
    <nav class="navbar navbar-custom fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="dashboard.html" id="logo-brand">Échange<span>'Objets</span></a>
            
            <div class="search-bar" id="search-bar-container">
                <i>🔍</i>
                <input type="text" id="recherche" placeholder="Rechercher un objet...">
            </div>
            
            <div class="user-menu">
                <a href="/listObjet" class="nav-link-custom" id="nav-accueil">
                    <i>🏠</i>
                    Accueil
                </a>
                
                <a href="demandes.html" class="nav-link-custom" id="nav-demandes">
                    <i>📋</i>
                    Demandes
                    <span class="badge-notification" id="demandes-count">3</span>
                </a>
                
                <div class="dropdown" id="echanges-dropdown">
                    <button class="nav-link-custom" data-bs-toggle="dropdown">
                        <i>🔄</i>
                        Échanges
                        <span class="badge-notification" id="total-echanges">8</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-custom">
                        <li><a class="dropdown-item-custom" href="demandes.html?filtre=attente">
                            <i>⏳</i> En attente 
                            <span class="badge badge-warning" id="badge-attente">3</span>
                        </a></li>
                        <li><a class="dropdown-item-custom" href="demandes.html?filtre=accepte">
                            <i>✅</i> Acceptés 
                            <span class="badge badge-success" id="badge-accepte">4</span>
                        </a></li>
                        <li><a class="dropdown-item-custom" href="demandes.html?filtre=refuse">
                            <i>❌</i> Refusés 
                            <span class="badge badge-danger" id="badge-refuse">1</span>
                        </a></li>
                    </ul>
                </div>
                
                <div class="notification-badge has-notifications" data-count="3">
                    <span>🔔</span>
                </div>
                
                <!-- Menu utilisateur avec logout -->
                <div class="dropdown">
                    <div class="user-avatar" data-bs-toggle="dropdown" id="userAvatar">
                        JD
                    </div>
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-end">
                        <li><a href="/" class="dropdown-item-custom"><i>🏠</i> Dashboard</a></li>
                        <li><a href="/categories" class="dropdown-item-custom"><i>📁</i> Catégories</a></li>
                        <li><a href="/demandes" class="dropdown-item-custom"><i>📋</i> Mes demandes</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="/logout" class="dropdown-item-custom logout" id="logout-btn"><i>🚪</i> Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>