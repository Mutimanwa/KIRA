<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- Header avec statistiques -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 text-primary">
                            <i class="ri-folder-2-line me-2"></i> Gestion des dossiers médicaux
                        </h5>
                        <div>
                            <button class="btn btn-sm btn-outline-primary me-2">
                                <i class="ri-refresh-line"></i> Actualiser
                            </button>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newDossierModal">
                                <i class="ri-add-line me-1"></i> Nouveau dossier
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-archive-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">1,248</h3>
                                    <span class="text-muted">Dossiers actifs</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-checkbox-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">842</h3>
                                    <span class="text-muted">Complets</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-alert-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">127</h3>
                                    <span class="text-muted">En attente</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-upload-cloud-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">279</h3>
                                    <span class="text-muted">Numérisés</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barre de recherche et filtres -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Rechercher un dossier...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Tous les services</option>
                                <option>Cardiologie</option>
                                <option>Pédiatrie</option>
                                <option>Urgences</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Tous les statuts</option>
                                <option>Actif</option>
                                <option>Archivé</option>
                                <option>En cours</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-outline-secondary w-100">
                                <i class="ri-filter-line me-1"></i> Filtrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des dossiers -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th width="30">
                                        <div class="form-check d-flex align-items-center">
                                            
                                        </div>
                                    </th>
                                    <th>N° Dossier</th>
                                    <th>Patient</th>
                                    <th>Service</th>
                                    <th>Date création</th>
                                    <th>Statut</th>
                                    <th>Documents</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input mt-2" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">#DM-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>15/06/2023</td>
                                    <td>
                                        <span class="badge bg-success">Actif</span>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <span class="badge bg-primary rounded-pill me-1">5</span>
                                            <span class="badge bg-info rounded-pill">2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="ri-download-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Plus de lignes... -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                            Affichage <span class="fw-semibold">1-10</span> sur <span class="fw-semibold">1248</span>
                        </div>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Suivant</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nouveau dossier -->
<div class="modal fade" id="newDossierModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-file-add-line me-2"></i> Créer un nouveau dossier</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient</label>
                            <select class="form-select select2-search">
                                <option selected disabled>Sélectionner un patient</option>
                                <option>Jean DUPONT (NISS: 12345678901)</option>
                                <option>Marie DURAND (NISS: 98765432109)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un service</option>
                                <option>Cardiologie</option>
                                <option>Pédiatrie</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Motif</label>
                            <textarea class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Documents initiaux</label>
                            <div class="dropzone border rounded-3 p-3 text-center">
                                <i class="ri-upload-cloud-2-line display-4 text-muted mb-2"></i>
                                <h5>Glissez-déposez des fichiers ici</h5>
                                <p class="text-muted">ou <a href="#">parcourir</a> vos fichiers</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<style>
    .search-box {
        position: relative;
    }
    .search-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
    }
    .dropzone {
        border: 2px dashed #dee2e6;
        transition: all 0.3s;
    }
    .dropzone:hover {
        border-color: #0d6efd;
        background-color: rgba(13, 110, 253, 0.05);
    }
    .table-hover tbody tr {
        transition: all 0.2s;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.03);
    }
</style>
<?php include_once 'footer.php'; ?>