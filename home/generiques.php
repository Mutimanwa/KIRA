<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-warning bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-warning mb-0">
                        <i class="ri-flask-line me-2"></i>
                        Médicaments Génériques
                    </h5>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addGenericModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un générique
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Catalogue des noms génériques et de leurs équivalents commerciaux.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-bookmark-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Génériques référencés</span>
                                    <h4 class="mb-0">85</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-exchange-box-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Équivalents commerciaux</span>
                                    <h4 class="mb-0">150</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-add-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux génériques (mois)</span>
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
                <div class="card-header bg-warning bg-opacity-10">
                    <h5 class="card-title text-warning mb-0">
                        <i class="ri-list-unordered me-2"></i>
                        Liste des Noms Génériques
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Nom générique</th>
                                    <th>Famille</th>
                                    <th>Exemples de noms commerciaux</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Paracétamol</td>
                                    <td>Analgésique</td>
                                    <td>Doliprane, Efferalgan</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editGenericModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteGenericModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Amoxicilline</td>
                                    <td>Antibiotique</td>
                                    <td>Amoxicilline Mylan, Clamoxyl</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editGenericModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteGenericModal" title="Supprimer">
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

<div class="modal fade" id="addGenericModal" tabindex="-1" aria-labelledby="addGenericModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGenericModalLabel">Ajouter un nouveau nom générique</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="genericName" class="form-label">Nom générique</label>
                            <input type="text" class="form-control" id="genericName">
                        </div>
                        <div class="col-md-6">
                            <label for="genericFamily" class="form-label">Famille thérapeutique</label>
                            <input type="text" class="form-control" id="genericFamily">
                        </div>
                        <div class="col-md-12">
                            <label for="commercialExamples" class="form-label">Exemples de noms commerciaux</label>
                            <textarea class="form-control" id="commercialExamples" rows="3" placeholder="Saisir les noms commerciaux séparés par des virgules..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">Enregistrer le générique</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteGenericModal" tabindex="-1" aria-labelledby="deleteGenericModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteGenericModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce nom générique ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>