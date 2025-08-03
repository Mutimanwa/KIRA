<?php include 'header.php'; ?>
<div class="app-body">
    <div class="container-fluid">
        <!-- En-tête avec titre et actions -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="mb-1">
                    <i class="fas fa-sign-out-alt me-2 text-primary"></i>Gestion des Sorties
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Hospitalisation</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sorties</li>
                    </ol>
                </nav>
            </div>
            <div>
                <button class="btn btn-primary me-2">
                    <i class="fas fa-file-export me-1"></i> Exporter
                </button>
                <div class="btn-group">
                    <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-calendar-alt me-1"></i> Aujourd'hui
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                        <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                        <li><a class="dropdown-item" href="#">Ce mois</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Période personnalisée</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Cartes d'indicateurs -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="card card-statistic bg-primary bg-opacity-10 border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-primary bg-opacity-25 p-3 rounded-3 me-3">
                                <i class="fas fa-wheelchair text-primary fs-4"></i>
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
                                <i class="fas fa-check-circle text-success fs-4"></i>
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
                                <i class="fas fa-exclamation-triangle text-warning fs-4"></i>
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
                                <i class="fas fa-clock text-info fs-4"></i>
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
            <div class="card-header bg-white border-0 d-flex flex-wrap justify-content-between align-items-center py-3">
                <h5 class="mb-0">Liste des sorties</h5>
                <div class="d-flex flex-wrap gap-2">
                    <div class="input-group" style="width: 200px;">
                        <span class="input-group-text bg-transparent"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Rechercher...">
                    </div>
                    <select class="form-select" style="width: 180px;">
                        <option>Tous les statuts</option>
                        <option>Programmée</option>
                        <option>Validée</option>
                        <option>En retard</option>
                        <option>Annulée</option>
                    </select>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-file-alt me-2"></i>Détails</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i>Imprimer</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"></i>Envoyer</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-times me-2"></i>Annuler</a></li>
                                        </ul>
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
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Panneau latéral pour les détails (peut être activé) -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="detailSortie">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Détails de sortie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Contenu des détails -->
            </div>
        </div>
    </div>
</div>

<style>
    .card-statistic {
        transition: all 0.3s ease;
        border-radius: 10px;
    }
    .card-statistic:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }
    .avatar {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        font-weight: 600;
    }
    .table-hover tbody tr {
        transition: background-color 0.15s;
    }
    .table-hover tbody tr:hover {
        background-color: #f8fafc;
    }
    .badge {
        padding: 6px 10px;
        font-weight: 500;
        border-radius: 6px;
    }
</style>

<?php include 'footer.php'; ?>