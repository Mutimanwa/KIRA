<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-heart-pulse-line me-2"></i>
                        Activité Clinique
                    </h5>
                    <div class="d-flex align-items-center gap-2">
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="ri-filter-3-line me-1"></i>
                            Filtrer
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-user-add-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Patients admis (aujourd'hui)</span>
                                    <h4 class="mb-0">15</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-calendar-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Rendez-vous (aujourd'hui)</span>
                                    <h4 class="mb-0">22</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-file-search-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux diagnostics</span>
                                    <h4 class="mb-0">8</h4>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-hotel-bed-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Taux d'occupation des lits</span>
                                    <h4 class="mb-0">85%</h4>
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
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-line-chart-line me-2"></i>
                        Activités de la semaine
                    </h5>
                </div>
                <div class="card-body text-center p-5">
                     <img src="https://i.imgur.com/eBv6N5R.png" alt="Graphique de l'activité clinique hebdomadaire" class="img-fluid rounded-3" style="max-height: 300px;">
                    <p class="text-muted mt-3 mb-0">
                        <small>Ce graphique représente le volume des admissions et des rendez-vous par jour.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success bg-opacity-10">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-calendar-line me-2"></i>
                        Rendez-vous du jour
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Heure</th>
                                    <th>Médecin</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td>11:00</td>
                                    <td>Dr. Johnson</td>
                                    <td><span class="badge bg-warning text-dark">En attente</span></td>
                                </tr>
                                <tr>
                                    <td>David Brown</td>
                                    <td>11:30</td>
                                    <td>Dr. Williams</td>
                                    <td><span class="badge bg-success">Confirmé</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-hospital-line me-2"></i>
                        Admissions récentes
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Heure d'admission</th>
                                    <th>Lit assigné</th>
                                    <th>Service</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>09:00</td>
                                    <td>Ch. 101, Lit A</td>
                                    <td>Urgence</td>
                                </tr>
                                <tr>
                                    <td>Sarah Connor</td>
                                    <td>09:35</td>
                                    <td>Ch. 205, Lit B</td>
                                    <td>Chirurgie</td>
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