<?php include 'header.php'; ?>
<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-bettwen align-items-center">

                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-hospital-line me-2"></i> Sorties Patients
                    </h5>
                    <a href="" class="btn btn-primary ms-auto">
                        <i class="ri-add-line"></i>
                        Nouvelle sortie
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cartes d'indicateurs -->
    <div class="row mb-4 g-3">
        <div class="col-xl-3 col-md-6">
            <div class="card card-statistic bg-primary bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-primary bg-opacity-25 p-3 rounded-3 me-3">
                            <i class="ri-wheelchair-fill text-primary fs-4"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Sorties programmées</h6>
                            <h4 class="mb-0">18</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-statistic bg-success bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-success bg-opacity-25 p-3 rounded-3 me-3">
                            <i class="ri-checkbox-circle-line text-success fs-4"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Sorties effectuées</h6>
                            <h4 class="mb-0">12</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-statistic bg-warning bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-warning bg-opacity-25 p-3 rounded-3 me-3">
                            <i class="ri-information-2-line text-warning fs-4"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Retards</h6>
                            <h4 class="mb-0">3</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-statistic bg-info bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 bg-info bg-opacity-25 p-3 rounded-3 me-3">
                            <i class="ri-time-line text-info fs-4"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Temps moyen</h6>
                            <h4 class="mb-0">42 min</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tableau principal -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-0 py-3">
            <h5 class="mb-0">Liste des sorties</h5>
            <div class="row mt-2 g-3">
                <div class="col-md-5 col-12">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent"><i class="ri-search-line"></i></span>
                        <input type="text" class="form-control" placeholder="Rechercher...">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <select class="form-select">
                        <option>Tous les statuts</option>
                        <option>Programmée</option>
                        <option>Validée</option>
                        <option>En retard</option>
                        <option>Annulée</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-outline-secondary w-100">
                    <i class="ri-filter-line"></i>
                </button>
                </div>

            </div>
        </div>
        <div class="card-body p-0 mt-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </th>
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
                        <tr class="border-bottom">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
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
                                    <button class="btn btn-sm btn-outline-primary rounded-circle">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info rounded-circle">
                                        <i class="ri-printer-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-success rounded-circle">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger rounded-circle">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-bottom">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
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
                                    <button class="btn btn-sm btn-outline-primary rounded-circle">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info rounded-circle">
                                        <i class="ri-printer-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-success rounded-circle">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger rounded-circle">
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
        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center py-3">
            <div class="text-muted">
                Affichage <strong>1-10</strong> sur <strong>24</strong> sorties
            </div>
            <nav>
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">
                            <i class="ri-arrow-left-long-fill"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="ri-arrow-right-long-fill"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>



<?php include 'footer.php'; ?>