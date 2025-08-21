<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-file-list-3-line me-2"></i> Gestion des Prescriptions
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newPrescriptionModal">
                            <i class="ri-add-line me-1"></i> Nouvelle prescription
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-file-add-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">72</h3>
                                    <span class="text-muted">Prescriptions (jour)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">15</h3>
                                    <span class="text-muted">En attente validation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-double-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">57</h3>
                                    <span class="text-muted">Délivrées (jour)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-shield-check-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">99.8%</h3>
                                    <span class="text-muted">Taux de conformité</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Patient</label>
                            <input type="text" class="form-control" placeholder="Nom ou N° dossier...">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Médecin prescripteur</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Dr. Sophie Martin</option>
                                <option>Dr. Alain Durand</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>En attente</option>
                                <option>Validée</option>
                                <option>Délivrée</option>
                                <option>Annulée</option>
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100">
                                <i class="ri-filter-3-line me-1"></i> Filtrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des prescriptions -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="prescriptionsTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>N° Prescription</th>
                                    <th>Patient</th>
                                    <th>Prescripteur</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PRES-2023-0451</td>
                                    <td>Jean Dupont</td>
                                    <td>Dr. Sophie Martin</td>
                                    <td>22/11/2023</td>
                                    <td><span class="badge bg-success">Délivrée</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#cancelPrescription">
                                                <i class="ri-close-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PRES-2023-0450</td>
                                    <td>Marie Durand</td>
                                    <td>Dr. Alain Durand</td>
                                    <td>22/11/2023</td>
                                    <td><span class="badge bg-warning text-dark">En attente</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#cancelPrescription">
                                                <i class="ri-close-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
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

<!-- Modal Annuler Prescription -->
<div class="modal fade" id="cancelPrescription" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir annuler cette prescription ?
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Non</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Oui, annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nouvelle Prescription -->
<div class="modal fade" id="newPrescriptionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Nouvelle prescription</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient</label>
                            <select class="form-select">
                                <option selected disabled>Rechercher un patient...</option>
                                <option>Jean Dupont (ID: 12345)</option>
                                <option>Marie Durand (ID: 67890)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date de prescription</label>
                            <input type="date" class="form-control" value="<?= date('Y-m-d') ?>">
                        </div>
                    </div>
                    <hr>
                    <h6>Médicaments</h6>
                    <div id="medicationLines">
                        <!-- Lignes de médicaments ajoutées dynamiquement ici -->
                    </div>
                    <button type="button" id="addLine" class="btn btn-sm btn-outline-primary mt-2">
                        <i class="ri-add-line me-1"></i> Ajouter une ligne
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer la prescription</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        // Initialisation de la DataTable
        $('#prescriptionsTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });

        // Ajout dynamique de lignes de médicaments
        const addLineButton = document.getElementById('addLine');
        const medicationLinesContainer = document.getElementById('medicationLines');

        const addMedicationLine = () => {
            const newRow = document.createElement('div');
            newRow.classList.add('row', 'g-3', 'mb-2', 'medication-row');
            newRow.innerHTML = `
                <div class="col-md-5">
                    <input type="text" class="form-control form-control-sm" placeholder="Médicament">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-sm" placeholder="Posologie">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control form-control-sm" placeholder="Durée">
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <button type="button" class="btn btn-sm btn-outline-danger remove-line">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>
            `;
            medicationLinesContainer.appendChild(newRow);
        };

        addLineButton.addEventListener('click', addMedicationLine);

        // Ajouter une première ligne au chargement de la modale
        $('#newPrescriptionModal').on('shown.bs.modal', function () {
            if(medicationLinesContainer.children.length === 0) {
                addMedicationLine();
            }
        });

        // Suppression de ligne
        medicationLinesContainer.addEventListener('click', function(e) {
            if (e.target.closest('.remove-line')) {
                e.target.closest('.medication-row').remove();
            }
        });
    });
</script>

