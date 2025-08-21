<?php include_once 'header.php'; ?>
<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-test-tube-line me-2"></i> Résultats de Laboratoire
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-2">
                            <i class="ri-download-line me-1"></i> Exporter
                        </button>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newLabRequestModal">
                            <i class="ri-add-line me-1"></i> Nouvelle demande
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-file-list-3-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">142</h3>
                                    <span class="text-muted">Demandes aujourd'hui</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-checkbox-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">89</h3>
                                    <span class="text-muted">Résultats validés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">38</h3>
                                    <span class="text-muted">En attente</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-alert-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">15</h3>
                                    <span class="text-muted">Anomalies détectées</span>
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
                            <select class="form-select">
                                <option selected>Tous les patients</option>
                                <option>Jean DUPONT</option>
                                <option>Marie DURAND</option>
                                <option>Pierre MARTIN</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Type d'analyse</label>
                            <select class="form-select">
                                <option selected>Tous types</option>
                                <option>Hématologie</option>
                                <option>Biochimie</option>
                                <option>Microbiologie</option>
                                <option>Immunologie</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>En attente</option>
                                <option>En cours</option>
                                <option>Validé</option>
                                <option>Urgent</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Période</label>
                            <select class="form-select">
                                <option selected>Aujourd'hui</option>
                                <option>Cette semaine</option>
                                <option>Ce mois</option>
                                <option>Personnalisée</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des résultats de laboratoire -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="labResultsTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>N° Demande</th>
                                    <th>Patient</th>
                                    <th>Type d'analyse</th>
                                    <th>Date prélèvement</th>
                                    <th>Prescripteur</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#LAB-2023-0876</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-primary rounded">JD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">68 ans • NISS: 12345678901</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Hématologie - NFS</td>
                                    <td>
                                        <small>15/11/2023</small><br>
                                        <small class="text-muted">09:15</small>
                                    </td>
                                    <td>Dr. Sophie MARTIN</td>
                                    <td>
                                        <span class="badge bg-success">Validé</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delLabResult">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Imprimer" class="btn btn-sm btn-outline-info rounded">
                                                <i class="ri-printer-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les résultats" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#LAB-2023-0877</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-success rounded">MD</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Marie DURAND</h6>
                                                <small class="text-muted">42 ans • NISS: 98765432109</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Biochimie - Glycémie</td>
                                    <td>
                                        <small>15/11/2023</small><br>
                                        <small class="text-muted">10:30</small>
                                    </td>
                                    <td>Dr. Alain DURAND</td>
                                    <td>
                                        <span class="badge bg-warning">En cours</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delLabResult">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Imprimer" class="btn btn-sm btn-outline-info rounded">
                                                <i class="ri-printer-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les résultats" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#LAB-2023-0878</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-info rounded">PM</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Pierre MARTIN</h6>
                                                <small class="text-muted">55 ans • NISS: 45678912345</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Microbiologie - ECBU</td>
                                    <td>
                                        <small>14/11/2023</small><br>
                                        <small class="text-muted">14:20</small>
                                    </td>
                                    <td>Dr. Sophie MARTIN</td>
                                    <td>
                                        <span class="badge bg-danger">Anomalie</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delLabResult">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Imprimer" class="btn btn-sm btn-outline-info rounded">
                                                <i class="ri-printer-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les résultats" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-semibold">#LAB-2023-0879</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-warning rounded">CL</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Claire LEROY</h6>
                                                <small class="text-muted">29 ans • NISS: 78912345678</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Immunologie - Sérologie</td>
                                    <td>
                                        <small>14/11/2023</small><br>
                                        <small class="text-muted">16:45</small>
                                    </td>
                                    <td>Dr. Alain DURAND</td>
                                    <td>
                                        <span class="badge bg-success">Validé</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delLabResult">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Imprimer" class="btn btn-sm btn-outline-info rounded">
                                                <i class="ri-printer-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier" class="btn btn-sm btn-outline-success rounded">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les résultats" class="btn btn-sm btn-outline-primary rounded">
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

<!-- Modal Supprimer Résultat -->
<div class="modal fade" id="delLabResult" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce résultat de laboratoire ?
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Non</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Oui</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nouvelle Demande Labo -->
<div class="modal fade" id="newLabRequestModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Nouvelle demande de laboratoire</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient</label>
                            <select class="form-select select2-search">
                                <option selected disabled>Rechercher un patient</option>
                                <option>Jean DUPONT (NISS: 12345678901)</option>
                                <option>Marie DURAND (NISS: 98765432109)</option>
                                <option>Pierre MARTIN (NISS: 45678912345)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Prescripteur</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner</option>
                                <option>Dr. Sophie MARTIN</option>
                                <option>Dr. Alain DURAND</option>
                                <option>Dr. Michel LEROY</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type d'analyse</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner</option>
                                <option>Hématologie</option>
                                <option>Biochimie</option>
                                <option>Microbiologie</option>
                                <option>Immunologie</option>
                                <option>Hormonologie</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Analyse spécifique</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner</option>
                                <option>NFS (Numération Formule Sanguine)</option>
                                <option>Glycémie</option>
                                <option>Créatinine</option>
                                <option>ECBU</option>
                                <option>PCR</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date de prélèvement</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Priorité</label>
                            <select class="form-select">
                                <option>Normale</option>
                                <option>Urgente</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Commentaires</label>
                            <textarea class="form-control" rows="2" placeholder="Commentaires éventuels..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer la demande</button>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#labResultsTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"B><"col-md-6"f>>rtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>