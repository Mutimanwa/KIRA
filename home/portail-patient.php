<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-user-heart-line me-2"></i>
                        Mon Portail Patient
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap gap-4">
                        <div class="d-flex align-items-center">
                            <div class="icon-box lg bg-primary rounded-5 me-2">
                                <i class="ri-account-circle-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">John Doe</h4>
                                <p class="m-0 text-muted">Nom du patient</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box lg bg-info rounded-5 me-2">
                                <i class="ri-cake-2-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">35 ans</h4>
                                <p class="m-0 text-muted">Âge</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box lg bg-success rounded-5 me-2">
                                <i class="ri-calendar-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">10/05/2025</h4>
                                <p class="m-0 text-muted">Dernière consultation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-sm-6 col-md-4">
            <div class="card shadow-sm border-left-info py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-info me-3">
                            <div class="text-xs fw-bold text-info text-uppercase mb-1">
                                Rendez-vous à venir
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">2</div>
                        </div>
                        <i class="ri-calendar-event-line fs-3 text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card shadow-sm border-left-success py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-success me-3">
                            <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                Résultats d'analyses
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">Nouveaux</div>
                        </div>
                        <i class="ri-file-search-line fs-3 text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card shadow-sm border-left-warning py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-warning me-3">
                            <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                                Ordonnances actives
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">1</div>
                        </div>
                        <i class="ri-hospital-line fs-3 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary bg-opacity-10">
                    <h5 class="card-title text-secondary mb-0">
                        <i class="ri-history-line me-2"></i>
                        Historique des consultations
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="consultations-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Médecin</th>
                                    <th>Service</th>
                                    <th>Raison de la visite</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10/05/2025</td>
                                    <td>Dr. Johnson</td>
                                    <td>Cardiologie</td>
                                    <td>Examen de routine</td>
                                    <td>
                                        <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15/03/2025</td>
                                    <td>Dr. Williams</td>
                                    <td>Pneumologie</td>
                                    <td>Suivi de la toux chronique</td>
                                    <td>
                                        <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                            <i class="ri-eye-line"></i>
                                        </button>
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