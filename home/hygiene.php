<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-hand-sanitizer-line me-2"></i> Hygiène Hospitalière
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newHygieneModal">
                            <i class="ri-add-line me-1"></i> Signaler un incident
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-percent-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">98%</h3>
                                    <span class="text-muted">Conformité lavage mains</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-checkbox-multiple-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">32</h3>
                                    <span class="text-muted">Contrôles ce mois-ci</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-error-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">4</h3>
                                    <span class="text-muted">Incidents signalés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-tools-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">2</h3>
                                    <span class="text-muted">Actions correctives</span>
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
                            <label class="form-label">Service</label>
                            <select class="form-select">
                                <option selected>Tous les services</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                                <option>Réanimation</option>
                                <option>Cuisine</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Type d'événement</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Contrôle de routine</option>
                                <option>Incident signalé</option>
                                <option>Prélèvement de surface</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Résultat</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Conforme</option>
                                <option>Non-conforme</option>
                                <option>Action requise</option>
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

        <!-- Tableau des contrôles/incidents -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="hygieneTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Référence</th>
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th>Description</th>
                                    <th>Résultat</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HYG-2023-112</td>
                                    <td>22/11/2023</td>
                                    <td>Chirurgie - Bloc 2</td>
                                    <td>Contrôle de routine des surfaces</td>
                                    <td><span class="badge bg-success">Conforme</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir le rapport" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HYG-2023-111</td>
                                    <td>21/11/2023</td>
                                    <td>Cuisine</td>
                                    <td>Incident : non-respect de la chaîne du froid</td>
                                    <td><span class="badge bg-danger">Non-conforme</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir le rapport" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HYG-2023-110</td>
                                    <td>20/11/2023</td>
                                    <td>Urgences</td>
                                    <td>Audit lavage des mains</td>
                                    <td><span class="badge bg-warning text-dark">Action requise</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir le rapport" class="btn btn-sm btn-outline-primary rounded">
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

<!-- Modal Nouvel Incident/Contrôle -->
<div class="modal fade" id="newHygieneModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Signaler un incident ou un contrôle d'hygiène</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Type d'événement</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un type</option>
                                <option>Incident</option>
                                <option>Contrôle de routine</option>
                                <option>Prélèvement</option>
                                <option>Audit</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date et heure</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service concerné</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un service</option>
                                <option>Urgences</option>
                                <option>Chirurgie</option>
                                <option>Cuisine</option>
                                <option>Blanchisserie</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Signalé par</label>
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description de l'événement</label>
                            <textarea class="form-control" rows="3" placeholder="Décrivez précisément l'incident ou le contrôle..."></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Actions immédiates prises (si applicable)</label>
                            <textarea class="form-control" rows="2" placeholder="Décrivez les premières mesures..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#hygieneTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>

