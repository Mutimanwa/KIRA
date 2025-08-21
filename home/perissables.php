<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-danger bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-danger mb-0">
                        <i class="ri-calendar-todo-line me-2"></i>
                        Articles Périssables
                    </h5>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addPerishableModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un article périssable
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Surveillance des articles avec des dates de péremption imminentes ou passées.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Articles expirant (7j)</span>
                                    <h4 class="mb-0">8</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-error-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Articles expirés</span>
                                    <h4 class="mb-0">2</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-in-transit-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Stock périssable total</span>
                                    <h4 class="mb-0">210</h4>
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
                        <i class="ri-list-check-2 me-2"></i>
                        Liste des Articles Périssables
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Nom de l'article</th>
                                    <th>Quantité</th>
                                    <th>Date d'expiration</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vaccin anti-grippe</td>
                                    <td>50 flacons</td>
                                    <td>30/12/2025</td>
                                    <td><span class="badge bg-warning text-dark">Bientôt expiré</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPerishableModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePerishableModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Solution saline (poche)</td>
                                    <td>100 poches</td>
                                    <td>15/07/2025</td>
                                    <td><span class="badge bg-danger">Expiré</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPerishableModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePerishableModal" title="Supprimer">
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

<div class="modal fade" id="addPerishableModal" tabindex="-1" aria-labelledby="addPerishableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPerishableModalLabel">Ajouter un article périssable</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="perishableName" class="form-label">Nom de l'article</label>
                            <input type="text" class="form-control" id="perishableName">
                        </div>
                        <div class="col-md-6">
                            <label for="quantity" class="form-label">Quantité</label>
                            <input type="number" class="form-control" id="quantity">
                        </div>
                        <div class="col-md-12">
                            <label for="expiryDate" class="form-label">Date d'expiration</label>
                            <input type="date" class="form-control" id="expiryDate">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Enregistrer l'article</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deletePerishableModal" tabindex="-1" aria-labelledby="deletePerishableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePerishableModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cet article ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>