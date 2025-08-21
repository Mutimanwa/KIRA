<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-warning bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-warning mb-0">
                        <i class="ri-capsule-line me-2"></i>
                        Catalogue des Médicaments
                    </h5>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addMedicationModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un médicament
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Gestion complète des médicaments disponibles dans la pharmacie.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-list-check-2 fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Médicaments référencés</span>
                                    <h4 class="mb-0">210</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-refresh-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Médicaments génériques</span>
                                    <h4 class="mb-0">85</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-add-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux ajouts (mois)</span>
                                    <h4 class="mb-0">15</h4>
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
                <div class="card-header bg-warning bg-opacity-10">
                    <h5 class="card-title text-warning mb-0">
                        <i class="ri-list-ordered me-2"></i>
                        Liste des Médicaments
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Nom du médicament</th>
                                    <th>Forme pharmaceutique</th>
                                    <th>Dosage</th>
                                    <th>Prix unitaire</th>
                                    <th>Nom générique</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Doliprane</td>
                                    <td>Comprimé</td>
                                    <td>500mg</td>
                                    <td>€2.50</td>
                                    <td>Paracétamol</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editMedicationModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteMedicationModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Amoxicilline Mylan</td>
                                    <td>Gélule</td>
                                    <td>500mg</td>
                                    <td>€5.80</td>
                                    <td>Amoxicilline</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editMedicationModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteMedicationModal" title="Supprimer">
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

<div class="modal fade" id="addMedicationModal" tabindex="-1" aria-labelledby="addMedicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMedicationModalLabel">Ajouter un nouveau médicament</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="medicationName" class="form-label">Nom commercial</label>
                            <input type="text" class="form-control" id="medicationName">
                        </div>
                        <div class="col-md-6">
                            <label for="genericName" class="form-label">Nom générique</label>
                            <input type="text" class="form-control" id="genericName">
                        </div>
                        <div class="col-md-6">
                            <label for="form" class="form-label">Forme pharmaceutique</label>
                            <input type="text" class="form-control" id="form">
                        </div>
                        <div class="col-md-6">
                            <label for="dosage" class="form-label">Dosage</label>
                            <input type="text" class="form-control" id="dosage">
                        </div>
                        <div class="col-md-6">
                            <label for="unitPrice" class="form-label">Prix unitaire (€)</label>
                            <input type="number" class="form-control" id="unitPrice" step="0.01">
                        </div>
                        <div class="col-md-6">
                            <label for="stockQuantity" class="form-label">Quantité en stock</label>
                            <input type="number" class="form-control" id="stockQuantity">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">Enregistrer le médicament</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteMedicationModal" tabindex="-1" aria-labelledby="deleteMedicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMedicationModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce médicament du catalogue ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>