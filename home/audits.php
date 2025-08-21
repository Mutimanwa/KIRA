<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-list-check me-2"></i> Audits Qualité
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newAuditModal">
                            <i class="ri-add-line me-1"></i> Nouvel audit
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-list-check fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">24</h3>
                                    <span class="text-muted">Audits planifiés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-progress-3-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">8</h3>
                                    <span class="text-muted">Audits en cours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-checkbox-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">42</h3>
                                    <span class="text-muted">Audits clos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-alert-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">5</h3>
                                    <span class="text-muted">Actions en retard</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Type d'audit</label>
                            <select class="form-select">
                                <option selected>Tous les types</option>
                                <option>Interne</option>
                                <option>Externe</option>
                                <option>Certification</option>
                                <option>Surveillance</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Planifié</option>
                                <option>En cours</option>
                                <option>Réalisé</option>
                                <option>Clôturé</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Service audité</label>
                            <select class="form-select">
                                <option selected>Tous les services</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                                <option>Maternité</option>
                                <option>Pharmacie</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Période</label>
                            <select class="form-select">
                                <option selected>3 derniers mois</option>
                                <option>6 derniers mois</option>
                                <option>Année en cours</option>
                                <option>Année précédente</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des audits -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="auditsTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Référence</th>
                                    <th>Type</th>
                                    <th>Service</th>
                                    <th>Date prévue</th>
                                    <th>Auditeur</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AUD-2023-087</td>
                                    <td>Interne</td>
                                    <td>Urgences</td>
                                    <td>15/11/2023</td>
                                    <td>Dr. Martin Dupont</td>
                                    <td><span class="badge bg-info">En cours</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delAudit">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AUD-2023-086</td>
                                    <td>Certification</td>
                                    <td>Chirurgie</td>
                                    <td>08/11/2023</td>
                                    <td>QualiCert France</td>
                                    <td><span class="badge bg-success">Clôturé</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delAudit">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AUD-2023-085</td>
                                    <td>Interne</td>
                                    <td>Pharmacie</td>
                                    <td>02/11/2023</td>
                                    <td>M. Robert Klein</td>
                                    <td><span class="badge bg-success">Clôturé</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delAudit">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
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

<!-- Modal Supprimer Audit -->
<div class="modal fade" id="delAudit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cet audit ?
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    No
                </button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    Oui
                </button>
                </div>
           </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
