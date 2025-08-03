<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-hospital-line me-2"></i> Gestion des admissions
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-2">
                            <i class="ri-refresh-line"></i> Actualiser
                        </button>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newAdmissionModal">
                            <i class="ri-user-add-line me-1"></i> Nouvelle admission
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="border-start border-3 border-primary p-3 rounded-3">
                                <h6 class="text-muted">Admissions aujourd'hui</h6>
                                <h3 class="mb-0">12</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="border-start border-3 border-success p-3 rounded-3">
                                <h6 class="text-muted">En cours</h6>
                                <h3 class="mb-0">47</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="border-start border-3 border-warning p-3 rounded-3">
                                <h6 class="text-muted">En attente</h6>
                                <h3 class="mb-0">5</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="border-start border-3 border-info p-3 rounded-3">
                                <h6 class="text-muted">Lits disponibles</h6>
                                <h3 class="mb-0">18</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barre de contrôle -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Rechercher un patient...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Tous les services</option>
                                <option>Cardiologie</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Tous les statuts</option>
                                <option>En cours</option>
                                <option>Sortie prévue</option>
                                <option>Urgence</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">
                                <i class="ri-filter-line me-1"></i> Appliquer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des admissions -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>N° Admission</th>
                                    <th>Patient</th>
                                    <th>Entrée</th>
                                    <th>Service</th>
                                    <th>Lit</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#AD-2023-0042</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <small>15/06/2023</small><br>
                                        <small class="text-muted">14:30</small>
                                    </td>
                                    <td>Cardiologie</td>
                                    <td>Ch.201 Lit 2</td>
                                    <td>
                                        <span class="badge bg-success">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary rounded-circle">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success rounded-circle">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                            Affichage <span class="fw-semibold">1-10</span> sur <span class="fw-semibold">47</span>
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
    </div>
</div>

<!-- Modal Nouvelle Admission -->
<div class="modal fade" id="newAdmissionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-user-add-line me-2"></i> Nouvelle admission</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient</label>
                            <select class="form-select select2-search">
                                <option selected disabled>Rechercher un patient</option>
                                <option>Jean DUPONT (NISS: 12345678901)</option>
                                <option>Marie DURAND (NISS: 98765432109)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type d'admission</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner</option>
                                <option>Programmée</option>
                                <option>Urgence</option>
                                <option>Transfert</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un service</option>
                                <option>Cardiologie</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Médecin responsable</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un médecin</option>
                                <option>Dr. Sophie MARTIN</option>
                                <option>Dr. Alain DURAND</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Motif d'admission</label>
                            <textarea class="form-control" rows="2" placeholder="Décrire le motif clinique..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer l'admission</button>
            </div>
        </div>
    </div>
</div>

<style>

</style>

<?php include_once 'footer.php'; ?>