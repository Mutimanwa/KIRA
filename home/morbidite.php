<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-pulse-line me-2"></i>
                        Surveillance de la morbidité
                    </h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCaseModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter un nouveau cas
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-list-check-2 fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Total des cas enregistrés</span>
                                    <h4 class="mb-0">5,342</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-virus-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux cas (ce mois)</span>
                                    <h4 class="mb-0">125</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-dark bg-opacity-10 text-dark rounded-4 me-3">
                                    <i class="ri-close-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Taux de mortalité</span>
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
                                    <span class="text-muted">Évolution des cas</span>
                                    <h4 class="mb-0">+0.5%</h4>
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
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-bar-chart-fill me-2"></i>
                        Tendance des cas de morbidité par mois
                    </h5>
                </div>
                <div class="card-body text-center p-5">
                     <img src="https://i.imgur.com/rW28gKq.png" alt="Graphique de tendance des cas de morbidité" class="img-fluid rounded-3" style="max-height: 300px;">
                    <p class="text-muted mt-3 mb-0">
                        <small>Ce graphique peut être généré avec ApexCharts pour afficher le nombre de cas par mois.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-file-list-3-line me-2"></i>
                        Détails des cas de morbidité
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="morbidity-table">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Diagnostic</th>
                                    <th>Date de détection</th>
                                    <th>Statut</th>
                                    <th>Service</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jane Doe</td>
                                    <td>Diabète</td>
                                    <td>18/08/2025</td>
                                    <td><span class="badge bg-primary">Critique</span></td>
                                    <td>Endocrinologie</td>
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
                                    <td>Hypertension</td>
                                    <td>17/08/2025</td>
                                    <td><span class="badge bg-warning text-dark">Stable</span></td>
                                    <td>Cardiologie</td>
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

<div class="modal fade" id="addCaseModal" tabindex="-1" aria-labelledby="addCaseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCaseModalLabel">Ajouter un nouveau cas de morbidité</h5>
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
                            <label for="diagnosis" class="form-label">Diagnostic</label>
                            <input type="text" class="form-control" id="diagnosis" placeholder="Entrer le diagnostic">
                        </div>
                        <div class="col-sm-6">
                            <label for="detectionDate" class="form-label">Date de détection</label>
                            <input type="date" class="form-control" id="detectionDate">
                        </div>
                        <div class="col-sm-6">
                            <label for="status" class="form-label">Statut</label>
                            <select class="form-select" id="status">
                                <option>Critique</option>
                                <option>Stable</option>
                                <option>En traitement</option>
                                <option>Résolu</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>