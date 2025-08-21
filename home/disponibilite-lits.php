<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-hotel-bed-line me-2"></i>
                        Disponibilité des lits
                    </h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transferModal">
                        <i class="ri-exchange-line me-1"></i>
                        Transférer un patient
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Suivi en temps réel de l'occupation des lits par service et par chambre.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Lits disponibles</span>
                                    <h4 class="mb-0">45</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-close-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Lits occupés</span>
                                    <h4 class="mb-0">155</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-bar-chart-2-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Taux d'occupation</span>
                                    <h4 class="mb-0">77.5%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Liste des lits
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Numéro du lit</th>
                                    <th>Chambre</th>
                                    <th>Service</th>
                                    <th>Statut</th>
                                    <th>Patient occupant</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01-001</td>
                                    <td>Chambre 101</td>
                                    <td>Cardiologie</td>
                                    <td><span class="badge bg-danger">Occupé</span></td>
                                    <td>Patient A. Dupuis</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#transferModal" title="Transférer">
                                                <i class="ri-exchange-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02-015</td>
                                    <td>Chambre 215</td>
                                    <td>Pédiatrie</td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                    <td>Aucun</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Attribuer">
                                                <i class="ri-check-line"></i>
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

<div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="transferModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transferModalLabel">Transfert de patient</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="patientToTransfer" class="form-label">Patient à transférer</label>
                            <input type="text" class="form-control" id="patientToTransfer" placeholder="Rechercher un patient...">
                        </div>
                        <div class="col-md-6">
                            <label for="oldBed" class="form-label">Lit actuel</label>
                            <input type="text" class="form-control" id="oldBed" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="newBed" class="form-label">Nouveau lit</label>
                            <select class="form-select" id="newBed">
                                <option>Sélectionner un lit disponible...</option>
                                <option>02-015 - Chambre 215 (Pédiatrie)</option>
                                <option>03-007 - Chambre 307 (Urgence)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="transferDate" class="form-label">Date du transfert</label>
                            <input type="date" class="form-control" id="transferDate">
                        </div>
                        <div class="col-md-12">
                            <label for="transferReason" class="form-label">Raison du transfert</label>
                            <textarea class="form-control" id="transferReason" rows="3" placeholder="Saisir la raison médicale ou administrative du transfert..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer le transfert</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>