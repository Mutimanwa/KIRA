<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-calendar-line me-2"></i>
                        Planning Général
                    </h5>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addShiftModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un quart de travail
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Visualisez et gérez le planning des équipes par jour et par service.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-user-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Personnel en service</span>
                                    <h4 class="mb-0">85</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Quarts à venir (24h)</span>
                                    <h4 class="mb-0">15</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-user-unfollow-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Absences aujourd'hui</span>
                                    <h4 class="mb-0">2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Liste des quarts de travail
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Nom Complet</th>
                                    <th>Rôle</th>
                                    <th>Service</th>
                                    <th>Date</th>
                                    <th>Heure de début</th>
                                    <th>Heure de fin</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Alex Johnson</td>
                                    <td>Médecin</td>
                                    <td>Cardiologie</td>
                                    <td>20/08/2025</td>
                                    <td>08:00</td>
                                    <td>16:00</td>
                                    <td><span class="badge bg-success">En service</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editShiftModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteShiftModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marie Leblanc</td>
                                    <td>Infirmière</td>
                                    <td>Pédiatrie</td>
                                    <td>20/08/2025</td>
                                    <td>14:00</td>
                                    <td>22:00</td>
                                    <td><span class="badge bg-warning text-dark">À venir</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editShiftModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteShiftModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
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

<div class="modal fade" id="addShiftModal" tabindex="-1" aria-labelledby="addShiftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addShiftModalLabel">Ajouter un nouveau quart de travail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="staffMember" class="form-label">Employé</label>
                            <input type="text" class="form-control" id="staffMember" placeholder="Rechercher un employé...">
                        </div>
                        <div class="col-md-6">
                            <label for="shiftDate" class="form-label">Date du quart</label>
                            <input type="date" class="form-control" id="shiftDate">
                        </div>
                        <div class="col-md-6">
                            <label for="startTime" class="form-label">Heure de début</label>
                            <input type="time" class="form-control" id="startTime">
                        </div>
                        <div class="col-md-6">
                            <label for="endTime" class="form-label">Heure de fin</label>
                            <input type="time" class="form-control" id="endTime">
                        </div>
                        <div class="col-md-12">
                            <label for="shiftNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="shiftNotes" rows="3" placeholder="Notes sur le quart de travail..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-info">Enregistrer le quart</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteShiftModal" tabindex="-1" aria-labelledby="deleteShiftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteShiftModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce quart de travail ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>