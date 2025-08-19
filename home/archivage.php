<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-archive-line me-2"></i>
                        Gestion de l'archivage
                    </h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#archiveModal">
                        <i class="ri-folder-add-line me-1"></i>
                        Archiver un dossier
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-secondary bg-opacity-10 text-secondary rounded-4 me-3">
                                    <i class="ri-folder-2-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Dossiers archivés</span>
                                    <h4 class="mb-0">2,145</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-database-2-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Volume total des archives</span>
                                    <h4 class="mb-0">87.5 Go</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-calendar-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Dernière action</span>
                                    <h4 class="mb-0">19/08/2025</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title text-info mb-3">
                <i class="ri-filter-line me-2"></i>
                Filtres
            </h5>
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Type d'élément</label>
                    <select class="form-select">
                        <option value="">Tous les types</option>
                        <option value="patient">Dossier patient</option>
                        <option value="document">Document</option>
                        <option value="facture">Facture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date d'archivage</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Utilisateur</label>
                    <select class="form-select">
                        <option value="">Tous les utilisateurs</option>
                        <option value="john-doe">John Doe</option>
                        <option value="jane-smith">Jane Smith</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Statut</label>
                    <select class="form-select">
                        <option value="">Tous les statuts</option>
                        <option value="archived">Archivé</option>
                        <option value="unarchived">Non archivé</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary bg-opacity-10">
            <h5 class="card-title text-primary mb-0">
                <i class="ri-history-line me-2"></i>
                Historique des actions d'archivage
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle m-0" id="basicExample">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Élément archivé</th>
                            <th>Utilisateur</th>
                            <th>Action</th>
                            <th>Date & Heure</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ARC-001</td>
                            <td>Dossier patient #1234</td>
                            <td>John Doe</td>
                            <td><span class="badge bg-secondary">Archivage</span></td>
                            <td>19/08/2025 11:00:00</td>
                            <td>
                                <div class="d-inline-flex gap-1">
                                    <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#unarchiveModal" title="Désarchiver">
                                        <i class="ri-folder-open-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ARC-002</td>
                            <td>Facture #5678</td>
                            <td>Jane Smith</td>
                            <td><span class="badge bg-secondary">Archivage</span></td>
                            <td>19/08/2025 10:55:00</td>
                            <td>
                                <div class="d-inline-flex gap-1">
                                    <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#unarchiveModal" title="Désarchiver">
                                        <i class="ri-folder-open-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ARC-003</td>
                            <td>Dossier patient #9101</td>
                            <td>Admin</td>
                            <td><span class="badge bg-success">Désarchivage</span></td>
                            <td>19/08/2025 10:50:00</td>
                            <td>
                                <div class="d-inline-flex gap-1">
                                    <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                        <i class="ri-eye-line"></i>
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

<div class="modal fade" id="archiveModal" tabindex="-1" aria-labelledby="archiveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="archiveModalLabel">Confirmer l'archivage</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info d-flex align-items-center" role="alert">
                    <i class="ri-information-line me-2"></i>
                    <div>
                        L'archivage d'un dossier le rendra inaccessible aux utilisateurs.
                    </div>
                </div>
                Veuillez confirmer l'archivage de l'élément sélectionné.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-secondary">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="unarchiveModal" tabindex="-1" aria-labelledby="unarchiveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="unarchiveModalLabel">Confirmer le désarchivage</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="ri-file-search-line me-2"></i>
                    <div>
                        Le désarchivage rendra l'élément à nouveau accessible.
                    </div>
                </div>
                Veuillez confirmer le désarchivage de l'élément sélectionné.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>