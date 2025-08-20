<?php include 'header.php'; ?>

<div class="app-body">


    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title text-primary mb-0">
                            <i class="ri-book-open-line me-2"></i>
                            Guide Utilisateur - Tunza
                        </h5>
                        <p class="text-muted small mb-0 mt-1">Version 1.0 - Dernière mise à jour:
                            <?php echo date('d/m/Y'); ?></p>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary me-2" download>
                            <i class="ri-file-download-line me-1"></i>
                            Télécharger PDF
                        </a>
                        <button class="btn btn-outline-primary" id="print-guide">
                            <i class="ri-printer-line me-1"></i>
                            Imprimer
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <p class="lead">
                        Ce guide complet vous accompagne dans l'utilisation quotidienne du logiciel de gestion
                        hospitalière Tunza.
                    </p>
                    <div class="alert alert-info d-flex align-items-center">
                        <i class="ri-lightbulb-flash-line me-2 fs-4"></i>
                        <div>
                            <strong>Astuce :</strong> Utilisez la recherche (Ctrl+F) pour trouver rapidement un terme
                            spécifique dans ce guide.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Sommaire amélioré avec recherche et suivi de progression -->
        <div class="col-lg-3">
            <div class="card shadow-sm sticky-top" style="top: 100px;">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h6 class="card-title text-info mb-0">
                        <i class="ri-list-ordered me-2"></i>
                        Sommaire
                    </h6>
                    <button class="btn btn-sm btn-outline-secondary" id="collapse-all">
                        <i class="ri-expand-left-right-line"></i>
                    </button>
                </div>
                <div class="card-body p-0">
                    <div class="p-2 border-bottom">
                        <input type="text" class="form-control form-control-sm"
                            placeholder="Rechercher dans le sommaire..." id="search-toc">
                    </div>
                    <div class="list-group list-group-flush" style="max-height: 70vh; overflow-y: auto;" id="toc-list">
                        <a href="#intro"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>1. Introduction</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#connexion"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>2. Connexion et Sécurité</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#navigation"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>3. Navigation générale</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#patients"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>4. Gestion des Patients</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#clinique"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>5. Module Clinique</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#chambres"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>6. Chambres et Lits</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#pharmacie"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>7. Pharmacie et Stock</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#finances"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>8. Finances et Facturation</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#rh"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>9. Ressources Humaines</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#audit"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>10. Audit et Accès</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#notifications"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>11. Notifications et Alertes</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#support"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>12. Support et Aide</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                        <a href="#bonnes-pratiques"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>13. Bonnes Pratiques</span>
                            <span class="badge bg-primary rounded-pill">0%</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu principal avec sections améliorées -->
        <div class="col-lg-9 ">
            <!-- Introduction améliorée -->
            <div class="card shadow-sm mb-4" id="intro">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-rocket-line me-2"></i>
                        1. Introduction
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#intro-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="intro-content">
                    <p class="lead">Bienvenue dans le logiciel de gestion hospitalière Tunza, conçu pour simplifier
                        et optimiser la gestion de votre établissement de santé.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <i class="ri-checkbox-circle-fill text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6>Centralisation des données</h6>
                                    <p class="text-muted small mb-0">Toutes les informations patients, médicales et
                                        administratives au même endroit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <i class="ri-checkbox-circle-fill text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6>Processus optimisés</h6>
                                    <p class="text-muted small mb-0">Gagnez du temps sur les tâches administratives
                                        répétitives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <i class="ri-checkbox-circle-fill text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6>Sécurité des données</h6>
                                    <p class="text-muted small mb-0">Respect des normes de confidentialité et protection
                                        des données sensibles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <i class="ri-checkbox-circle-fill text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6>Interface adaptée</h6>
                                    <p class="text-muted small mb-0">Expérience utilisateur conçue spécifiquement pour
                                        le milieu médical.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-light mt-4">
                        <h6><i class="ri-group-line me-2"></i>Public concerné :</h6>
                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <span class="badge bg-primary">Médecins</span>
                            <span class="badge bg-primary">Infirmiers</span>
                            <span class="badge bg-primary">Secrétaires</span>
                            <span class="badge bg-primary">Comptables</span>
                            <span class="badge bg-primary">Pharmaciens</span>
                            <span class="badge bg-primary">Administrateurs</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Connexion et Sécurité -->
            <div class="card shadow-sm mb-4" id="connexion">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-lock-2-line me-2"></i>
                        2. Connexion et Sécurité
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#connexion-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="connexion-content">
                    <div class="alert alert-warning">
                        <i class="ri-error-warning-line me-2"></i>
                        <strong>Important :</strong> Pour votre sécurité et celle des données patients, ne partagez
                        jamais vos identifiants de connexion.
                    </div>

                    <h6>Processus de connexion</h6>
                    <ol>
                        <li>Rendez-vous sur la page de connexion de Tunza</li>
                        <li>Saisissez votre identifiant (généralement votre adresse email professionnelle)</li>
                        <li>Entrez votre mot de passe</li>
                        <li>Si activé, complétez l'authentification à deux facteurs</li>
                        <li>Cliquez sur "Se connecter"</li>
                    </ol>

                    <div class="text-center my-4">
                        <img src="../assets/images/guide-login.png" class="img-fluid rounded-3 border"
                            alt="Écran de connexion" style="max-height: 400px;">
                        <p class="text-muted small mt-2">Interface de connexion sécurisée de Tunza</p>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card bg-secondary bg-opacity-10">
                                <div class="card-body">
                                    <h6><i class="ri-time-line me-2"></i>Déconnexion automatique</h6>
                                    <p class="small mb-0">Pour votre sécurité, le système vous déconnecte
                                        automatiquement après 15 minutes d'inactivité.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-secondary bg-opacity-10">
                                <div class="card-body">
                                    <h6><i class="ri-lock-password-line me-2"></i>Mot de passe oublié</h6>
                                    <p class="small mb-0">Utilisez le lien "Mot de passe oublié" pour réinitialiser vos
                                        identifiants en cas de besoin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation générale -->
            <div class="card shadow-sm mb-4" id="navigation">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-compass-3-line me-2"></i>
                        3. Navigation générale
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse"
                        data-bs-target="#navigation-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="navigation-content">
                    <p>L'interface de Tunza est conçue pour une navigation intuitive et efficace. Le menu
                        principal, situé sur le côté gauche, vous permet d'accéder à tous les modules.</p>

                    <div class="text-center my-4">
                        <img src="../assets/images/guide-principale.png" class="img-fluid rounded-3 border"
                            alt="Menu de navigation" style="max-height: 400px;">
                        <p class="text-muted small mt-2">Interface principale avec menu de navigation</p>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-search-line me-2"></i>Recherche rapide</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">Utilisez la barre de recherche en haut à droite pour trouver
                                        rapidement des patients, médicaments, ou fonctionnalités.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-dashboard-line me-2"></i>Tableau de bord</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">La page d'accueil présente un tableau de bord personnalisé
                                        avec les indicateurs clés selon votre rôle.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mt-4">
                        <i class="ri-information-line me-2"></i>
                        <strong>Personnalisation :</strong> Vous pouvez souvent personnaliser votre tableau de bord pour
                        afficher les widgets les plus utiles à votre travail.
                    </div>
                </div>
            </div>

            <!-- Gestion des Patients -->
            <div class="card shadow-sm mb-4" id="patients">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-group-line me-2"></i>
                        4. Gestion des Patients
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#patients-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="patients-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-user-add-line me-2"></i>Création d'un dossier patient
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <ol class="small">
                                        <li>Cliquez sur "Nouveau patient" dans le module de gestion</li>
                                        <li>Renseignez les informations personnelles</li>
                                        <li>Ajoutez les antécédents médicaux</li>
                                        <li>Validez la création du dossier</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-search-line me-2"></i>Recherche de patient</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">Utilisez la barre de recherche avec le nom, prénom, numéro de
                                        dossier ou autre identifiant pour retrouver rapidement un patient existant.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-4">Fiche patient complète</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <i class="ri-file-text-line text-primary fs-3 mb-2"></i>
                                    <h6>Informations personnelles</h6>
                                    <p class="small mb-0">Coordonnées, état civil, assurances</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <i class="ri-heart-pulse-line text-danger fs-3 mb-2"></i>
                                    <h6>Dossier médical</h6>
                                    <p class="small mb-0">Antécédents, allergies, traitements</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <i class="ri-calendar-event-line text-success fs-3 mb-2"></i>
                                    <h6>Rendez-vous</h6>
                                    <p class="small mb-0">Historique et planning des consultations</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mt-4">
                        <i class="ri-information-line me-2"></i>
                        <strong>Astuce :</strong> Vous pouvez utiliser les filtres avancés pour rechercher des patients
                        par date d'admission, médecin traitant, ou statut.
                    </div>
                </div>
            </div>

            <!-- Module Clinique -->
            <div class="card shadow-sm mb-4" id="clinique">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-stethoscope-line me-2"></i>
                        5. Module Clinique
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#clinique-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="clinique-content">
                    <p>Le module clinique regroupe toutes les fonctionnalités liées aux soins et au suivi médical des
                        patients.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-primary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-calendar-schedule-line me-2"></i>Gestion des
                                        rendez-vous</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Planification des consultations</li>
                                        <li>Gestion des créneaux horaires</li>
                                        <li>Alertes et rappels automatiques</li>
                                        <li>Annulation et report de RDV</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-file-list-3-line me-2"></i>Comptes rendus médicaux
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Rédaction de notes de consultation</li>
                                        <li>Modèles prédéfinis personnalisables</li>
                                        <li>Historique des comptes rendus</li>
                                        <li>Export et impression</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>Prescriptions médicales</h6>
                    <div class="alert alert-secondary">
                        <i class="ri-medicine-bottle-line me-2"></i>
                        Le système de prescriptions intègre une base de données médicaments avec interactions et
                        contre-indications.
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-file-text-line fs-1 text-primary mb-2"></i>
                                <h6>Ordonnances</h6>
                                <p class="small mb-0">Création et gestion des ordonnances</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-microscope-line fs-1 text-info mb-2"></i>
                                <h6>Examens</h6>
                                <p class="small mb-0">Prescription d'examens complémentaires</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-restaurant-line fs-1 text-success mb-2"></i>
                                <h6>Régimes</h6>
                                <p class="small mb-0">Prescriptions diététiques spécialisées</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambres et Lits -->
            <div class="card shadow-sm mb-4" id="chambres">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-hotel-bed-line me-2"></i>
                        6. Chambres et Lits
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#chambres-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="chambres-content">
                    <p>Ce module permet de gérer l'occupation des chambres et lits, ainsi que les transferts de patients
                        entre différents services.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-map-2-line me-2"></i>Vue d'occupation</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">Visualisez en temps réel l'état d'occupation de toutes les
                                        chambres avec un code couleur simple :</p>
                                    <ul class="small mt-2">
                                        <li><span class="badge bg-success">Vert</span> : Lit disponible</li>
                                        <li><span class="badge bg-warning">Orange</span> : Lit réservé/nettoyage</li>
                                        <li><span class="badge bg-danger">Rouge</span> : Lit occupé</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-user-location-line me-2"></i>Affectation des lits</h6>
                                </div>
                                <div class="card-body">
                                    <ol class="small mb-0">
                                        <li>Sélectionnez un patient</li>
                                        <li>Choisissez une chambre disponible</li>
                                        <li>Affectez un lit spécifique</li>
                                        <li>Validez l'affectation</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>Gestion des transferts</h6>
                    <div class="alert alert-warning">
                        <i class="ri-exchange-line me-2"></i>
                        Le système enregistre automatiquement l'historique des transferts pour assurer la traçabilité.
                    </div>

                    <div class="text-center my-4">
                        <img src="../assets/images/guide-chambre.png" class="img-fluid rounded-3 border"
                            alt="Vue des chambres" style="max-height: 400px;">
                        <p class="text-muted small mt-2">Interface de gestion des chambres et lits</p>
                    </div>
                </div>
            </div>

            <!-- Pharmacie et Stock -->
            <div class="card shadow-sm mb-4" id="pharmacie">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-medicine-bottle-line me-2"></i>
                        7. Pharmacie et Stock
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#pharmacie-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="pharmacie-content">
                    <p>Le module pharmacie permet de gérer le stock de médicaments, les prescriptions, et les alertes de
                        stock faible.</p>

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <i class="ri-search-line fs-1 text-primary mb-3"></i>
                                    <h6>Recherche de médicaments</h6>
                                    <p class="small">Recherchez par nom, substance active, ou code</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <i class="ri-archive-line fs-1 text-warning mb-3"></i>
                                    <h6>Gestion des stocks</h6>
                                    <p class="small">Suivi des entrées, sorties et inventaire</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <i class="ri-alarm-warning-line fs-1 text-danger mb-3"></i>
                                    <h6>Alertes automatiques</h6>
                                    <p class="small">Notifications pour stocks faibles ou périmés</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-4">Processus de dispensation</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-file-list-3-line me-2"></i>Prescriptions</h6>
                                </div>
                                <div class="card-body">
                                    <ol class="small mb-0">
                                        <li>Réception des prescriptions médicales</li>
                                        <li>Vérification de la disponibilité</li>
                                        <li>Préparation des médicaments</li>
                                        <li>Validation de la dispensation</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-history-line me-2"></i>Historique</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">Consultation de l'historique complet des dispensations par
                                        patient, date, ou médicament.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-success mt-4">
                        <i class="ri-information-line me-2"></i>
                        <strong>Interaction médicamenteuse :</strong> Le système vérifie automatiquement les
                        interactions entre les médicaments prescrits.
                    </div>
                </div>
            </div>

            <!-- Finances et Facturation -->
            <div class="card shadow-sm mb-4" id="finances">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-money-euro-circle-line me-2"></i>
                        8. Finances et Facturation
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#finances-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="finances-content">
                    <p>Le module financier permet de gérer la facturation, les paiements, et la comptabilité de
                        l'établissement.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-file-text-line me-2"></i>Facturation</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Création de factures personnalisées</li>
                                        <li>Intégration des actes médicaux</li>
                                        <li>Gestion des tarifs et forfaits</li>
                                        <li>Factures proforma et définitives</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-bank-card-line me-2"></i>Paiements</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Enregistrement des paiements</li>
                                        <li>Gestion des acomptes</li>
                                        <li>Suivi des impayés</li>
                                        <li>Règlements partiels</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>Rapports financiers</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-line-chart-line fs-1 text-primary mb-2"></i>
                                <h6>Chiffre d'affaires</h6>
                                <p class="small mb-0">Vue journalière, mensuelle, annuelle</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-money-dollar-circle-line fs-1 text-success mb-2"></i>
                                <h6>Encaissements</h6>
                                <p class="small mb-0">Suivi des recettes par mode de paiement</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-alert-line fs-1 text-danger mb-2"></i>
                                <h6>Impayés</h6>
                                <p class="small mb-0">Relances et gestion des créances</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mt-4">
                        <i class="ri-information-line me-2"></i>
                        <strong>Integration comptable :</strong> Le module permet l'export vers les principaux logiciels
                        de comptabilité.
                    </div>
                </div>
            </div>

            <!-- Ressources Humaines -->
            <div class="card shadow-sm mb-4" id="rh">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-team-line me-2"></i>
                        9. Ressources Humaines
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#rh-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="rh-content">
                    <p>Le module RH permet de gérer le personnel, les plannings, les congés et la paie (si configuré).
                    </p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-user-settings-line me-2"></i>Gestion du personnel</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Fiches employés complètes</li>
                                        <li>Gestion des contrats</li>
                                        <li>Documents administratifs</li>
                                        <li>Formations et compétences</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-calendar-2-line me-2"></i>Plannings</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Planning des équipes</li>
                                        <li>Gestion des shifts</li>
                                        <li>Affectation des services</li>
                                        <li>Visualisation mensuelle/hebdomadaire</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>Gestion des absences</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-calendar-event-line fs-1 text-primary mb-2"></i>
                                <h6>Congés</h6>
                                <p class="small mb-0">Demandes et validation des congés</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-hospital-line fs-1 text-warning mb-2"></i>
                                <h6>Arrêts maladie</h6>
                                <p class="small mb-0">Suivi des absences médicales</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-time-line fs-1 text-info mb-2"></i>
                                <h6>Pointages</h6>
                                <p class="small mb-0">Enregistrement des heures de travail</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-danger mt-4">
                        <i class="ri-shield-keyhole-line me-2"></i>
                        <strong>Accès restreint :</strong> Ce module n'est accessible qu'aux responsables RH et à la
                        direction.
                    </div>
                </div>
            </div>

            <!-- Audit et Accès -->
            <div class="card shadow-sm mb-4" id="audit">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-clipboard-line me-2"></i>
                        10. Audit et Accès
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#audit-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="audit-content">
                    <p>Le module d'audit enregistre toutes les actions importantes pour assurer la traçabilité et la
                        sécurité des données.</p>

                    <div class="alert alert-secondary">
                        <i class="ri-error-warning-line me-2"></i>
                        <strong>Conformité :</strong> Ce journal d'audit est essentiel pour respecter les exigences
                        réglementaires en matière de protection des données de santé.
                    </div>

                    <h6>Types d'événements enregistrés</h6>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-login-circle-line me-2"></i>Connexions</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Heure et date de connexion</li>
                                        <li>Adresse IP utilisée</li>
                                        <li>Succès/échec de l'authentification</li>
                                        <li>Déconnexions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-edit-line me-2"></i>Modifications</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Changements dans les dossiers patients</li>
                                        <li>Modifications de prescriptions</li>
                                        <li>Ajouts/suppressions de données</li>
                                        <li>Anciennes et nouvelles valeurs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>Recherche dans les logs</h6>
                    <div class="card bg-secondary bg-opacity-10">
                        <div class="card-body">
                            <p class="small mb-0">Vous pouvez filtrer les logs par :</p>
                            <ul class="small mt-2">
                                <li>Utilisateur spécifique</li>
                                <li>Période de temps</li>
                                <li>Type d'action</li>
                                <li>Module concerné</li>
                                <li>Patient concerné</li>
                            </ul>
                        </div>
                    </div>

                    <div class="alert alert-warning mt-4">
                        <i class="ri-time-line me-2"></i>
                        <strong>Conservation :</strong> Les logs sont conservés pendant 5 ans conformément aux exigences
                        légales.
                    </div>
                </div>
            </div>

            <!-- Notifications et Alertes -->
            <div class="card shadow-sm mb-4" id="notifications">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-notification-3-line me-2"></i>
                        11. Notifications et Alertes
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse"
                        data-bs-target="#notifications-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="notifications-content">
                    <p>Le système de notifications vous alerte des événements importants nécessitant votre attention.
                    </p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-alarm-warning-line me-2"></i>Types d'alertes</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li><span class="badge bg-danger">Urgent</span> : Action immédiate requise</li>
                                        <li><span class="badge bg-warning">Important</span> : À traiter rapidement</li>
                                        <li><span class="badge bg-info">Information</span> : Pour information</li>
                                        <li><span class="badge bg-success">Confirmation</span> : Action terminée</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-bell-line me-2"></i>Canaux de notification</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li>Notifications dans l'application</li>
                                        <li>Emails (selon criticité)</li>
                                        <li>SMS (alertes critiques uniquement)</li>
                                        <li>Intégration mobile possible</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>Exemples d'alertes courantes</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-medicine-bottle-line fs-1 text-danger mb-2"></i>
                                <h6>Stock faible</h6>
                                <p class="small mb-0">Médicaments en rupture imminente</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-calendar-event-line fs-1 text-primary mb-2"></i>
                                <h6>Rappels RDV</h6>
                                <p class="small mb-0">Rappels des consultations à venir</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded">
                                <i class="ri-task-line fs-1 text-warning mb-2"></i>
                                <h6>Tâches en attente</h6>
                                <p class="small mb-0">Actions nécessitant validation</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mt-4">
                        <i class="ri-settings-3-line me-2"></i>
                        <strong>Personnalisation :</strong> Vous pouvez configurer quelles notifications vous souhaitez
                        recevoir et par quel canal.
                    </div>
                </div>
            </div>

            <!-- Support et Aide -->
            <div class="card shadow-sm mb-4" id="support">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-customer-service-2-line me-2"></i>
                        12. Support et Aide
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse" data-bs-target="#support-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="support-content">
                    <p>Notre équipe de support est disponible pour vous aider à résoudre tout problème technique ou
                        répondre à vos questions sur l'utilisation du logiciel.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="ri-question-answer-line text-primary fs-1 mb-3"></i>
                                    <h5>Support technique</h5>
                                    <p class="small">Notre équipe est disponible du lundi au vendredi, de 8h à 18h.</p>
                                    <a href="mailto:support@tunza.com" class="btn btn-primary btn-sm">
                                        <i class="ri-mail-line me-1"></i>
                                        support@tunza.com
                                    </a>
                                    <p class="small mt-2"><i class="ri-phone-line me-1"></i>+XXX XX XX XX XX</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="ri-file-list-3-line text-info fs-1 mb-3"></i>
                                    <h5>Ressources</h5>
                                    <p class="small">Accédez à notre base de connaissances pour des réponses aux
                                        questions fréquentes.</p>
                                    <a href="faq.php" class="btn btn-info btn-sm me-2">
                                        <i class="ri-search-line me-1"></i>
                                        FAQ
                                    </a>
                                    <a href="tutoriels.php" class="btn btn-outline-info btn-sm">
                                        <i class="ri-video-line me-1"></i>
                                        Tutoriels
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-4">Demande d'assistance</h6>
                    <div class="card bg-secondary bg-opacity-10">
                        <div class="card-body">
                            <p class="small mb-2">Pour une résolution plus rapide, merci de préciser dans votre demande
                                :</p>
                            <ol class="small mb-0">
                                <li>Le module concerné</li>
                                <li>Les étapes pour reproduire le problème</li>
                                <li>Un screenshot si possible</li>
                                <li>Votre numéro de version logicielle</li>
                            </ol>
                        </div>
                    </div>

                    <div class="alert alert-light mt-4">
                        <h6><i class="ri-time-line me-2"></i>Délais de réponse</h6>
                        <ul class="mb-0">
                            <li>Urgences critiques : moins de 2 heures</li>
                            <li>Problèmes majeurs : moins de 24 heures</li>
                            <li>Demandes générales : moins de 48 heures</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bonnes Pratiques -->
            <div class="card shadow-sm mb-4" id="bonnes-pratiques">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-lightbulb-flash-line me-2"></i>
                        13. Bonnes Pratiques
                    </h5>
                    <button class="btn btn-sm btn-outline-secondary section-collapse"
                        data-bs-target="#bonnes-pratiques-content">
                        <i class="ri-expand-up-down-line"></i>
                    </button>
                </div>
                <div class="card-body" id="bonnes-pratiques-content">
                    <p class="lead">Adopter les bonnes pratiques garantit une utilisation optimale du logiciel et assure
                        la sécurité des données patients.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-shield-keyhole-line me-2"></i>Sécurité</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Ne jamais partager
                                            vos identifiants</li>
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Changer
                                            régulièrement votre mot de passe</li>
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Toujours vous
                                            déconnecter en quittant votre poste</li>
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Verrouiller votre
                                            session en cas d'absence</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-secondary bg-opacity-10">
                                    <h6 class="mb-0"><i class="ri-database-line me-2"></i>Qualité des données</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="small mb-0">
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Saisir des
                                            informations complètes et exactes</li>
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Vérifier les
                                            données avant validation</li>
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Mettre à jour
                                            régulièrement les dossiers</li>
                                        <li><i class="ri-checkbox-circle-fill text-success me-2"></i>Utiliser les champs
                                            obligatoires systématiquement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>Optimisation de l'utilisation</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded h-100">
                                <i class="ri-keyboard-line fs-1 text-primary mb-2"></i>
                                <h6>Raccourcis clavier</h6>
                                <p class="small mb-0">Apprenez les raccourcis pour gagner du temps</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded h-100">
                                <i class="ri-draft-line fs-1 text-info mb-2"></i>
                                <h6>Modèles personnalisés</h6>
                                <p class="small mb-0">Créez des modèles pour les documents récurrents</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 border rounded h-100">
                                <i class="ri-refresh-line fs-1 text-success mb-2"></i>
                                <h6>Mises à jour régulières</h6>
                                <p class="small mb-0">Maintenez votre logiciel à jour pour les nouvelles fonctionnalités
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-success mt-4">
                        <i class="ri-team-line me-2"></i>
                        <strong>Formation continue :</strong> Participez aux sessions de formation régulières pour
                        découvrir les nouvelles fonctionnalités et bonnes pratiques.
                    </div>
                </div>
            </div>

            <!-- Pied de page de guide -->
            <div class="alert alert-success mt-4">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="ri-checkbox-circle-fill fs-1"></i>
                    </div>
                    <div>
                        <h5>Félicitations !</h5>
                        <p class="mb-0">Vous avez terminé la lecture du guide utilisateur. Vous êtes maintenant prêt à
                            utiliser Tunza efficacement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript pour les fonctionnalités améliorées -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fonctionnalité de recherche dans le sommaire
        const searchInput = document.getElementById('search-toc');
        const tocItems = document.querySelectorAll('#toc-list .list-group-item');

        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();

            tocItems.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Fonctionnalité d'impression
        document.getElementById('print-guide').addEventListener('click', function () {
            window.print();
        });

        // Fonctionnalité de collapse/expand des sections
        const collapseButtons = document.querySelectorAll('.section-collapse');
        collapseButtons.forEach(button => {
            button.addEventListener('click', function () {
                const target = this.getAttribute('data-bs-target');
                const content = document.querySelector(target);

                if (content.style.display === 'none') {
                    content.style.display = 'block';
                    this.innerHTML = '<i class="ri-expand-up-down-line"></i>';
                } else {
                    content.style.display = 'none';
                    this.innerHTML = '<i class="ri-expand-up-down-line"></i>';
                }
            });
        });

        // Suivi de défilement pour la progression de lecture
        const sections = document.querySelectorAll('.card[id]');
        const tocBadges = document.querySelectorAll('#toc-list .badge');

        function updateReadingProgress() {
            const scrollPosition = window.scrollY + 100;

            sections.forEach((section, index) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    const progress = Math.min(100, Math.round(((scrollPosition - sectionTop) / sectionHeight) * 100));
                    tocBadges[index].textContent = `${progress}%`;

                    // Mettre à jour la couleur en fonction de la progression
                    if (progress == 0) {
                        tocBadges[index].className = 'badge bg-primary rounded-pill';
                    } else if (progress < 100) {
                        tocBadges[index].className = 'badge bg-info rounded-pill';
                    } else {
                        tocBadges[index].className = 'badge bg-success rounded-pill';
                    }
                }
            });
        }

        window.addEventListener('scroll', updateReadingProgress);
        window.addEventListener('resize', updateReadingProgress);
        updateReadingProgress(); // Initial call

        // Collapse/Expand all
        document.getElementById('collapse-all').addEventListener('click', function () {
            const allContents = document.querySelectorAll('.card-body');
            const isCollapsed = allContents[0].style.display === 'none';

            allContents.forEach(content => {
                content.style.display = isCollapsed ? 'block' : 'none';
            });

            const collapseButtons = document.querySelectorAll('.section-collapse');
            collapseButtons.forEach(button => {
                button.innerHTML = isCollapsed ?
                    '<i class="ri-expand-up-down-line"></i>' :
                    '<i class="ri-expand-up-down-line"></i>';
            });

            this.innerHTML = isCollapsed ?
                '<i class="ri-expand-left-right-line"></i>' :
                '<i class="ri-expand-left-right-line"></i>';
        });
    });
</script>

<style>
    .sticky-top {
        position: sticky;
        z-index: 1020;
    }

    /* Amélioration de l'impression */
    @media print {

        .app-header,
        .sidebar-wrapper,
        .card-header,
        .breadcrumb,
        .btn,
        #search-toc,
        #collapse-all,
        .section-collapse,
        .alert,
        .sticky-top {
            display: none !important;
        }

    }


    /* Style pour les badges de progression */
    .badge {
        transition: all 0.3s ease;
    }

    /* Style pour la liste du sommaire */
    #toc-list .list-group-item {
        transition: background-color 0.2s ease;
    }

    #toc-list .list-group-item:hover {
        background-color: #f8f9fa;
    }

    /* Espacement amélioré */
    .card-body h6 {
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
</style>
<?php include 'footer.php'; ?>