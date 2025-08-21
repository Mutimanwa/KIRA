<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-alert-line me-2"></i> Gestion des Risques
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newRiskModal">
                            <i class="ri-add-line me-1"></i> Nouveau risque
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-shield-flash-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">48</h3>
                                    <span class="text-muted">Risques identifiés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-error-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">12</h3>
                                    <span class="text-muted">Risques élevés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-shield-check-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">25</h3>
                                    <span class="text-muted">Risques traités</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-add-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">5</h3>
                                    <span class="text-muted">Nouveaux ce mois-ci</span>
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
                            <label class="form-label">Service</label>
                            <select class="form-select">
                                <option selected>Tous les services</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                                <option>Pharmacie</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Niveau de risque</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Faible</option>
                                <option>Modéré</option>
                                <option>Élevé</option>
                                <option>Critique</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Ouvert</option>
                                <option>En cours de traitement</option>
                                <option>Traité</option>
                                <option>Clos</option>
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100">
                                <i class="ri-filter-3-line me-1"></i> Filtrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des risques -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="risksTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Référence</th>
                                    <th>Description du risque</th>
                                    <th>Service</th>
                                    <th>Niveau</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RSK-2023-015</td>
                                    <td>Erreur de dispensation de médicament</td>
                                    <td>Pharmacie</td>
                                    <td><span class="badge bg-danger">Critique</span></td>
                                    <td><span class="badge bg-warning text-dark">En cours</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delRisk">
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
                                    <td>RSK-2023-014</td>
                                    <td>Chute de patient dans la chambre 204</td>
                                    <td>Chirurgie</td>
                                    <td><span class="badge bg-warning text-dark">Élevé</span></td>
                                    <td><span class="badge bg-success">Traité</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delRisk">
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
                                    <td>RSK-2023-012</td>
                                    <td>Panne du système de monitoring cardiaque</td>
                                    <td>Urgences</td>
                                    <td><span class="badge bg-info">Modéré</span></td>
                                    <td><span class="badge bg-secondary">Clos</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delRisk">
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

<!-- Modal Supprimer Risque -->
<div class="modal fade" id="delRisk" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce risque ?
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

<!-- Modal Nouveau Risque -->
<div class="modal fade" id="newRiskModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Déclarer un nouveau risque</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Description du risque</label>
                            <textarea class="form-control" rows="3" placeholder="Décrivez précisément le risque identifié..."></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service concerné</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un service</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                                <option>Pharmacie</option>
                                <option>Administration</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date d'identification</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Niveau de risque initial</label>
                            <select class="form-select">
                                <option selected disabled>Évaluer le niveau</option>
                                <option>Faible</option>
                                <option>Modéré</option>
                                <option>Élevé</option>
                                <option>Critique</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Responsable du traitement</label>
                            <input type="text" class="form-control" placeholder="Nom du responsable">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Actions immédiates prises</label>
                            <textarea class="form-control" rows="2" placeholder="Décrivez les premières mesures..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Enregistrer le risque</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#risksTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>

