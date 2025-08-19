<?php include_once 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-tiltle text-primary">
                    <i class="ri-search-eye-line me-2"></i>
                    Audit des accès
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-account-box-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Rôles du système</span>
                                    <h3 class="mb-0">12</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-shield-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Permissions disponibles</span>
                                    <h3 class="mb-0">50</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-group-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Utilisateurs actifs</span>
                                    <h3 class="mb-0">203</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-user-star-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Droits attribués</span>
                                    <h3 class="mb-0">30</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary bg-opacity-10">
            <h5 class="card-title text-primary mb-0">
                <i class="ri-file-list-3-line me-2"></i>
                Journal d'audit détaillé
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basicExample" class="table table-hover align-middle m-0">
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Rôle</th>
                            <th>Action effectuée</th>
                            <th>Module concerné</th>
                            <th>Date & Heure</th>
                            <th>Adresse IP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <i class="ri-user-2-line me-2"></i>John Doe
                            </td>
                            <td>Médecin</td>
                            <td>
                                <i class="ri-edit-box-line text-warning me-1"></i>
                                Modification
                            </td>
                            <td>Dossier patient (Patient #123)</td>
                            <td>19/08/2025 09:30:15</td>
                            <td>192.168.1.10</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="ri-user-2-line me-2"></i>Jane Smith
                            </td>
                            <td>Infirmier</td>
                            <td>
                                <i class="ri-key-line text-success me-1"></i>
                                Connexion
                            </td>
                            <td>Authentification</td>
                            <td>19/08/2025 09:35:40</td>
                            <td>203.0.113.55</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="ri-user-2-line me-2"></i>Admin
                            </td>
                            <td>Administrateur</td>
                            <td>
                                <i class="ri-delete-bin-line text-danger me-1"></i>
                                Suppression
                            </td>
                            <td>Utilisateurs (Utilisateur #45)</td>
                            <td>19/08/2025 09:40:00</td>
                            <td>192.168.1.50</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="ri-user-2-line me-2"></i>David Martin
                            </td>
                            <td>Pharmacien</td>
                            <td>
                                <i class="ri-add-line text-primary me-1"></i>
                                Création
                            </td>
                            <td>Ordonnance (Ordonnance #001)</td>
                            <td>19/08/2025 09:45:22</td>
                            <td>10.0.0.8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-info bg-opacity-10">
            <h5 class="card-title text-info mb-0">
                <i class="ri-bar-chart-2-line me-2"></i>
                Activités d'accès par heure
            </h5>
        </div>
        <div class="card-body text-center p-5">
            <div id="audit-chart"></div>
            <p class="text-muted mt-3 mb-0">
                <small>Ce graphique représente le volume des actions d'audit par heure.</small>
            </p>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>