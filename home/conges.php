<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-plane-line me-2"></i>
                        Gestion des Congés
                    </h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLeaveModal">
                        <i class="ri-add-line me-1"></i>
                        Soumettre une demande
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Consultez et gérez toutes les demandes de congés du personnel.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Demandes en attente</span>
                                    <h4 class="mb-0">8</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Congés approuvés (mois)</span>
                                    <h4 class="mb-0">21</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-close-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Congés refusés (mois)</span>
                                    <h4 class="mb-0">3</h4>
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
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Historique des demandes
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Employé</th>
                                    <th>Type de congé</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Alex Johnson</td>
                                    <td>Congé annuel</td>
                                    <td>01/09/2025</td>
                                    <td>15/09/2025</td>
                                    <td><span class="badge bg-warning text-dark">En attente</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#approveLeaveModal" title="Approuver">
                                                <i class="ri-check-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectLeaveModal" title="Refuser">
                                                <i class="ri-close-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marie Leblanc</td>
                                    <td>Congé maladie</td>
                                    <td>18/08/2025</td>
                                    <td>20/08/2025</td>
                                    <td><span class="badge bg-success">Approuvé</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                                <i class="ri-eye-line"></i>
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

<div class="modal fade" id="addLeaveModal" tabindex="-1" aria-labelledby="addLeaveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLeaveModalLabel">Soumettre une demande de congé</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="leaveType" class="form-label">Type de congé</label>
                            <select class="form-select" id="leaveType">
                                <option>Congé annuel</option>
                                <option>Congé maladie</option>
                                <option>Congé maternité/paternité</option>
                                <option>Congé sans solde</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="leaveReason" class="form-label">Motif (si applicable)</label>
                            <input type="text" class="form-control" id="leaveReason">
                        </div>
                        <div class="col-md-6">
                            <label for="leaveStartDate" class="form-label">Date de début</label>
                            <input type="date" class="form-control" id="leaveStartDate">
                        </div>
                        <div class="col-md-6">
                            <label for="leaveEndDate" class="form-label">Date de fin</label>
                            <input type="date" class="form-control" id="leaveEndDate">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="leaveNotes" class="form-label">Notes supplémentaires</label>
                        <textarea class="form-control" id="leaveNotes" rows="3" placeholder="Description détaillée de la demande..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Envoyer la demande</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="approveLeaveModal" tabindex="-1" aria-labelledby="approveLeaveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approveLeaveModalLabel">Approuver la demande</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir approuver cette demande de congé ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Approuver</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rejectLeaveModal" tabindex="-1" aria-labelledby="rejectLeaveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectLeaveModalLabel">Refuser la demande</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir refuser cette demande de congé ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Refuser</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>