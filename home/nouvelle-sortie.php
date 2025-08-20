<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-logout-box-line me-2"></i>
                        Enregistrer une Nouvelle Sortie
                    </h5>
                    <a href="patients-list.php" class="btn btn-outline-secondary">
                        <i class="ri-arrow-left-line me-1"></i>
                        Retour à la liste des patients
                    </a>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Veuillez remplir les informations concernant la sortie du patient.
                    </p>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="patientName" class="form-label">Nom du patient</label>
                                <input type="text" class="form-control" id="patientName" placeholder="Rechercher un patient...">
                            </div>
                            <div class="col-md-6">
                                <label for="patientID" class="form-label">ID du patient</label>
                                <input type="text" class="form-control" id="patientID" placeholder="ID généré automatiquement" disabled>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="dischargeDate" class="form-label">Date de sortie</label>
                                <input type="date" class="form-control" id="dischargeDate">
                            </div>
                            <div class="col-md-6">
                                <label for="dischargeTime" class="form-label">Heure de sortie</label>
                                <input type="time" class="form-control" id="dischargeTime">
                            </div>
                            <div class="col-md-12">
                                <label for="dischargeReason" class="form-label">Raison de la sortie</label>
                                <select class="form-select" id="dischargeReason">
                                    <option value="">Sélectionnez une raison...</option>
                                    <option>Guérison</option>
                                    <option>Transfert vers un autre établissement</option>
                                    <option>Sortie contre avis médical (SCAM)</option>
                                    <option>Décès</option>
                                    <option>Autre</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="dischargeSummary" class="form-label">Résumé médical de la sortie</label>
                                <textarea class="form-control" id="dischargeSummary" rows="5" placeholder="Saisir les observations finales, les résultats des traitements, etc."></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <h6><i class="ri-file-text-line me-2"></i>Instructions de suivi et ordonnances</h6>
                                <div id="followUpSection" class="border p-3 rounded-3">
                                    <div class="row g-3">
                                        <div class="col-md-5">
                                            <label for="medication" class="form-label">Médicament / Prescription</label>
                                            <input type="text" class="form-control" placeholder="Nom du médicament ou de l'instruction">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="instructions" class="form-label">Instructions</label>
                                            <input type="text" class="form-control" placeholder="Ex: 1 comprimé 2 fois par jour, RV avec le Dr X le 10/09">
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="button" class="btn btn-outline-danger w-100"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </div>
                                    <button id="button" type="button" class="btn btn-outline-secondary btn-sm mt-3" onclick="addFollowUpRow()">
                                        <i class="ri-add-line me-1"></i>
                                        Ajouter une ligne
                                    </button>
                                </div>
                            </div>
                            
                            <div class="col-12 text-end mt-4">
                                <a href="sortie-patient.php" type="button" class="btn btn-outline-secondary me-2">
                                    <i class="ri-close-line me-1"></i>
                                    Annuler
                                </a>
                                <a href="sortie-patient.php" type="submit" class="btn btn-primary">
                                    <i class="ri-check-line me-1"></i>
                                    Enregistrer la sortie
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function addFollowUpRow() {
        const section = document.getElementById('followUpSection');
        const newRow = document.createElement('div');
        newRow.className = 'row g-3 mt-3';
        newRow.innerHTML = `
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Nom du médicament ou de l'instruction">
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Ex: 1 comprimé 2 fois par jour, RV avec le Dr X le 10/09">
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="button" class="btn btn-outline-danger w-100" onclick="this.closest('.row').remove()"><i class="ri-delete-bin-line"></i></button>
            </div>
        `;
        // section.insertBefore(newRow, section.querySelector('button'));
        section.insertBefore(newRow , document.getElementById('button'));
    }
</script>

<?php include 'footer.php'; ?>