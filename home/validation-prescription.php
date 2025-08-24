<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-shield-check-line me-2"></i> Validation des Prescriptions
                    </h5>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">15</h3>
                                    <span class="text-muted">Prescriptions en attente</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-double-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">42</h3>
                                    <span class="text-muted">Validées (jour)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-close-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">3</h3>
                                    <span class="text-muted">Rejetées (jour)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-timer-2-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">12 min</h3>
                                    <span class="text-muted">Délai moyen validation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des prescriptions à valider -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header">
                    <h5 class="card-title">Prescriptions en attente de validation</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="validationTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>N° Prescription</th>
                                    <th>Patient</th>
                                    <th>Prescripteur</th>
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PRES-2023-0450</td>
                                    <td>Marie Durand</td>
                                    <td>Dr. Alain Durand</td>
                                    <td>22/11/2023 10:15</td>
                                    <td>Cardiologie</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#validatePrescriptionModal">
                                                <i class="ri-check-line me-1"></i> Valider
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PRES-2023-0449</td>
                                    <td>Paul Lefebvre</td>
                                    <td>Dr. Sophie Martin</td>
                                    <td>22/11/2023 09:30</td>
                                    <td>Pédiatrie</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#validatePrescriptionModal">
                                                <i class="ri-check-line me-1"></i> Valider
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

<!-- Modal de Validation -->
<div class="modal fade" id="validatePrescriptionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-dark">
                <h5 class="modal-title"><i class="ri-shield-check-line me-2"></i> Validation de la Prescription #PRES-2023-0450</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <h6>Patient: Marie Durand</h6>
                        <p class="text-muted small mb-0">N° Dossier: 67890 | Service: Cardiologie</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <h6>Prescripteur: Dr. Alain Durand</h6>
                        <p class="text-muted small mb-0">Date: 22/11/2023 10:15</p>
                    </div>
                </div>
                <hr>
                <h6>Détail de la prescription</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="table-light">
                            <tr>
                                <th>Médicament</th>
                                <th>Posologie</th>
                                <th>Durée</th>
                                <th class="text-center">Vérifié</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Amlodipine 5mg</td>
                                <td>1 cp/jour le matin</td>
                                <td>30 jours</td>
                                <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                            </tr>
                            <tr>
                                <td>Lisinopril 10mg</td>
                                <td>1 cp/jour le matin</td>
                                <td>30 jours</td>
                                <td class="text-center"><input class="form-check-input" type="checkbox"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <label class="form-label">Notes du pharmacien</label>
                    <textarea class="form-control" rows="2" placeholder="Ajouter des commentaires ou des alertes..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#rejectPrescriptionModal">Rejeter</button>
                <button type="button" class="btn btn-primary"><i class="ri-check-double-line me-1"></i> Valider et délivrer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Rejet -->
<div class="modal fade" id="rejectPrescriptionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="ri-close-circle-line me-2 text-danger"></i> Rejeter la Prescription</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Motif du rejet <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="4" placeholder="Veuillez spécifier la raison du rejet (ex: interaction médicamenteuse, posologie incorrecte, etc.)"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Confirmer le rejet</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#validationTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>


