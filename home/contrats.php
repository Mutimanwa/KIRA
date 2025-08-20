<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-file-user-line me-2"></i>
                        Gestion des Contrats
                    </h5>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addContractModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un contrat
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Suivi des contrats du personnel et des dates de renouvellement.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-file-text-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Contrats en cours</span>
                                    <h4 class="mb-0">210</h4>
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
                                    <h4 class="mb-0">15</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-file-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Contrats expirés</span>
                                    <h4 class="mb-0">2</h4>
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
                        <i class="ri-file-list-3-line me-2"></i>
                        Liste des Contrats
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Employé</th>
                                    <th>Service</th>
                                    <th>Type de contrat</th>
                                    <th>Date de début</th>
                                    <th>Date d'expiration</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Alex Johnson</td>
                                    <td>Cardiologie</td>
                                    <td>CDI</td>
                                    <td>01/01/2020</td>
                                    <td>Indéterminée</td>
                                    <td><span class="badge bg-success">Actif</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editContractModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteContractModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marie Leblanc</td>
                                    <td>Pédiatrie</td>
                                    <td>CDD</td>
                                    <td>01/06/2025</td>
                                    <td>31/12/2025</td>
                                    <td><span class="badge bg-warning text-dark">À renouveler</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editContractModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteContractModal" title="Supprimer">
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

<div class="modal fade" id="addContractModal" tabindex="-1" aria-labelledby="addContractModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContractModalLabel">Ajouter un nouveau contrat</h5>
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
                            <label for="contractType" class="form-label">Type de contrat</label>
                            <select class="form-select" id="contractType">
                                <option>CDI</option>
                                <option>CDD</option>
                                <option>Intérim</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="startDate" class="form-label">Date de début</label>
                            <input type="date" class="form-control" id="startDate">
                        </div>
                        <div class="col-md-6">
                            <label for="endDate" class="form-label">Date d'expiration</label>
                            <input type="date" class="form-control" id="endDate">
                        </div>
                        <div class="col-md-12">
                            <label for="contractFile" class="form-label">Fichier du contrat</label>
                            <input class="form-control" type="file" id="contractFile">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-info">Enregistrer le contrat</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteContractModal" tabindex="-1" aria-labelledby="deleteContractModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteContractModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce contrat ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>