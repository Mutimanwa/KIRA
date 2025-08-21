<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-tools-line me-2"></i> Gestion de la Maintenance des Équipements
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newMaintenanceModal">
                            <i class="ri-add-line me-1"></i> Planifier une maintenance
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-microscope-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">256</h3>
                                    <span class="text-muted">Équipements totaux</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-progress-wrench-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">12</h3>
                                    <span class="text-muted">En maintenance</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-calendar-check-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">34</h3>
                                    <span class="text-muted">Maintenances prévues</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-error-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">5</h3>
                                    <span class="text-muted">Maintenances en retard</span>
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
                                <option>Radiologie</option>
                                <option>Laboratoire</option>
                                <option>Bloc opératoire</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Type d'équipement</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Imagerie</option>
                                <option>Analyse</option>
                                <option>Monitoring</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Planifiée</option>
                                <option>En cours</option>
                                <option>Terminée</option>
                                <option>En retard</option>
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

        <!-- Tableau des maintenances -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="maintenanceTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Équipement (ID)</th>
                                    <th>Service</th>
                                    <th>Dernière maintenance</th>
                                    <th>Prochaine maintenance</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Scanner IRM (IRM-01)</td>
                                    <td>Radiologie</td>
                                    <td>15/08/2023</td>
                                    <td>15/02/2024</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Analyseur sanguin (LAB-05)</td>
                                    <td>Laboratoire</td>
                                    <td>01/10/2023</td>
                                    <td>01/12/2023</td>
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
                                    <td>Moniteur cardiaque (BLOC-02)</td>
                                    <td>Bloc opératoire</td>
                                    <td>20/09/2023</td>
                                    <td>20/11/2023</td>
                                    <td><span class="badge bg-danger">En retard</span></td>
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

<!-- Modal Nouvelle Maintenance -->
<div class="modal fade" id="newMaintenanceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Planifier une nouvelle maintenance</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Équipement</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un équipement</option>
                                <option>Scanner IRM (IRM-01)</option>
                                <option>Analyseur sanguin (LAB-05)</option>
                                <option>Moniteur cardiaque (BLOC-02)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type de maintenance</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un type</option>
                                <option>Préventive</option>
                                <option>Corrective</option>
                                <option>Étalonnage</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date planifiée</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Technicien assigné</label>
                            <input type="text" class="form-control" placeholder="Nom du technicien">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Notes / Instructions</label>
                            <textarea class="form-control" rows="3" placeholder="Instructions spécifiques pour la maintenance..."></textarea>
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
        $('#maintenanceTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>

