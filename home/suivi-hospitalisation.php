<?php include 'header.php'; ?>

<div class="app-body">

        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary bg-opacity-10">
                        <!-- Header avec titre et boutons d'actions -->
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-primary">
                                <i class="ri-hospital-line me-2"></i>Suivi des Hospitalisations
                            </h5>
                            <div>
                                <button class="btn btn-primary me-2">
                                    <i class="ri-add-line me-1"></i> Nouvelle admission
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="ri-filter-line me-1"></i> Filtres
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Cartes de statistiques rapides -->
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <div class=" p-3 border rounded-3 ">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box lg bg-primary text-primary bg-opacity-10 rounded-4 me-3">
                                            <i class="ri-user-line fs-2"></i>
                                        </div>
                                        <div>
                                            <h2 class="mb-0">42</h2>
                                            <h5 class="card-title">Patients actuels</h5>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <a class="text-primary" href="javascript:void(0);">
                                            <span>Occupation</span>
                                            <i class="ri-arrow-right-line ms-1"></i>
                                        </a>
                                        <div class="text-end">
                                            <p class="mb-0 text-primary">+30%</p>
                                            <span class="badge bg-primary-subtle text-primary small">this month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sorties aujourd'hui -->
                            <div class="col-md-3">
                                <div class=" p-3 border rounded-3 ">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box lg bg-success text-success bg-opacity-10 rounded-4 me-3">
                                            <i class="ri-user-line fs-2"></i>
                                        </div>
                                        <div>
                                            <h2 class="mb-0">42</h2>
                                            <h5 class="card-title">Sorties aujourd'hui</h5>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <a class="text-primary" href="javascript:void(0);">
                                            <span>Dernier stats</span>
                                            <i class="ri-arrow-right-line ms-1"></i>
                                        </a>
                                        <div class="text-end">
                                            <p class="mb-0 text-primary">+15%</p>
                                            <span class="badge bg-warning-subtle text-warning small">Lits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Transferts en cours -->
                            <div class="col-md-3">
                                <div class=" p-3 border rounded-3 ">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box lg bg-warning text-warning bg-opacity-10 rounded-4 me-3">
                                            <i class="ri-share-forward-2-fill fs-2"></i>
                                        </div>
                                        <div>
                                            <h2 class="mb-0">42</h2>
                                            <h5 class="card-title">Transferts en cours</h5>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <a class="text-primary" href="javascript:void(0);">
                                            <span>Transferts en cours</span>
                                            <i class="ri-arrow-right-line ms-1"></i>
                                        </a>
                                        <div class="text-end">
                                            <p class="mb-0 text-primary">+30%</p>
                                            <span class="badge bg-warning-subtle text-warning small"> 2 urgences</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Moyenne de jour utilise -->
                            <div class="col-md-3">
                                <div class=" p-3 border rounded-3 ">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box lg bg-info text-info bg-opacity-10 rounded-4 me-3">
                                            <i class="ri-alarm-line fs-2"></i>
                                        </div>
                                        <div>
                                            <h2 class="mb-0">4.2j</h2>
                                            <h5 class="card-title">Moyenne de séjour</h5>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <a class="text-primary" href="javascript:void(0);">
                                            <span>Transferts en cours</span>
                                            <i class="ri-arrow-right-line ms-1"></i>
                                        </a>
                                        <div class="text-end">
                                            <p class="mb-0 text-primary"> -0.5j</p>
                                            <span class="badge bg-warning-subtle text-warning small"> semaine dernière</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau principal avec recherche -->
        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex flex-wrap justify-content-between align-items-center">
                <h5 class="mb-0">Liste des patients hospitalisés</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basicExample" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Chambre</th>
                                <th>Service</th>
                                <th>Entrée</th>
                                <th>Durée</th>
                                <th>Médecin</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-3">JD</div>
                                        <div>
                                            <strong>Jean Dupont</strong><br>
                                            <small>62 ans - #P-84521</small>
                                        </div>
                                    </div>
                                </td>
                                <td>305B</td>
                                <td>Cardiologie</td>
                                <td>24/07/2023</td>
                                <td>1 jour</td>
                                <td>Dr. Martin</td>
                                <td><span class="badge bg-success">Stable</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary me-1">
                                        <i class=" ri-eye-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="ri-ellipsis-line"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Autres lignes de patients... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Section infos complémentaires (peut être cachée/déployée) -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Prochains transferts</h5>
                        <button class="btn btn-sm btn-outline-secondary">Voir tout</button>
                    </div>
                    <div class="card-body">
                        <!-- Liste des transferts -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Alertes et interventions</h5>
                        <button class="btn btn-sm btn-outline-secondary">Voir tout</button>
                    </div>
                    <div class="card-body">
                        <!-- Liste des alertes -->
                    </div>
                </div>
            </div>
        </div>
</div>



<?php include 'footer.php'; ?>