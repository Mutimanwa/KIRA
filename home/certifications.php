<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-medal-line me-2"></i> Certifications
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newCertificationModal">
                            <i class="ri-add-line me-1"></i> Nouvelle certification
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-medal-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">12</h3>
                                    <span class="text-muted">Certifications actives</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">3</h3>
                                    <span class="text-muted">En renouvellement</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-calendar-event-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">45</h3>
                                    <span class="text-muted">Jours avant audit</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-target-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">2</h3>
                                    <span class="text-muted">Nouvelles prévues</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des certifications -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="certificationsTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Certification</th>
                                    <th>Organisme</th>
                                    <th>Date d'obtention</th>
                                    <th>Date d'expiration</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Accréditation HAS</td>
                                    <td>HAS</td>
                                    <td>15/03/2022</td>
                                    <td>15/03/2025</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delCertification">
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
                                    <td>ISO 9001:2015</td>
                                    <td>AFNOR</td>
                                    <td>22/06/2021</td>
                                    <td>22/06/2024</td>
                                    <td><span class="badge bg-warning">À renouveler</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delCertification">
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
                                    <td>Certification V2020</td>
                                    <td>QualiCert</td>
                                    <td>10/01/2023</td>
                                    <td>10/01/2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delCertification">
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

<!-- Modal Supprimer Certification -->
<div class="modal fade" id="delCertification" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette certification ?
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Non</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Oui</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nouvelle Certification -->
<div class="modal fade" id="newCertificationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Nouvelle certification</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nom de la certification</label>
                            <input type="text" class="form-control" placeholder="Ex: Accréditation HAS">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Organisme certificateur</label>
                            <input type="text" class="form-control" placeholder="Ex: HAS">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date d'obtention</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date d'expiration</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un statut</option>
                                <option>Active</option>
                                <option>En cours</option>
                                <option>À renouveler</option>
                                <option>Expirée</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Référence</label>
                            <input type="text" class="form-control" placeholder="Ex: CERT-2023-001">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Description de la certification..."></textarea>
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

<?php include_once 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#certificationsTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"B><"col-md-6"f>>rtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>