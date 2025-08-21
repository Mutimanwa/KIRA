<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-microscope-line me-2"></i>
                        Laboratoire de Microbiologie
                    </h5>
                    <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#addMicroModal">
                        <i class="ri-add-line me-1"></i>
                        Nouvelle analyse
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Suivi des cultures bactériennes, des tests de sensibilité et des échantillons.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Analyses en incubation</span>
                                    <h4 class="mb-0">8</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-bug-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Résultats positifs (7j)</span>
                                    <h4 class="mb-0">5</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-alarm-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Échantillons urgents</span>
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
                        Liste des analyses microbiologiques
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Numéro d'analyse</th>
                                    <th>Patient</th>
                                    <th>Type de test</th>
                                    <th>Date d'échantillon</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>M-20250821-001</td>
                                    <td>A. Martin</td>
                                    <td>Hémoculture</td>
                                    <td>21/08/2025</td>
                                    <td><span class="badge bg-warning text-dark">En cours</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <a href="microbiologie-details.php" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#resultsMicroModal" title="Saisir les résultats">
                                                <i class="ri-file-edit-line"></i>
                                            </a >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>M-20250819-005</td>
                                    <td>F. Giraud</td>
                                    <td>Antibiogramme</td>
                                    <td>19/08/2025</td>
                                    <td><span class="badge bg-success">Terminée</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <a href="microbiologie-details.php" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir le rapport">
                                                <i class="ri-file-line"></i>
                                            </a >
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

<div class="modal fade" id="addMicroModal" tabindex="-1" aria-labelledby="addMicroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMicroModalLabel">Nouvelle analyse microbiologique</h5>
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
                            <label for="analysisType" class="form-label">Type d'analyse</label>
                            <select class="form-select" id="analysisType">
                                <option>Hémoculture</option>
                                <option>Coproculture</option>
                                <option>Antibiogramme</option>
                                <option>Test de Gram</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="sampleDate" class="form-label">Date et heure de l'échantillon</label>
                            <input type="datetime-local" class="form-control" id="sampleDate">
                        </div>
                        <div class="col-md-6">
                            <label for="requestedBy" class="form-label">Demandé par</label>
                            <input type="text" class="form-control" id="requestedBy" placeholder="Médecin traitant...">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="notes" class="form-label">Notes supplémentaires</label>
                        <textarea class="form-control" id="notes" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-info text-white">Enregistrer l'analyse</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="resultsMicroModal" tabindex="-1" aria-labelledby="resultsMicroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultsMicroModalLabel">Saisie des résultats d'analyse microbiologique</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="resultsText" class="form-label">Résultats (texte libre)</label>
                        <textarea class="form-control" id="resultsText" rows="5" placeholder="Saisir les résultats de la culture, l'identification de la bactérie et l'antibiogramme..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="resultsFile" class="form-label">Télécharger un rapport de résultats</label>
                        <input class="form-control" type="file" id="resultsFile">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Valider et terminer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteMicroModal" tabindex="-1" aria-labelledby="deleteMicroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMicroModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette analyse ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>