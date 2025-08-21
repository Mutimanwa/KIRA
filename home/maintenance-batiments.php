<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-building-line me-2"></i> Gestion de la Maintenance des Bâtiments
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newInterventionModal">
                            <i class="ri-add-line me-1"></i> Planifier une intervention
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-community-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">4</h3>
                                    <span class="text-muted">Bâtiments gérés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-progress-wrench-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">3</h3>
                                    <span class="text-muted">Interventions en cours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-calendar-check-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">15</h3>
                                    <span class="text-muted">Interventions planifiées</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-fire-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">1</h3>
                                    <span class="text-muted">Incident urgent</span>
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
                            <label class="form-label">Bâtiment</label>
                            <select class="form-select">
                                <option selected>Tous les bâtiments</option>
                                <option>Bâtiment A - Maternité</option>
                                <option>Bâtiment B - Chirurgie</option>
                                <option>Bâtiment C - Urgences</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Type d'intervention</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Électricité</option>
                                <option>Plomberie</option>
                                <option>Climatisation</option>
                                <option>Ascenseur</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Planifiée</option>
                                <option>En cours</option>
                                <option>Terminée</option>
                                <option>Urgent</option>
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

        <!-- Tableau des interventions -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="maintenanceBatimentTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Référence</th>
                                    <th>Bâtiment/Zone</th>
                                    <th>Description</th>
                                    <th>Date planifiée</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>INT-2023-056</td>
                                    <td>Bâtiment C - Urgences</td>
                                    <td>Fuite d'eau dans la salle de soins 3</td>
                                    <td>22/11/2023</td>
                                    <td><span class="badge bg-danger">Urgent</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INT-2023-055</td>
                                    <td>Bâtiment A - 2ème étage</td>
                                    <td>Contrôle annuel du système de climatisation</td>
                                    <td>25/11/2023</td>
                                    <td><span class="badge bg-info">Planifiée</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INT-2023-054</td>
                                    <td>Bâtiment B - Ascenseur 1</td>
                                    <td>Réparation du bouton d'appel</td>
                                    <td>21/11/2023</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
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

<!-- Modal Nouvelle Intervention -->
<div class="modal fade" id="newInterventionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Planifier une nouvelle intervention</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Bâtiment</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un bâtiment</option>
                                <option>Bâtiment A - Maternité</option>
                                <option>Bâtiment B - Chirurgie</option>
                                <option>Bâtiment C - Urgences</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Zone / Étage / Salle</label>
                            <input type="text" class="form-control" placeholder="Ex: 2ème étage, Salle 204">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type d'intervention</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un type</option>
                                <option>Électricité</option>
                                <option>Plomberie</option>
                                <option>Climatisation</option>
                                <option>Ascenseur</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date planifiée</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description de l'intervention</label>
                            <textarea class="form-control" rows="3" placeholder="Décrivez le problème ou la tâche à effectuer..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Planifier</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#maintenanceBatimentTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>

