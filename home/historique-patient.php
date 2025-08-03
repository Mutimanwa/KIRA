<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- Header avec statistiques -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-history-line me-2"></i> Historique des patients
                    </h5>
                    <div class="d-flex gap-2">
                        <div class="search-box">
                            <input type="text" class="form-control form-control-sm" placeholder="Rechercher un patient...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="ri-filter-line me-1"></i> Filtres
                        </button>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-primary rounded-circle me-2" style="width: 10px; height: 10px;"></span>
                            <small>Consultations (1,248)</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success rounded-circle me-2" style="width: 10px; height: 10px;"></span>
                            <small>Hospitalisations (842)</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-warning rounded-circle me-2" style="width: 10px; height: 10px;"></span>
                            <small>Urgences (127)</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-info rounded-circle me-2" style="width: 10px; height: 10px;"></span>
                            <small>Examens (2,456)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="col-xl-8">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Patient</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Médecin</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">45 ans • N° dossier: 123456</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-success bg-opacity-10 text-success">Hospitalisation</span>
                                    </td>
                                    <td>
                                        <small class="text-muted">15/06/2023</small>
                                    </td>
                                    <td>Dr. Sophie MARTIN</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle">
                                                <i class="ri-download-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Plus d'éléments... -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <select class="form-select form-select-sm w-auto">
                                <option>10 résultats</option>
                                <option>25 résultats</option>
                                <option>50 résultats</option>
                            </select>
                        </div>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="ri-arrow-left-s-line"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="ri-arrow-right-s-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline détaillée -->
        <div class="col-xl-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-light border-0">
                    <h6 class="mb-0">Détails de l'historique</h6>
                </div>
                <div class="card-body pt-0">
                    <div class="timeline scroll350">
                        <div class="timeline-item">
                            <div class="timeline-badge bg-primary"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Hospitalisation</h6>
                                <small class="text-muted d-block mb-1">15/06/2023 • 14:30</small>
                                <p class="mb-0">Admission en cardiologie pour douleurs thoraciques</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge bg-success"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">ECG</h6>
                                <small class="text-muted d-block mb-1">15/06/2023 • 15:45</small>
                                <p class="mb-0">Résultats transmis au Dr. Martin</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge bg-info"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Bilan sanguin</h6>
                                <small class="text-muted d-block mb-1">16/06/2023 • 08:15</small>
                                <p class="mb-0">NFS, CRP, Troponine - Résultats normaux</p>
                            </div>
                        </div>
                         <div class="timeline-item">
                            <div class="timeline-badge bg-info"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Bilan sanguin</h6>
                                <small class="text-muted d-block mb-1">16/06/2023 • 08:15</small>
                                <p class="mb-0">NFS, CRP, Troponine - Résultats normaux</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .search-box {
        position: relative;
        width: 250px;
    }
    .search-icon {
        position: absolute;
        top: 50%;
        right: 12px;
        transform: translateY(-50%);
        font-size: 16px;
    }
    .timeline {
        position: relative;
        padding-left: 24px;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 11px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 20px;
    }
    .timeline-badge {
        position: absolute;
        left: -24px;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 3px solid white;
    }
    .timeline-content {
        padding: 8px 16px;
        background: #f8f9fa;
        border-radius: 6px;
    }
    .table-hover tbody tr {
        transition: all 0.2s;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.03) !important;
    }
</style>
<?php include_once 'footer.php'; ?>