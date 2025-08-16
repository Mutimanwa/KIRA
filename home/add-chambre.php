<?php include 'header.php'; ?>
<div class="app-body">
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex align-items-center justify-content-between">
                    <h5 class="card-title text-primary">
                        <i class="ri-hotel-bed-line"></i>
                        Ajouter une nouvelle chambre
                    </h5>
                    <a href="gestion-chambres.php" class="btn btn-outline-secondary">
                        <i class="ri-arrow-left-line"></i>
                        Retour
                    </a>
                </div>
                <div class="card-body">
                    <form action="process_chambre.php" method="POST">
                        <div class="row gx-3">
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Numéro de chambre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="numero_chambre" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Service <span class="text-danger">*</span></label>
                                    <select class="form-select" name="service_id" required>
                                        <option value="">Sélectionner un service</option>
                                        <option value="1">Pédiatrie</option>
                                        <option value="2">Chirurgie</option>
                                        <option value="3">Général</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Type de chambre <span class="text-danger">*</span></label>
                                    <select class="form-select" name="type_chambre_id" required>
                                        <option value="">Sélectionner un type</option>
                                        <option value="1">Privée</option>
                                        <option value="2">Commune</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Capacité en lits <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="nombre_lits_max" min="1" required>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <a href="gestion-chambres.php" class="btn btn-outline-secondary">
                                <i class="ri-close-line"></i> Annuler
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line"></i> Enregistrer la chambre
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>