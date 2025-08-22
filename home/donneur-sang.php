<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-danger bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-danger mb-0">
                        <i class="ri-user-add-line me-2"></i>
                        Gestion des Donneurs
                    </h5>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addDonorModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un nouveau donneur
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Catalogue des donneurs de sang et de leurs informations.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-team-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Total donneurs enregistrés</span>
                                    <h4 class="mb-0">2,500</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-user-star-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux ce mois-ci</span>
                                    <h4 class="mb-0">75</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-double-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Dons réussis (total)</span>
                                    <h4 class="mb-0">1,890</h4>
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
                <div class="card-header bg-danger bg-opacity-10">
                    <h5 class="card-title text-danger mb-0">
                        <i class="ri-list-unordered me-2"></i>
                        Liste des Donneurs
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Nom et prénom</th>
                                    <th>Groupe sanguin</th>
                                    <th>Dernier don</th>
                                    <th>Contact</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pierre Dubois</td>
                                    <td>A+</td>
                                    <td>20/07/2025</td>
                                    <td>pierre.d@email.com</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDonorModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteDonorModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sophie Lambert</td>
                                    <td>O-</td>
                                    <td>15/08/2025</td>
                                    <td>sophie.l@email.com</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDonorModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteDonorModal" title="Supprimer">
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

<div class="modal fade" id="addDonorModal" tabindex="-1" aria-labelledby="addDonorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDonorModalLabel">Ajouter un nouveau donneur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="donorName" class="form-label">Nom et prénom</label>
                            <input type="text" class="form-control" id="donorName">
                        </div>
                        <div class="col-md-6">
                            <label for="bloodGroup" class="form-label">Groupe sanguin</label>
                            <select class="form-select" id="bloodGroup">
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="donorPhone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="donorPhone">
                        </div>
                        <div class="col-md-6">
                            <label for="donorEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="donorEmail">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Enregistrer le donneur</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteDonorModal" tabindex="-1" aria-labelledby="deleteDonorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDonorModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce donneur ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
