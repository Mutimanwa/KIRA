<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <!-- En-tête avec titre et actions -->
                <div class="card-header bg-white border-0 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">
                            <i class="ri-search-eye-line me-2 text-primary"></i> Recherche Avancée des Patients
                        </h5>
                        <button class="btn btn-sm btn-outline-secondary" id="resetFilters">
                            <i class="ri-restart-line me-1"></i> Réinitialiser
                        </button>
                    </div>
                </div>

                <!-- Formulaire de recherche -->
                <div class="card-body">
                    <form id="advancedSearchForm">
                        <div class="row g-3">
                            <!-- 1ère ligne -->
                            <div class="col-md-4">
                                <label class="form-label">Nom complet</label>
                                <input type="text" class="form-control" placeholder="Nom ou prénom">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">N° dossier</label>
                                <input type="text" class="form-control" placeholder="ID patient">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Date de naissance</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" placeholder="JJ/MM/AAAA">
                                    <span class="input-group-text"><i class="ri-calendar-line"></i></span>
                                </div>
                            </div>

                            <!-- 2ème ligne -->
                            <div class="col-md-3">
                                <label class="form-label">Genre</label>
                                <select class="form-select">
                                    <option value="" selected>Tous</option>
                                    <option>Masculin</option>
                                    <option>Féminin</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Groupe sanguin</label>
                                <select class="form-select">
                                    <option value="" selected>Tous</option>
                                    <option>A+</option>
                                    <option>B+</option>
                                    <option>AB+</option>
                                    <option>O+</option>
                                    <option>A-</option>
                                    <option>B-</option>
                                    <option>AB-</option>
                                    <option>O-</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Service</label>
                                <select class="form-select">
                                    <option value="" selected>Tous</option>
                                    <option>Cardiologie</option>
                                    <option>Pédiatrie</option>
                                    <option>Urgences</option>
                                    <option>Chirurgie</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Statut</label>
                                <select class="form-select">
                                    <option value="" selected>Tous</option>
                                    <option>Actif</option>
                                    <option>Inactif</option>
                                    <option>En attente</option>
                                </select>
                            </div>

                            <!-- 3ème ligne - Plage de dates -->
                            <div class="col-md-6">
                                <label class="form-label">Plage de dates</label>
                                <div class="input-daterange input-group">
                                    <input type="date" class="form-control" placeholder="Début">
                                    <span class="input-group-text">à</span>
                                    <input type="date" class="form-control" placeholder="Fin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Médecin traitant</label>
                                <select class="form-select select2-search">
                                    <option value="" selected>Tous</option>
                                    <option>Dr. Sophie Martin</option>
                                    <option>Dr. Alain Durand</option>
                                    <option>Dr. Jean Petit</option>
                                </select>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2 mt-3">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="ri-download-line me-1"></i> Exporter
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-search-line me-1"></i> Rechercher
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Résultats de recherche -->
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th width="50"></th>
                                    <th>Patient</th>
                                    <th>N° Dossier</th>
                                    <th>Âge</th>
                                    <th>Genre</th>
                                    <th>Groupe Sanguin</th>
                                    <th>Dernière visite</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Résultat 1 -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean Dupont</h6>
                                                <small class="text-muted">jean.dupont@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#PAT-2023-0042</td>
                                    <td>45 ans</td>
                                    <td>Masculin</td>
                                    <td>A+</td>
                                    <td>15/06/2023</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary btn-icon">
                                                <i class="ri-file-download-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Résultat 2 -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean Dupont</h6>
                                                <small class="text-muted">jean.dupont@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#PAT-2023-0042</td>
                                    <td>45 ans</td>
                                    <td>Masculin</td>
                                    <td>A+</td>
                                    <td>15/06/2023</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary btn-icon">
                                                <i class="ri-file-download-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Résultat 3 -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean Dupont</h6>
                                                <small class="text-muted">jean.dupont@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#PAT-2023-0042</td>
                                    <td>45 ans</td>
                                    <td>Masculin</td>
                                    <td>A+</td>
                                    <td>15/06/2023</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary btn-icon">
                                                <i class="ri-file-download-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Résultat 4 -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean Dupont</h6>
                                                <small class="text-muted">jean.dupont@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#PAT-2023-0042</td>
                                    <td>45 ans</td>
                                    <td>Masculin</td>
                                    <td>A+</td>
                                    <td>15/06/2023</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary btn-icon">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary btn-icon">
                                                <i class="ri-file-download-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Plus de résultats... -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center py-3">
                    <div class="text-muted small">
                        Résultats <span class="fw-semibold">1-5</span> sur <span class="fw-semibold">27</span>
                    </div>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">
                                    <i class="ri-arrow-left-s-line"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles personnalisés */
    .card {
        border-radius: 0.75rem;
    }
    .avatar {
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    .btn-icon {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50% !important;
    }
    .table-hover tbody tr {
        transition: all 0.2s;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.03) !important;
    }
    .input-daterange .input-group-text {
        background: transparent;
    }
    .select2-search {
        width: 100% !important;
    }
</style>

<script>
    // Initialisation des plugins
    document.addEventListener('DOMContentLoaded', function() {
        // Initialiser le datepicker
        $('.input-daterange').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            autoclose: true
        });

        // Initialiser Select2
        $('.select2-search').select2({
            placeholder: "Sélectionner...",
            allowClear: true
        });

        // Réinitialiser les filtres
        document.getElementById('resetFilters').addEventListener('click', function() {
            document.getElementById('advancedSearchForm').reset();
            $('.select2-search').val(null).trigger('change');
        });
    });
</script>

<?php include 'footer.php'; ?>