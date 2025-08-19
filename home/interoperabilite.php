<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-swap-box-line me-2"></i>
                        Interoperabilité & Connectivité
                    </h5>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#configModal">
                        <i class="ri-settings-line me-1"></i>
                        Configuration des services
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-double-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Transactions réussies (24h)</span>
                                    <h4 class="mb-0">9,876</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-close-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Transactions en échec (24h)</span>
                                    <h4 class="mb-0">12</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-plug-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Services actifs</span>
                                    <h4 class="mb-0">4/5</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Journal des transactions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Service</th>
                                    <th>Type de données</th>
                                    <th>Statut</th>
                                    <th>Description</th>
                                    <th>Date & Heure</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TX-001</td>
                                    <td>Service de facturation</td>
                                    <td>Facture</td>
                                    <td><span class="badge bg-success">Réussi</span></td>
                                    <td>Facture #F2025-001 envoyée.</td>
                                    <td>19/08/2025 11:15:00</td>
                                    <td>
                                        <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TX-002</td>
                                    <td>Laboratoire externe</td>
                                    <td>Résultats d'analyses</td>
                                    <td><span class="badge bg-danger">Échec</span></td>
                                    <td>Erreur de connexion au serveur API.</td>
                                    <td>19/08/2025 11:10:00</td>
                                    <td>
                                        <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button class="btn btn-outline-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Re-synchroniser">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="configModal" tabindex="-1" aria-labelledby="configModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModalLabel">Configuration des services</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Service de facturation externe</h6>
                                <p class="mb-0 text-muted"><small>Statut: <span class="badge bg-success">Connecté</span></small></p>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Modifier</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Laboratoire d'analyses</h6>
                                <p class="mb-0 text-muted"><small>Statut: <span class="badge bg-danger">Déconnecté</span></small></p>
                            </div>
                            <button class="btn btn-outline-info btn-sm">Connecter</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>