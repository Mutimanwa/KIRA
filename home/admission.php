<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div
                    class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-hospital-line me-2"></i> Gestion des admissions
                    </h5>
                    <div>
                        <a href="add-admission.php" class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Ajouter une nouvelle admission">
                            <i class="ri-user-add-line me-1"></i> Nouvelle admission
                        </a>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-archive-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">12,093</h3>
                                    <span class="text-muted">Admissions aujourd'hui</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-hotel-bed-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">60</h3>
                                    <span class="text-muted">Patients hospitalisés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-heart-pulse-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">203</h3>
                                    <span class="text-muted">Lits disponibles</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">30</h3>
                                    <span class="text-muted">En attente d'admission</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des admissions -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="basicExample" class="table table-hover truncate m-0 align-middle">
                            <thead>
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
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal"
                                                data-bs-target="#delAdmission">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="add-admission.php" class="btn btn-outline-info btn-sm rounded" data-bs-toggle="tooltip"
                                             data-bs-emplacement="top" title="Réadmetre le patient">
                                                <i class="ri-user-follow-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Modifier l'admission"
                                                class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Voir les details" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- supprimer une admission -->
<div class="modal fade" id="delAdmission" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delAdmission">
                    Confirm
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vous ete sur de vouloir supprimer l'adimission
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">No</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Yes</button>
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
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
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
                            <textarea class="form-control" rows="2"
                                placeholder="Décrire le motif clinique..."></textarea>
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


<?php include_once 'footer.php'; ?>