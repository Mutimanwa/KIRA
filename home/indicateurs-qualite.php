<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-medal-line me-2"></i> Indicateurs de Qualité
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newIndicatorModal">
                            <i class="ri-add-line me-1"></i> Nouvel indicateur
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
                                    <h3 class="mb-0">78%</h3>
                                    <span class="text-muted">Indicateurs atteints</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-progress-4-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">15%</h3>
                                    <span class="text-muted">En progression</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-alert-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">7%</h3>
                                    <span class="text-muted">Non conformes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-line-chart-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">+5.2%</h3>
                                    <span class="text-muted">Amélioration mensuelle</span>
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
                                <option>Maternité</option>
                                <option>Pédiatrie</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Période</label>
                            <select class="form-select">
                                <option selected>Ce mois</option>
                                <option>Trimestre dernier</option>
                                <option>Semestre dernier</option>
                                <option>Année dernière</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Type d'indicateur</label>
                            <select class="form-select">
                                <option selected>Tous les types</option>
                                <option>Clinique</option>
                                <option>Sécurité</option>
                                <option>Satisfaction</option>
                                <option>Efficience</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">État</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Atteint</option>
                                <option>Partiellement atteint</option>
                                <option>Non atteint</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des indicateurs -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="indicateursTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Indicateur</th>
                                    <th>Service</th>
                                    <th>Valeur actuelle</th>
                                    <th>Cible</th>
                                    <th>Tendance</th>
                                    <th>État</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Taux d'infections nosocomiales</td>
                                    <td>Chirurgie</td>
                                    <td>3.2%</td>
                                    <td>< 3.0%</td>
                                    <td><span class="text-success"><i class="ri-arrow-down-line"></i> 0.5%</span></td>
                                    <td><span class="badge bg-warning">Partiel</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delIndicator">
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
                                    <td>Temps d'attente aux urgences</td>
                                    <td>Urgences</td>
                                    <td>42 min</td>
                                    <td>< 30 min</td>
                                    <td><span class="text-danger"><i class="ri-arrow-up-line"></i> 5 min</span></td>
                                    <td><span class="badge bg-danger">Non atteint</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delIndicator">
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
                                    <td>Satisfaction des patients</td>
                                    <td>Tous services</td>
                                    <td>88%</td>
                                    <td>> 90%</td>
                                    <td><span class="text-success"><i class="ri-arrow-up-line"></i> 3%</span></td>
                                    <td><span class="badge bg-warning">Partiel</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delIndicator">
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

<!-- Modal Supprimer Indicateur -->
<div class="modal fade" id="delIndicator" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cet indicateur ?
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

<!-- Modal Nouvel Indicateur -->
<div class="modal fade" id="newIndicatorModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Nouvel indicateur</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nom de l'indicateur</label>
                            <input type="text" class="form-control" placeholder="Ex: Taux d'infections nosocomiales">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service concerné</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un service</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                                <option>Maternité</option>
                                <option>Pédiatrie</option>
                                <option>Tous services</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type d'indicateur</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un type</option>
                                <option>Clinique</option>
                                <option>Sécurité</option>
                                <option>Satisfaction</option>
                                <option>Efficience</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Unité de mesure</label>
                            <input type="text" class="form-control" placeholder="Ex: %, minutes, nombre">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Valeur cible</label>
                            <input type="text" class="form-control" placeholder="Ex: 3.0">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Seuil d'alerte</label>
                            <input type="text" class="form-control" placeholder="Ex: 5.0">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Description de l'indicateur..."></textarea>
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
        $('#indicateursTable').DataTable({
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