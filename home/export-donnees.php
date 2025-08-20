<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-primary mb-0">
                        <i class="ri-file-download-line me-2"></i>
                        Exportation des données
                    </h5>
                    <button class="btn btn-primary">
                        <i class="ri-download-line me-1"></i>
                        Lancer l'exportation
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Sélectionnez les données à exporter et les options de filtrage.
                    </p>
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <label class="form-label">Type de données</label>
                            <select class="form-select">
                                <option value="">Sélectionnez un type...</option>
                                <option value="patients">Patients</option>
                                <option value="appointments">Rendez-vous</option>
                                <option value="audit">Journal d'audit</option>
                                <option value="admissions">Admissions</option>
                                <option value="reports">Rapports cliniques</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="form-label">Période de temps</label>
                            <input type="text" class="form-control" placeholder="Sélectionnez une plage de dates">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="form-label">Format de fichier</label>
                            <select class="form-select">
                                <option value="csv">CSV (Comma Separated Values)</option>
                                <option value="pdf">PDF</option>
                                <option value="json">JSON</option>
                                <option value="xml">XML</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="exportSensitive">
                                <label class="form-check-label" for="exportSensitive">
                                    Inclure les données sensibles (nécessite une authentification supplémentaire)
                                </label>
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
                        <i class="ri-history-line me-2"></i>
                        Historique des exportations
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Date d'exportation</th>
                                    <th>Type de données</th>
                                    <th>Format</th>
                                    <th>Taille</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19/08/2025 14:10:00</td>
                                    <td>Patients</td>
                                    <td>PDF</td>
                                    <td>2.5 Mo</td>
                                    <td><span class="badge bg-success">Terminé</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19/08/2025 10:05:00</td>
                                    <td>Journal d'audit</td>
                                    <td>CSV</td>
                                    <td>52 Ko</td>
                                    <td><span class="badge bg-primary ">En cours...</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Annuler">
                                                <i class="ri-close-line"></i>
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

<?php include 'footer.php'; ?>