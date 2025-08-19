<?php include 'header.php'; ?>
<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-bettwen align-items-center">

                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-hospital-line me-2"></i> Sorties Patients
                    </h5>
                    <a href="nouvelle-sortie.php" class="btn btn-primary ms-auto" data-bs-toggle="tooltip"
                        data-bs-emplacement="top" title="Etablir une nouvelle sortie">
                        <i class="ri-add-line"></i>
                        Nouvelle sortie
                    </a>
                </div>
                <div class="card-body">
                    <!-- Cartes d'indicateurs -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="border d-flex rounded p-3 align-items-center">
                                <div class="icon-box rounded-4 bg-primary bg-opacity-10 me-3 lg">
                                    <i class="ri-wheelchair-fill text-primary fs-3 "></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Sorties programmées</h6>
                                    <h3 class="mb-0">18</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="border d-flex rounded p-3 align-items-center">
                                <div class="icon-box rounded-4 bg-success bg-opacity-10 me-3 lg">
                                    <i class="ri-checkbox-circle-line text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Sorties effectuées</h6>
                                    <h3 class="mb-0">12</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="border d-flex rounded p-3 align-items-center">
                                <div class="icon-box rounded-4 bg-warning bg-opacity-10 me-3 lg">
                                    <i class="ri-information-2-line text-warning fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Retards</h6>
                                    <h3 class="mb-0">3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="border d-flex rounded p-3 align-items-center">
                                <div class="icon-box rounded-4 bg-info bg-opacity-10 me-3 lg">
                                    <i class="ri-time-line text-info fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Temps moyen</h6>
                                    <h3 class="mb-0">42 min</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Tableau principal -->
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="basicExample">
                    <thead>
                        <tr>
                            <th>Patient</th>
                            <th>Service</th>
                            <th>Date entrée</th>
                            <th>Date sortie</th>
                            <th>Durée</th>
                            <th>Statut</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-3 bg-primary bg-opacity-10 text-primary">ML</div>
                                    <div>
                                        <strong>Marie Lambert</strong>
                                        <div class="text-muted small">#P-87452 • 45 ans</div>
                                    </div>
                                </div>
                            </td>
                            <td>Chirurgie</td>
                            <td>20/07/2023</td>
                            <td>
                                <strong>Aujourd'hui</strong>
                                <div class="text-muted small">14h00</div>
                            </td>
                            <td>5 jours</td>
                            <td>
                                <span class="badge bg-success bg-opacity-10 text-success">
                                    <i class="fas fa-check-circle me-1"></i> Validée
                                </span>
                            </td>

                            <td>
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-outline-primary rounded">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info rounded">
                                        <i class="ri-printer-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-success rounded">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger rounded">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-3 bg-primary bg-opacity-10 text-primary">ML</div>
                                    <div>
                                        <strong>Marie Lambert</strong>
                                        <div class="text-muted small">#P-87452 • 45 ans</div>
                                    </div>
                                </div>
                            </td>
                            <td>Chirurgie</td>
                            <td>20/07/2023</td>
                            <td>
                                <strong>Aujourd'hui</strong>
                                <div class="text-muted small">14h00</div>
                            </td>
                            <td>5 jours</td>
                            <td>
                                <span class="badge bg-success bg-opacity-10 text-success">
                                    <i class="fas fa-check-circle me-1"></i> Validée
                                </span>
                            </td>

                            <td>
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-outline-primary rounded">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info rounded">
                                        <i class="ri-printer-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-success rounded">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal"
                                        data-bs-target="#deleteSortie">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Autres lignes... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>

<!-- modals -->

<div class="modal made" tabindex="-1" aria-labelledby="sortieLabel" id="deleteSortie" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-opacity-10">
                <h4 class="modal-title" id="sortieLabel">
                    Effacer la sortie
                </h4>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Vous ete sur de vouloir supprimer cette sortie</h5>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Non
                    </button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Oui</button>
                </div>

            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>