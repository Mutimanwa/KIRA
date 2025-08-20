<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-moon-line me-2"></i>
                        Gestion des Gardes
                    </h5>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addGuardModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter une garde
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Planifiez et gérez les astreintes et les gardes du personnel médical et de soutien.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-calendar-event-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Gardes prévues (aujourd'hui)</span>
                                    <h4 class="mb-0">15</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-user-2-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Médecins de garde</span>
                                    <h4 class="mb-0">8</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-alarm-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Gardes à venir (24h)</span>
                                    <h4 class="mb-0">5</h4>
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
                        <i class="ri-list-unordered me-2"></i>
                        Liste des Gardes
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
                                    <th>Date de garde</th>
                                    <th>Heure de début</th>
                                    <th>Heure de fin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Alex Johnson</td>
                                    <td>Médecin</td>
                                    <td>Cardiologie</td>
                                    <td>20/08/2025</td>
                                    <td>18:00</td>
                                    <td>08:00 (+1)</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editGuardModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteGuardModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marie Leblanc</td>
                                    <td>Infirmière</td>
                                    <td>Pédiatrie</td>
                                    <td>21/08/2025</td>
                                    <td>18:00</td>
                                    <td>08:00 (+1)</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editGuardModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteGuardModal" title="Supprimer">
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

<div class="modal fade" id="addGuardModal" tabindex="-1" aria-labelledby="addGuardModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGuardModalLabel">Ajouter une nouvelle garde</h5>
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
                            <label for="guardDate" class="form-label">Date de la garde</label>
                            <input type="date" class="form-control" id="guardDate">
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
                            <label for="guardNotes" class="form-label">Notes</label>
                            <textarea class="form-control" id="guardNotes" rows="3" placeholder="Notes sur la garde..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-info">Enregistrer la garde</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteGuardModal" tabindex="-1" aria-labelledby="deleteGuardModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteGuardModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette garde ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>