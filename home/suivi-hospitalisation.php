<?php include 'header.php'; ?>

<div class="app-body">
    <div class="container-fluid">
        <!-- Header avec titre et boutons d'actions -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">
                <i class="fas fa-procedures me-2"></i>Suivi des Hospitalisations
            </h2>
            <div>
                <button class="btn btn-primary me-2">
                    <i class="fas fa-plus me-1"></i> Nouvelle admission
                </button>
                <button class="btn btn-outline-secondary">
                    <i class="fas fa-filter me-1"></i> Filtres
                </button>
            </div>
        </div>

        <!-- Cartes de statistiques rapides -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stat-card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Patients actuels</h5>
                        <h2 class="mb-0">42</h2>
                        <small><i class="fas fa-bed me-1"></i> 78% occupation</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Sorties aujourd'hui</h5>
                        <h2 class="mb-0">8</h2>
                        <small><i class="fas fa-calendar-day me-1"></i> 15% des lits</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Transferts en cours</h5>
                        <h2 class="mb-0">3</h2>
                        <small><i class="fas fa-exchange-alt me-1"></i> 2 urgences</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Moyenne de séjour</h5>
                        <h2 class="mb-0">4.2j</h2>
                        <small><i class="fas fa-clock me-1"></i> -0.5j vs semaine dernière</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau principal avec recherche -->
        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex flex-wrap justify-content-between align-items-center">
                <h5 class="mb-0">Liste des patients hospitalisés</h5>
                <div class="d-flex">
                    <div class="input-group me-2" style="width: 250px;">
                        <span class="input-group-text bg-transparent"><i class="ri-search-line"></i></span>
                        <input type="text" class="form-control" placeholder="Rechercher...">
                    </div>
                    <select class="form-select" style="width: 150px;">
                        <option>Tous services</option>
                        <option>Cardiologie</option>
                        <option>Chirurgie</option>
                        <option>Pédiatrie</option>
                    </select>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
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
            <div class="card-footer bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>Affichage 1-10 sur 42 patients</div>
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                        </ul>
                    </nav>
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
</div>



<?php include 'footer.php'; ?>
