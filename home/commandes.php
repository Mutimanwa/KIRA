<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-success bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-shopping-bag-line me-2"></i>
                        Gestion des Commandes
                    </h5>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addOrderModal">
                        <i class="ri-add-line me-1"></i>
                        Créer une nouvelle commande
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Suivez le statut des commandes en cours et l'historique des achats.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Commandes en attente</span>
                                    <h4 class="mb-0">12</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Commandes livrées (mois)</span>
                                    <h4 class="mb-0">45</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-money-euro-box-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Dépenses (mois)</span>
                                    <h4 class="mb-0">€22,500</h4>
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
                <div class="card-header bg-success bg-opacity-10">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-file-list-3-line me-2"></i>
                        Historique des Commandes
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Numéro de commande</th>
                                    <th>Fournisseur</th>
                                    <th>Date de commande</th>
                                    <th>Montant total</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ORD-20250820-001</td>
                                    <td>MedSupply Inc.</td>
                                    <td>20/08/2025</td>
                                    <td>€1,500.00</td>
                                    <td><span class="badge bg-warning text-dark">En attente</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ORD-20250815-005</td>
                                    <td>Pharma-Corp</td>
                                    <td>15/08/2025</td>
                                    <td>€3,250.00</td>
                                    <td><span class="badge bg-success">Livrée</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteOrderModal" title="Annuler">
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

<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrderModalLabel">Créer une nouvelle commande</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="supplierName" class="form-label">Fournisseur</label>
                            <input type="text" class="form-control" id="supplierName">
                        </div>
                        <div class="col-md-6">
                            <label for="orderDate" class="form-label">Date de commande</label>
                            <input type="date" class="form-control" id="orderDate">
                        </div>
                        <div class="col-md-12">
                            <label for="orderDetails" class="form-label">Détails de la commande</label>
                            <textarea class="form-control" id="orderDetails" rows="5" placeholder="Liste des articles, quantités et prix..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Envoyer la commande</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteOrderModalLabel">Annuler la commande</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir annuler cette commande ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger">Oui, annuler</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>