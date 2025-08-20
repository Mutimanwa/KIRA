<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-medal-line me-2"></i>
                        Gestion des Qualifications
                    </h5>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addQualificationModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter une qualification
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Suivi des qualifications professionnelles et des certifications du personnel.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Certifications valides</span>
                                    <h4 class="mb-0">98</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-calendar-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">À renouveler (mois)</span>
                                    <h4 class="mb-0">7</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-error-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Certifications expirées</span>
                                    <h4 class="mb-0">3</h4>
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
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Liste des Qualifications
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Employé</th>
                                    <th>Rôle</th>
                                    <th>Qualification</th>
                                    <th>Délivré par</th>
                                    <th>Date d'obtention</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Alex Johnson</td>
                                    <td>Médecin</td>
                                    <td>Chirurgie cardiaque avancée</td>
                                    <td>Collège des chirurgiens</td>
                                    <td>10/05/2018</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editQualificationModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteQualificationModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marie Leblanc</td>
                                    <td>Infirmière</td>
                                    <td>Certification en soins intensifs</td>
                                    <td>Association des infirmiers</td>
                                    <td>15/02/2022</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editQualificationModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteQualificationModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
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

<div class="modal fade" id="addQualificationModal" tabindex="-1" aria-labelledby="addQualificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQualificationModalLabel">Ajouter une nouvelle qualification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="employeeName" class="form-label">Nom de l'employé</label>
                            <input type="text" class="form-control" id="employeeName">
                        </div>
                        <div class="col-md-6">
                            <label for="qualification" class="form-label">Nom de la qualification</label>
                            <input type="text" class="form-control" id="qualification">
                        </div>
                        <div class="col-md-6">
                            <label for="issuedBy" class="form-label">Délivré par</label>
                            <input type="text" class="form-control" id="issuedBy">
                        </div>
                        <div class="col-md-6">
                            <label for="dateObtained" class="form-label">Date d'obtention</label>
                            <input type="date" class="form-control" id="dateObtained">
                        </div>
                        <div class="col-md-12">
                            <label for="qualificationFile" class="form-label">Certificat (fichier)</label>
                            <input class="form-control" type="file" id="qualificationFile">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-info">Enregistrer la qualification</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteQualificationModal" tabindex="-1" aria-labelledby="deleteQualificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteQualificationModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette qualification ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>