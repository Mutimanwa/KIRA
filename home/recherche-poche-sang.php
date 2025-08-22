<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-danger bg-opacity-10">
                    <h5 class="card-title text-danger mb-0">
                        <i class="ri-search-line me-2"></i>
                        Recherche de Poches de Sang
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Trouvez rapidement les poches de sang correspondantes à vos critères.
                    </p>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="searchBloodGroup" class="form-label">Groupe sanguin</label>
                            <select class="form-select" id="searchBloodGroup">
                                <option>Tous</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="searchRhFactor" class="form-label">Facteur Rh</label>
                            <select class="form-select" id="searchRhFactor">
                                <option>Tous</option>
                                <option>Rh+</option>
                                <option>Rh-</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="searchDate" class="form-label">Date de prélèvement</label>
                            <input type="date" class="form-control" id="searchDate">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger">
                                <i class="ri-search-line me-1"></i>
                                Rechercher
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-danger bg-opacity-10">
                    <h5 class="card-title text-danger mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Résultats de la recherche
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Numéro de poche</th>
                                    <th>Groupe sanguin</th>
                                    <th>Date de prélèvement</th>
                                    <th>Date de péremption</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>P-20250821-001</td>
                                    <td>A+</td>
                                    <td>21/08/2025</td>
                                    <td>21/10/2025</td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#transfuseModal" title="Transfuser">
                                                <i class="ri-exchange-line"></i>
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

<div class="modal fade" id="transfuseModal" tabindex="-1" aria-labelledby="transfuseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transfuseModalLabel">Enregistrer une transfusion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="transfusionPatient" class="form-label">Patient</label>
                        <input type="text" class="form-control" id="transfusionPatient" placeholder="Rechercher un patient...">
                    </div>
                    <div class="mb-3">
                        <label for="pocheNumber" class="form-label">Numéro de poche</label>
                        <input type="text" class="form-control" id="pocheNumber" value="P-20250821-001" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="transfusionDate" class="form-label">Date et heure de la transfusion</label>
                        <input type="datetime-local" class="form-control" id="transfusionDate">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Valider la transfusion</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>