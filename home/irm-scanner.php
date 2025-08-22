<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-scan-line me-2"></i>
                        Service IRM & Scanner
                    </h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addScanModal">
                        <i class="ri-add-line me-1"></i>
                        Planifier un examen
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Gestion et suivi des examens d'imagerie avancée.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-calendar-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Rendez-vous à venir (24h)</span>
                                    <h4 class="mb-0">5</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-check-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Terminés aujourd'hui</span>
                                    <h4 class="mb-0">12</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-file-search-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Rapports à valider</span>
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
                <div class="card-header bg-primary bg-opacity-10">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Liste des examens
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Type d'examen</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>J. Dupont</td>
                                    <td>IRM cérébrale</td>
                                    <td>21/08/2025 à 10h00</td>
                                    <td><span class="badge bg-warning text-dark">Planifié</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Démarrer l'examen">
                                                <i class="ri-play-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>S. Bernard</td>
                                    <td>Scanner abdominal</td>
                                    <td>20/08/2025 à 16h00</td>
                                    <td><span class="badge bg-success">Terminé</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#uploadReportModal" title="Télécharger rapport">
                                                <i class="ri-upload-cloud-2-line"></i>
                                            </button>
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

<div class="modal fade" id="addScanModal" tabindex="-1" aria-labelledby="addScanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addScanModalLabel">Planifier un nouvel examen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="patientName" class="form-label">Patient</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Rechercher un patient...">
                        </div>
                        <div class="col-md-6">
                            <label for="examType" class="form-label">Type d'examen</label>
                            <select class="form-select" id="examType">
                                <option>IRM</option>
                                <option>Scanner</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="examDate" class="form-label">Date et heure</label>
                            <input type="datetime-local" class="form-control" id="examDate">
                        </div>
                        <div class="col-md-6">
                            <label for="requestedBy" class="form-label">Demandé par</label>
                            <input type="text" class="form-control" id="requestedBy" placeholder="Médecin traitant...">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="examReason" class="form-label">Raison de l'examen</label>
                        <textarea class="form-control" id="examReason" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer le rendez-vous</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadReportModal" tabindex="-1" aria-labelledby="uploadReportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadReportModalLabel">Télécharger les images et le rapport</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="reportFile" class="form-label">Rapport PDF</label>
                        <input class="form-control" type="file" id="reportFile" accept=".pdf">
                    </div>
                    <div class="mb-3">
                        <label for="imagesFile" class="form-label">Images (DICOM, JPEG, etc.)</label>
                        <input class="form-control" type="file" id="imagesFile" multiple>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Télécharger</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>