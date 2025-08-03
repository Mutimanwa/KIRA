<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <!-- En-tête avec actions -->
                <div class="card-header bg-white border-0 d-flex flex-wrap justify-content-between align-items-center py-3">
                    <h5 class="card-title mb-0 fw-semibold">
                        <i class="ri-team-line me-2 text-primary"></i> Liste des patients
                    </h5>
                    <div class=" d-flex gap-2">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ri-search-line"></i></span>
                            <input type="text" class="form-control" id="abc7" placeholder="Patients ..">
                        </div>
                       
                        <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#newPatientModal">
                              <i class="ri-user-add-line"></i> Nouveau
                        </button>
                    </div>
                </div>

                <!-- Corps du tableau -->
                <div class="card-body px-0 py-2">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th width="50" class="ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </th>
                                    <th>Patient</th>
                                    <th>N° Dossier</th>
                                    <th>Âge</th>
                                    <th>Genre</th>
                                    <th>Dernière visite</th>
                                    <th>Statut</th>
                                    <th class="text-end pe-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Patient 1 -->
                                <tr class="patient-row" >
                                    <td class="ps-3">
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
                                    <td>15/06/2023</td>
                                    <td>
                                        <span class="badge bg-success bg-opacity-10 text-success">Actif</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2 pe-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle btn-icon">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle btn-icon">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Patient 2 -->
                                <tr class="patient-row" >
                                    <td class="ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <span class="avatar-title bg-pink rounded-circle">MD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Marie Durand</h6>
                                                <small class="text-muted">marie.durand@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#PAT-2023-0105</td>
                                    <td>32 ans</td>
                                    <td>Féminin</td>
                                    <td>10/06/2023</td>
                                    <td>
                                        <span class="badge bg-warning bg-opacity-10 text-warning">En attente</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2 pe-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle btn-icon">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle btn-icon">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pied de tableau -->
                <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center py-2">
                    <div class="text-muted small">
                        Affichage <span class="fw-semibold">1-10</span> sur <span class="fw-semibold">124</span> patients
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

<!-- Modal Nouveau Patient -->
<div class="modal fade" id="newPatientModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-user-add-line me-2"></i> Nouveau patient</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nom complet</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date de naissance</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Genre</label>
                            <select class="form-select" required>
                                <option value="">Sélectionner...</option>
                                <option>Masculin</option>
                                <option>Féminin</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Adresse email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Adresse</label>
                            <textarea class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<style>

    .search-box {
        position: relative;
        width: 240px;
    }
    .search-icon {
        position: absolute;
        top: 50%;
        right: 12px;
        transform: translateY(-50%);
    }
</style>

<?php include 'footer.php'; ?>