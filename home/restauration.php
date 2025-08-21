<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <!-- En-tête avec indicateurs clés -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-restaurant-line me-2"></i> Gestion de la Restauration
                    </h5>
                    <div>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newMenuModal">
                            <i class="ri-add-line me-1"></i> Nouveau menu
                        </button>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-restaurant-2-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">450</h3>
                                    <span class="text-muted">Repas servis aujourd'hui</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-user-heart-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">65</h3>
                                    <span class="text-muted">Régimes spéciaux</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-star-smile-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">92%</h3>
                                    <span class="text-muted">Satisfaction patient</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-calendar-event-line fs-3"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0">3</h3>
                                    <span class="text-muted">Menus planifiés</span>
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
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Type de repas</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Petit-déjeuner</option>
                                <option>Déjeuner</option>
                                <option>Dîner</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Type de régime</label>
                            <select class="form-select">
                                <option selected>Tous</option>
                                <option>Standard</option>
                                <option>Sans sel</option>
                                <option>Diabétique</option>
                                <option>Mixé</option>
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

        <!-- Tableau des menus -->
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="menusTable" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Repas</th>
                                    <th>Menu</th>
                                    <th>Régime</th>
                                    <th>Statut</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>22/11/2023</td>
                                    <td>Déjeuner</td>
                                    <td>Poulet rôti, purée de carottes, yaourt nature</td>
                                    <td>Standard</td>
                                    <td><span class="badge bg-success">Servi</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delMenu">
                                                <i class="ri-delete-bin-line"></i>
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
                                    <td>22/11/2023</td>
                                    <td>Déjeuner</td>
                                    <td>Poisson vapeur, purée de carottes, compote</td>
                                    <td>Sans sel</td>
                                    <td><span class="badge bg-success">Servi</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delMenu">
                                                <i class="ri-delete-bin-line"></i>
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
                                    <td>22/11/2023</td>
                                    <td>Dîner</td>
                                    <td>Soupe de légumes, jambon, fromage blanc</td>
                                    <td>Standard</td>
                                    <td><span class="badge bg-info">Planifié</span></td>
                                    <td>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#delMenu">
                                                <i class="ri-delete-bin-line"></i>
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

<!-- Modal Supprimer Menu -->
<div class="modal fade" id="delMenu" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce menu ?
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

<!-- Modal Nouveau Menu -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-add-line me-2"></i> Planifier un nouveau menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type de repas</label>
                            <select class="form-select">
                                <option selected disabled>Sélectionner un repas</option>
                                <option>Petit-déjeuner</option>
                                <option>Déjeuner</option>
                                <option>Dîner</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Description du menu</label>
                            <textarea class="form-control" rows="3" placeholder="Entrée, plat, dessert..."></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type de régime</label>
                            <select class="form-select">
                                <option selected>Standard</option>
                                <option>Sans sel</option>
                                <option>Diabétique</option>
                                <option>Mixé</option>
                                <option>Végétarien</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Allergènes</label>
                            <input type="text" class="form-control" placeholder="Ex: Gluten, lactose...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer le menu</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#menusTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
            },
            responsive: true,
            dom: '<"row"<"col-md-6"l><"col-md-6"f>>rtip',
        });
    });
</script>

