<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-history-line me-2"></i> Historique des Prescriptions
                    </h5>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-file-list-3-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">1,452</h3>
                                    <span class="text-muted">Prescriptions (mois)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-double-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">98%</h3>
                                    <span class="text-muted">Délivrées</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-close-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">2%</h3>
                                    <span class="text-muted">Annulées</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-refresh-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">212</h3>
                                    <span class="text-muted">Renouvellements</span>
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
                            <label class="form-label">Patient</label>
                            <input type="text" class="form-control" placeholder="Nom ou N° dossier...">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Médecin prescripteur</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Dr. Sophie Martin</option>
                                <option>Dr. Alain Durand</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Période</label>
                            <input type="date" class="form-control">
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

        <!-- Tableau de l'historique -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="historiquePrescriptionsTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>N° Prescription</th>
                                    <th>Patient</th>
                                    <th>Prescripteur</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PRES-2023-0312</td>
                                    <td>Alain Bernard</td>
                                    <td>Dr. Sophie Martin</td>
                                    <td>15/10/2023</td>
                                    <td><span class="badge bg-success">Délivrée</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Imprimer" class="btn btn-sm btn-outline-secondary rounded">
                                                <i class="ri-printer-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PRES-2023-0311</td>
                                    <td>Céline Petit</td>
                                    <td>Dr. Alain Durand</td>
                                    <td>14/10/2023</td>
                                    <td><span class="badge bg-danger">Annulée</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Imprimer" class="btn btn-sm btn-outline-secondary rounded">
                                                <i class="ri-printer-line"></i>
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

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#historiquePrescriptionsTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>

