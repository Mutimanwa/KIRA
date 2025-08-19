<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-dark mb-0">
                        <i class="ri-user-unfollow-line me-2"></i>
                        Surveillance de la mortalité
                    </h5>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addDeathModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un nouveau cas de décès
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-dark bg-opacity-10 text-dark rounded-4 me-3">
                                    <i class="ri-heart-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Total des décès enregistrés</span>
                                    <h4 class="mb-0">48</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-calendar-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Décès (ce mois)</span>
                                    <h4 class="mb-0">2</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-close-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Taux de mortalité global</span>
                                    <h4 class="mb-0">2.4%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-line-chart-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Évolution des décès</span>
                                    <h4 class="mb-0">Stable</h4>
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
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-dark bg-opacity-10">
                    <h5 class="card-title text-dark mb-0">
                        <i class="ri-bar-chart-fill me-2"></i>
                        Tendance des décès par mois
                    </h5>
                </div>
                <div class="card-body text-center p-5">
                     <img src="https://i.imgur.com/rW28gKq.png" alt="Graphique de tendance des décès par mois" class="img-fluid rounded-3" style="max-height: 300px;">
                    <p class="text-muted mt-3 mb-0">
                        <small>Ce graphique peut être généré avec ApexCharts pour afficher le nombre de décès par mois.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark bg-opacity-10">
                    <h5 class="card-title text-dark mb-0">
                        <i class="ri-file-list-3-line me-2"></i>
                        Détails des cas de décès
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="mortalite-table">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Cause du décès</th>
                                    <th>Date du décès</th>
                                    <th>Heure du décès</th>
                                    <th>Service</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jane Doe</td>
                                    <td>Arrêt cardiaque</td>
                                    <td>19/08/2025</td>
                                    <td>10:30</td>
                                    <td>Urgence</td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir les détails">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peter Pan</td>
                                    <td>Insuffisance respiratoire</td>
                                    <td>18/08/2025</td>
                                    <td>22:15</td>
                                    <td>Pneumologie</td>
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

<div class="modal fade" id="addDeathModal" tabindex="-1" aria-labelledby="addDeathModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDeathModalLabel">Ajouter un nouveau cas de décès</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="patientName" class="form-label">Nom du patient</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Entrer le nom du patient">
                        </div>
                        <div class="col-sm-6">
                            <label for="causeOfDeath" class="form-label">Cause du décès</label>
                            <input type="text" class="form-control" id="causeOfDeath" placeholder="Cause du décès">
                        </div>
                        <div class="col-sm-6">
                            <label for="deathDate" class="form-label">Date du décès</label>
                            <input type="date" class="form-control" id="deathDate">
                        </div>
                        <div class="col-sm-6">
                            <label for="deathTime" class="form-label">Heure du décès</label>
                            <input type="time" class="form-control" id="deathTime">
                        </div>
                        <div class="col-sm-12">
                            <label for="service" class="form-label">Service concerné</label>
                            <select class="form-select" id="service">
                                <option>Urgence</option>
                                <option>Cardiologie</option>
                                <option>Pneumologie</option>
                                <option>Autres</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-dark">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>