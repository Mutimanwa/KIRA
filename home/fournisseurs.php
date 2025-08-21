<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-success bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-building-line me-2"></i>
                        Gestion des Fournisseurs
                    </h5>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addSupplierModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un fournisseur
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Catalogue des fournisseurs et de leurs informations de contact.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-user-2-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Total fournisseurs</span>
                                    <h4 class="mb-0">45</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-file-contract-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Contrats actifs</span>
                                    <h4 class="mb-0">28</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-user-add-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux ce mois-ci</span>
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
                <div class="card-header bg-success bg-opacity-10">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-list-unordered me-2"></i>
                        Liste des Fournisseurs
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Nom de l'entreprise</th>
                                    <th>Contact</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Dernière commande</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MedSupply Inc.</td>
                                    <td>John Doe</td>
                                    <td>+1 (555) 123-4567</td>
                                    <td>contact@medsupply.com</td>
                                    <td>12/08/2025</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editSupplierModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteSupplierModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pharma-Corp</td>
                                    <td>Jane Smith</td>
                                    <td>+1 (555) 987-6543</td>
                                    <td>info@pharma-corp.net</td>
                                    <td>05/08/2025</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editSupplierModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteSupplierModal" title="Supprimer">
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

<div class="modal fade" id="addSupplierModal" tabindex="-1" aria-labelledby="addSupplierModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSupplierModalLabel">Ajouter un nouveau fournisseur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="supplierName" class="form-label">Nom de l'entreprise</label>
                            <input type="text" class="form-control" id="supplierName">
                        </div>
                        <div class="col-md-6">
                            <label for="contactPerson" class="form-label">Personne de contact</label>
                            <input type="text" class="form-control" id="contactPerson">
                        </div>
                        <div class="col-md-6">
                            <label for="supplierPhone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="supplierPhone">
                        </div>
                        <div class="col-md-6">
                            <label for="supplierEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="supplierEmail">
                        </div>
                        <div class="col-md-12">
                            <label for="supplierAddress" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="supplierAddress">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Enregistrer le fournisseur</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteSupplierModal" tabindex="-1" aria-labelledby="deleteSupplierModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSupplierModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce fournisseur ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>