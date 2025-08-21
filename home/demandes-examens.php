<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-test-tube-line me-2"></i> Demandes d'Examens de Laboratoire
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newRequestModal">
                            <i class="ri-add-line me-1"></i> Nouvelle demande
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
                                    <h3 class="mb-0">125</h3>
                                    <span class="text-muted">Demandes (jour)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">32</h3>
                                    <span class="text-muted">En attente</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-double-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">93</h3>
                                    <span class="text-muted">Résultats rendus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-alert-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">8</h3>
                                    <span class="text-muted">Urgentes</span>
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
                            <label class="form-label">Médecin demandeur</label>
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
                                <option>Prélèvement effectué</option>
                                <option>En cours d'analyse</option>
                                <option>Terminé</option>
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

        <!-- Tableau des demandes -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="requestsTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>N° Demande</th>
                                    <th>Patient</th>
                                    <th>Demandeur</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>LAB-2023-1152</td>
                                    <td>Jean Dupont</td>
                                    <td>Dr. Sophie Martin</td>
                                    <td>22/11/2023</td>
                                    <td><span class="badge bg-success">Terminé</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les résultats" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>LAB-2023-1151</td>
                                    <td>Marie Durand</td>
                                    <td>Dr. Alain Durand</td>
                                    <td>22/11/2023</td>
                                    <td><span class="badge bg-info">En cours d'analyse</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les résultats" class="btn btn-sm btn-outline-primary rounded disabled">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>LAB-2023-1150</td>
                                    <td>Pierre Petit</td>
                                    <td>Dr. Sophie Martin</td>
                                    <td>21/11/2023</td>
                                    <td><span class="badge bg-warning text-dark">En attente</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les résultats" class="btn btn-sm btn-outline-primary rounded disabled">
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

<!-- Modal Nouvelle Demande -->
<div class="modal fade" id="newRequestModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Nouvelle demande d'examen</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient</label>
                            <select class="form-select">
                                <option selected disabled>Rechercher un patient...</option>
                                <option>Jean Dupont (ID: 12345)</option>
                                <option>Marie Durand (ID: 67890)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date de la demande</label>
                            <input type="date" class="form-control" value="<?= date('Y-m-d') ?>">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Contexte clinique / Motif</label>
                            <textarea class="form-control" rows="2" placeholder="Renseignements cliniques pertinents..."></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="urgentCheck">
                                <label class="form-check-label" for="urgentCheck">
                                    Demande urgente
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6>Examens demandés</h6>
                    <div class="row">
                        <!-- Catégorie Hématologie -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Hématologie</div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="nfs">
                                        <label class="form-check-label" for="nfs">NFS Plaquettes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vs">
                                        <label class="form-check-label" for="vs">Vitesse de sédimentation (VS)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="tp">
                                        <label class="form-check-label" for="tp">TP, TCA, Fibrinogène</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Catégorie Biochimie -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Biochimie</div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="iono">
                                        <label class="form-check-label" for="iono">Ionogramme sanguin</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="uree">
                                        <label class="form-check-label" for="uree">Urée, Créatinine</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="glycemie">
                                        <label class="form-check-label" for="glycemie">Glycémie à jeun</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Catégorie Immunologie -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Immunologie / Sérologie</div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="crp">
                                        <label class="form-check-label" for="crp">Protéine C-Réactive (CRP)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vih">
                                        <label class="form-check-label" for="vih">Sérologie VIH</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="hepatiteB">
                                        <label class="form-check-label" for="hepatiteB">Sérologie Hépatite B</label>
                                    </div>
                                </div>
                            </div>
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

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#requestsTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>


