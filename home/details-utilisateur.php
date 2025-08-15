<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-primary">
                            <i class="ri-user-settings-line"></i>
                            Fiche Utilisateur Système
                        </h5>
                        <a href="gestion-utilisateurs.php" class="btn btn-outline-secondary">
                            <i class="ri-arrow-left-line"></i>
                            Retour à la liste
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Section 1: Profil et Identité -->
                    <div class="row gx-3">
                        <div class="col-xxl-4 col-sm-12">
                            <div class="card mb-3 bg-1">
                                <div class="card-body mh-230">

                                    <!-- Row starts -->
                                    <div class="row gx-3">
                                        <div class="col-sm-5">
                                            <img src="../assets/images/user2.png" class="img-fluid rounded-3"
                                                alt="Medical Dashboard">
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="text-white mt-3">
                                                <h3>Dr. Jessika Linda</h3>
                                                <h5>[#0004893]</h5>
                                                <div class="mt-1">2896 Reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row ends -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-sm-4">
                            <div class="card mb-3">
                                <div class="card-body mh-230">

                                    <!-- Card details start -->
                                    <div>
                                        <div class=" d-flex flex-column">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="icon-box md bg-info-subtle rounded-5 mb-2 no-shadow">
                                                    <i class="ri-id-card-line fs-1 text-info"></i>
                                                </div>
                                                <h6>Information de base</h6>
                                            </div>
                                            <p><strong>Email:</strong> [email]</p>
                                            <p><strong>Statut:</strong> <span class="badge bg-success">ACTIF</span></p>
                                            <p><strong>Établissement:</strong> [Nom établissement]</p>
                                        </div>
                                    </div>
                                    <!-- Card details end -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-sm-4">
                            <div class="card mb-3">
                                <div class="card-body mh-230">

                                    <!-- Card details start -->
                                    <div>
                                        <div class=" d-flex flex-column">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="icon-box md bg-success-subtle rounded-5 mb-2 no-shadow">
                                                    <i class="ri-lock-2-line fs-1 text-success"></i>
                                                </div>
                                                <h6 class="text-muted mb-3">Sécurité</h6>
                                            </div>
                                            
                                        <p><strong>2FA:</strong> <span class="badge bg-info">Activée (APPLI)</span></p>
                                        <p><strong>Dernière connexion:</strong> [date]</p>
                                        <p><strong>IP:</strong> [adresse IP]</p>
                                        </div>
                                    </div>
                                    <!-- Card details end -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 2: Détails techniques -->
                    <div class="row">
                        <!-- Colonne 1: Rôles et permissions -->
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="ri-shield-user-line"></i> Autorisations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h6>Rôle principal</h6>
                                        <div class="alert alert-primary py-2">[Nom du rôle]</div>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Rôles secondaires</h6>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-secondary">Rôle 1</span>
                                            <span class="badge bg-secondary">Rôle 2</span>
                                        </div>
                                    </div>

                                    <div>
                                        <h6>Permissions spéciales</h6>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-warning text-dark">Permission 1</span>
                                            <span class="badge bg-warning text-dark">Permission 2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Colonne 2: Historique et sécurité -->
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="ri-history-line"></i> Historique</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Créé le</span>
                                            <strong>[date_creation]</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Par</span>
                                            <strong>[créateur]</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Dernière modification</span>
                                            <strong>[date_maj]</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Par</span>
                                            <strong>[modificateur]</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="ri-lock-2-line"></i> Sécurité</h6>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="ri-alert-line"></i> Le mot de passe expirera le [date_expiration]
                                    </div>
                                    <button class="btn btn-sm btn-outline-danger me-2">Réinitialiser MDP</button>
                                    <button class="btn btn-sm btn-outline-primary">Modifier 2FA</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Actions -->
                    <div class="d-flex justify-content-end mt-4 gap-2">
                        <button class="btn btn-outline-secondary">
                            <i class="ri-edit-line"></i> Modifier
                        </button>
                        <button class="btn btn-outline-danger">
                            <i class="ri-delete-bin-line"></i> Désactiver
                        </button>
                        <button class="btn btn-primary">
                            <i class="ri-save-line"></i> Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>