<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-database-2-line me-2"></i>
                        Gestion des sauvegardes
                    </h5>
                    <button class="btn btn-primary">
                        <i class="ri-save-3-line me-1"></i>
                        Lancer une sauvegarde manuelle
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Dernière sauvegarde</span>
                                    <h4 class="mb-0">19/08/2025 à 10:45</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-calendar-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Prochaine sauvegarde</span>
                                    <h4 class="mb-0">20/08/2025 à 03:00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-hard-drive-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Taille totale</span>
                                    <h4 class="mb-0">1.25 Go</h4>
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
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-history-line me-2"></i>
                        Historique des sauvegardes
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basicExample" class="table table-hover align-middle m-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Taille</th>
                                    <th>Statut</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19/08/2025 10:45:00</td>
                                    <td>150 Mo</td>
                                    <td><span class="badge bg-success">Complète</span></td>
                                    <td>Manuelle</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-2-line"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Restaurer" data-bs-target="#restoreModal" data-bs-toggle="modal">
                                                <i class="ri-refresh-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" data-bs-target="#deleteModal" data-bs-toggle="modal">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18/08/2025 03:00:00</td>
                                    <td>148 Mo</td>
                                    <td><span class="badge bg-success">Complète</span></td>
                                    <td>Automatique</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-2-line"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Restaurer" data-bs-target="#restoreModal" data-bs-toggle="modal">
                                                <i class="ri-refresh-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer" data-bs-target="#deleteModal" data-bs-toggle="modal">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17/08/2025 03:00:00</td>
                                    <td>145 Mo</td>
                                    <td><span class="badge bg-danger">Échec</span></td>
                                    <td>Automatique</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-2-line"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm"  title="Restaurer" data-bs-target="#restoreModal" data-bs-toggle="modal">
                                                <i class="ri-refresh-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm"  title="Supprimer" data-bs-target="#deleteModal" data-bs-toggle="modal">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette sauvegarde ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="restoreModal" tabindex="-1" aria-labelledby="restoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="restoreModalLabel">Confirmation de restauration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <i class="ri-error-warning-line me-2"></i>
                    <div>
                        La restauration écrasera toutes les données actuelles.
                    </div>
                </div>
                Êtes-vous sûr de vouloir restaurer les données à partir de cette sauvegarde ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">Restaurer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>