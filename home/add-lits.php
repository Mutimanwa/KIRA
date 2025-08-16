<?php include 'header.php'; ?>
<div class="app-body">
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex align-items-center justify-content-between">
                    <h5 class="card-title text-primary">
                        <i class="ri-add-line"></i>
                        Ajouter un nouveau lit
                    </h5>
                    <a href="gestion-lits.php" class="btn btn-outline-secondary">
                        <i class="ri-arrow-left-line"></i>
                        Retour
                    </a>
                </div>
                <div class="card-body">
                    <form action="process_lit.php" method="POST">
                        <div class="row gx-3">
                            <div class="col-xxl-4 col-lg-6 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Numéro du lit <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="numero_lit" required>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Chambre <span class="text-danger">*</span></label>
                                    <select class="form-select" name="chambre_id" required>
                                        <option value="">Sélectionner une chambre</option>
                                        <option value="1">Chambre 101 (Pédiatrie)</option>
                                        <option value="2">Chambre 205 (Chirurgie)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Statut <span class="text-danger">*</span></label>
                                    <select class="form-select" name="statut_id" required>
                                        <option value="">Sélectionner un statut</option>
                                        <option value="1">Disponible</option>
                                        <option value="2">Occupé</option>
                                        <option value="3">En nettoyage</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <a href="gestion-lits.php" class="btn btn-outline-secondary">
                                <i class="ri-close-line"></i> Annuler
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line"></i> Enregistrer le lit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>