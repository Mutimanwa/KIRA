<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-success bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-line-chart-line me-2"></i>
                        Statistiques d'Activité
                    </h5>
                    <button class="btn btn-outline-success btn-sm">
                        <i class="ri-refresh-line me-1"></i>
                        Actualiser les données
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-user-add-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Admissions aujourd'hui</span>
                                    <h4 class="mb-0">15</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-stethoscope-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Consultations (semaine)</span>
                                    <h4 class="mb-0">87</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-nurse-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Chirurgies prévues</span>
                                    <h4 class="mb-0">5</h4>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-file-list-3-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Rapports cliniques générés</span>
                                    <h4 class="mb-0">34</h4>
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
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success bg-opacity-10">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-bar-chart-fill me-2"></i>
                        Activités cliniques par mois
                    </h5>
                </div>
                <div class="card-body text-center p-5">
                    <img src="https://i.imgur.com/eBv6N5R.png" alt="Graphique des activités cliniques par mois" class="img-fluid rounded-3" style="max-height: 300px;">
                    <p class="text-muted mt-3 mb-0">
                        <small>Ce graphique peut être un graphique à barres ou en lignes généré avec ApexCharts.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-success bg-opacity-10">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-table-line me-2"></i>
                        Récapitulatif des actions par service
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="activity-by-service-table">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Admissions</th>
                                    <th>Consultations</th>
                                    <th>Rapports</th>
                                    <th>Statistiques</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Urgence</td>
                                    <td>8</td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td><span class="badge bg-success">En forte activité</span></td>
                                </tr>
                                <tr>
                                    <td>Cardiologie</td>
                                    <td>3</td>
                                    <td>15</td>
                                    <td>8</td>
                                    <td><span class="badge bg-info">Activité moyenne</span></td>
                                </tr>
                                <tr>
                                    <td>Pédiatrie</td>
                                    <td>4</td>
                                    <td>20</td>
                                    <td>7</td>
                                    <td><span class="badge bg-info">Activité moyenne</span></td>
                                </tr>
                                <tr>
                                    <td>Chirurgie</td>
                                    <td>2</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td><span class="badge bg-warning text-dark">Activité faible</span></td>
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