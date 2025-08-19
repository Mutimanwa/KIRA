<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-bar-chart-2-line me-2"></i>
                        Statistiques Patients
                    </h5>
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="ri-refresh-line me-1"></i>
                        Actualiser les données
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-group-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Total des patients</span>
                                    <h4 class="mb-0">12,093</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-user-add-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux patients (ce mois)</span>
                                    <h4 class="mb-0">452</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-genderless-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Répartition Hommes/Femmes</span>
                                    <h4 class="mb-0">55% / 45%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-user-add-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Âge moyen des patients</span>
                                    <h4 class="mb-0">42.5 ans</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-pie-chart-line me-2"></i>
                        Répartition des patients par genre
                    </h5>
                </div>
                <div class="card-body text-center p-5">
                    <img src="https://i.imgur.com/8Q6v8o5.png" alt="Graphique de répartition par genre" class="img-fluid rounded-3" style="max-height: 300px;">
                    <p class="text-muted mt-3 mb-0">
                        <small>Ce graphique peut être un graphique en secteurs (donut chart) généré avec ApexCharts.</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success bg-opacity-10">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-line-chart-line me-2"></i>
                        Nouvelles admissions par mois
                    </h5>
                </div>
                <div class="card-body text-center p-5">
                     <img src="https://i.imgur.com/eBv6N5R.png" alt="Graphique des nouvelles admissions par mois" class="img-fluid rounded-3" style="max-height: 300px;">
                    <p class="text-muted mt-3 mb-0">
                        <small>Ce graphique peut être une série temporelle générée avec ApexCharts.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-file-list-3-line me-2"></i>
                        Nombre de patients par service
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="patients-per-service-table">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Nombre de patients</th>
                                    <th>Statistiques</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cardiologie</td>
                                    <td>1,540</td>
                                    <td><span class="badge bg-primary">12.7%</span></td>
                                </tr>
                                <tr>
                                    <td>Pneumologie</td>
                                    <td>980</td>
                                    <td><span class="badge bg-primary">8.1%</span></td>
                                </tr>
                                <tr>
                                    <td>Chirurgie</td>
                                    <td>2,105</td>
                                    <td><span class="badge bg-primary">17.4%</span></td>
                                </tr>
                                <tr>
                                    <td>Pédiatrie</td>
                                    <td>1,210</td>
                                    <td><span class="badge bg-primary">10.0%</span></td>
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