<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- Outil de vérification -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-danger bg-opacity-10 border-0">
                    <h5 class="card-title mb-0 text-danger">
                        <i class="ri-alert-line me-2"></i> Vérification des Interactions Médicamenteuses
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Sélectionnez au moins deux médicaments pour vérifier les interactions potentielles.</p>
                    <div id="medication-selector">
                        <!-- Lignes de médicaments ajoutées dynamiquement ici -->
                    </div>
                    <div class="mt-3">
                        <button type="button" id="addMedication" class="btn btn-sm btn-outline-primary">
                            <i class="ri-add-line me-1"></i> Ajouter un médicament
                        </button>
                        <button type="button" id="checkInteractions" class="btn btn-danger">
                            <i class="ri-search-eye-line me-1"></i> Vérifier les interactions
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section des résultats (initialement cachée) -->
        <div class="col-12" id="results-section" style="display: none;">
            <div class="card shadow-sm border-0">
                <div class="card-header">
                    <h5 class="card-title">Résultats de l'analyse</h5>
                </div>
                <div class="card-body">
                    <!-- Résumé -->
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <i class="ri-error-warning-line fs-4 me-3"></i>
                        <div>
                            <h6 class="alert-heading">Interaction Modérée Détectée</h6>
                            Une ou plusieurs interactions potentielles ont été trouvées. Une surveillance est recommandée.
                        </div>
                    </div>

                    <!-- Détails des interactions -->
                    <h6 class="mt-4">Détails des interactions :</h6>
                    <div class="accordion" id="interactionsAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <strong>Aspirine</strong> + <strong>Warfarine</strong> <span class="badge bg-danger ms-2">Sévère</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#interactionsAccordion">
                                <div class="accordion-body">
                                    <strong>Risque:</strong> Augmentation du risque de saignement.
                                    <br>
                                    <strong>Mécanisme:</strong> L'aspirine inhibe la fonction plaquettaire, ce qui, combiné à l'effet anticoagulant de la warfarine, augmente considérablement le risque d'hémorragie.
                                    <br>
                                    <strong>Recommandation:</strong> Éviter l'association si possible. Si nécessaire, surveiller attentivement l'INR et les signes de saignement.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <strong>Lisinopril</strong> + <strong>Ibuprofène</strong> <span class="badge bg-warning text-dark ms-2">Modérée</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#interactionsAccordion">
                                <div class="accordion-body">
                                    <strong>Risque:</strong> Réduction de l'effet antihypertenseur du lisinopril et risque accru d'insuffisance rénale.
                                    <br>
                                    <strong>Mécanisme:</strong> Les AINS comme l'ibuprofène peuvent réduire la production de prostaglandines rénales, diminuant ainsi l'efficacité des IEC et augmentant le risque de néphrotoxicité.
                                    <br>
                                    <strong>Recommandation:</strong> Surveiller la pression artérielle et la fonction rénale. Utiliser la plus faible dose efficace d'ibuprofène pour la durée la plus courte possible.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        const medicationSelector = document.getElementById('medication-selector');
        const addMedicationButton = document.getElementById('addMedication');
        const checkInteractionsButton = document.getElementById('checkInteractions');
        const resultsSection = document.getElementById('results-section');
        let medCounter = 0;

        const addMedicationRow = () => {
            medCounter++;
            const newRow = document.createElement('div');
            newRow.classList.add('row', 'g-2', 'mb-2', 'medication-row', 'align-items-center');
            newRow.innerHTML = `
                <div class="col-md-11">
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-capsule-line"></i></span>
                        <input type="text" class="form-control" placeholder="Entrez le nom du médicament ${medCounter}">
                    </div>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-outline-danger w-100 remove-medication" title="Supprimer">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>
            `;
            medicationSelector.appendChild(newRow);
        };

        // Add event listener to the "Add" button
        addMedicationButton.addEventListener('click', addMedicationRow);

        // Add event listener for removing rows
        medicationSelector.addEventListener('click', function(e) {
            if (e.target.closest('.remove-medication')) {
                e.target.closest('.medication-row').remove();
            }
        });

        // Add event listener to the "Check" button
        checkInteractionsButton.addEventListener('click', function() {
            // For this demo, we'll just show the pre-written results.
            resultsSection.style.display = 'block';
            resultsSection.scrollIntoView({ behavior: 'smooth' });
        });

        // Add two initial rows for a better user experience
        addMedicationRow();
        addMedicationRow();
    });
</script>

