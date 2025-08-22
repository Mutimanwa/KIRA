<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-exchange-line me-2"></i>
                        Historique des Transfusions
                    </h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTransfusionModal">
                        <i class="ri-add-line me-1"></i>
                        Nouvelle transfusion
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Historique complet des transfusions effectuées.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-calendar-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Transfusions ce mois-ci</span>
                                    <h4 class="mb-0">45</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-alarm-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Transfusions urgentes</span>
                                    <h4 class="mb-0">8</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-drop-fill fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Total poches utilisées</span>
                                    <h4 class="mb-0">890</h4>
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
                        Liste des Transfusions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Numéro de transfusion</th>
                                    <th>Patient</th>
                                    <th>Poche utilisée</th>
                                    <th>Date de la transfusion</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>T-20250821-001</td>
                                    <td>J. Dupont</td>
                                    <td>P-20250815-002 (O+)</td>
                                    <td>21/08/2025 à 10h30</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteTransfusion">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip"
                                                data-bs-emplacement="top" title="voir les details du transfusion">
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

<!-- modals -->
<div class="modal fade" id="deleteTransfusion" tabindex="-1" aria-labelledby="deleteTrans" aria-hidden="true" >
    <div class="modal-dialog sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTrans">Confirmer la suppression</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Êtes-vous sûr de vouloir supprimer ce donneur ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>