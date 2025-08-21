<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-coupon-2-line me-2"></i> Gestion des Tickets de Maintenance
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newTicketModal">
                            <i class="ri-add-line me-1"></i> Nouveau Ticket
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-folder-open-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">22</h3>
                                    <span class="text-muted">Tickets Ouverts</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-progress-wrench-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">8</h3>
                                    <span class="text-muted">En Cours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-checkbox-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">145</h3>
                                    <span class="text-muted">Tickets Résolus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-fire-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">3</h3>
                                    <span class="text-muted">Tickets Urgents</span>
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
                                <option>Informatique</option>
                                <option>Bâtiments</option>
                                <option>Équipements Médicaux</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Priorité</label>
                            <select class="form-select">
                                <option selected>Toutes</option>
                                <option>Basse</option>
                                <option>Moyenne</option>
                                <option>Haute</option>
                                <option>Urgente</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Ouvert</option>
                                <option>En cours</option>
                                <option>Résolu</option>
                                <option>Clos</option>
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

        <!-- Tableau des tickets -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="ticketsTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Ticket #</th>
                                    <th>Sujet</th>
                                    <th>Service</th>
                                    <th>Priorité</th>
                                    <th>Statut</th>
                                    <th>Date</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TICK-00256</td>
                                    <td>Problème de connexion réseau au 2ème étage</td>
                                    <td>Informatique</td>
                                    <td><span class="badge bg-danger">Urgente</span></td>
                                    <td><span class="badge bg-info">En cours</span></td>
                                    <td>22/11/2023</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TICK-00255</td>
                                    <td>Climatiseur en panne - Chambre 304</td>
                                    <td>Bâtiments</td>
                                    <td><span class="badge bg-warning text-dark">Haute</span></td>
                                    <td><span class="badge bg-secondary">Ouvert</span></td>
                                    <td>22/11/2023</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails" class="btn btn-sm btn-outline-primary rounded">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TICK-00254</td>
                                    <td>Écran du moniteur cardiaque fissuré</td>
                                    <td>Équipements Médicaux</td>
                                    <td><span class="badge bg-info">Moyenne</span></td>
                                    <td><span class="badge bg-success">Résolu</span></td>
                                    <td>21/11/2023</td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
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

<!-- Modal Nouveau Ticket -->
<div class="modal fade" id="newTicketModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Créer un nouveau ticket</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Sujet</label>
                            <input type="text" class="form-control" placeholder="Sujet concis du problème">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service concerné</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un service</option>
                                <option>Informatique</option>
                                <option>Bâtiments</option>
                                <option>Équipements Médicaux</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Priorité</label>
                            <select class="form-select">
                                <option>Basse</option>
                                <option selected>Moyenne</option>
                                <option>Haute</option>
                                <option>Urgente</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description détaillée</label>
                            <textarea class="form-control" rows="4" placeholder="Décrivez le problème en détail, incluant la localisation, les personnes concernées, etc."></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Pièce jointe (photo, capture d'écran...)</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Soumettre le ticket</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#ticketsTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>

