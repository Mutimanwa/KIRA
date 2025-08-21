<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-warning bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-warning mb-0">
                        <i class="ri-shopping-cart-line me-2"></i>
                        Gestion des Dispensations
                    </h5>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addDispensationModal">
                        <i class="ri-add-line me-1"></i>
                        Enregistrer une dispensation
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Suivi des médicaments délivrés aux patients.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Dispensations du jour</span>
                                    <h4 class="mb-0">45</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-money-euro-box-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Montant total (mois)</span>
                                    <h4 class="mb-0">€12,500</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-file-list-3-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Ordonnances en attente</span>
                                    <h4 class="mb-0">10</h4>
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
                <div class="card-header bg-warning bg-opacity-10">
                    <h5 class="card-title text-warning mb-0">
                        <i class="ri-history-line me-2"></i>
                        Historique des Dispensations
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Médicament</th>
                                    <th>Quantité</th>
                                    <th>Date de dispensation</th>
                                    <th>Montant</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A. Dupuis</td>
                                    <td>Paracétamol 500mg</td>
                                    <td>1 boîte</td>
                                    <td>20/08/2025</td>
                                    <td>€2.50</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>M. Leblanc</td>
                                    <td>Antibiotique X</td>
                                    <td>1 flacon</td>
                                    <td>19/08/2025</td>
                                    <td>€15.75</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                                <i class="ri-eye-line"></i>
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

<div class="modal fade" id="addDispensationModal" tabindex="-1" aria-labelledby="addDispensationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDispensationModalLabel">Enregistrer une dispensation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="patientName" class="form-label">Nom du patient</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Rechercher un patient...">
                        </div>
                        <div class="col-md-6">
                            <label for="medication" class="form-label">Médicament</label>
                            <input type="text" class="form-control" id="medication" placeholder="Rechercher un médicament...">
                        </div>
                        <div class="col-md-6">
                            <label for="quantity" class="form-label">Quantité</label>
                            <input type="number" class="form-control" id="quantity">
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="form-label">Prix (€)</label>
                            <input type="number" class="form-control" id="price" step="0.01">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">Enregistrer la dispensation</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>