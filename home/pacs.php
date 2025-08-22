<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-dark mb-0">
                        <i class="ri-gallery-line me-2"></i>
                        Système d'archivage et de communication d'images
                    </h5>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#uploadImagesModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter des images
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Recherche et gestion des examens d'imagerie médicale.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-folder-open-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Examens archivés</span>
                                    <h4 class="mb-0">5,890</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                                    <i class="ri-upload-2-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Nouveaux ajouts (24h)</span>
                                    <h4 class="mb-0">15</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                                    <i class="ri-time-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Examens en attente</span>
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
                <div class="card-header bg-dark bg-opacity-10">
                    <h5 class="card-title text-dark mb-0">
                        <i class="ri-list-check-2 me-2"></i>
                        Catalogue des examens
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Numéro d'examen</th>
                                    <th>Patient</th>
                                    <th>Type</th>
                                    <th>Date d'examen</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IMG-20250821-001</td>
                                    <td>Jean D.</td>
                                    <td>IRM cérébrale</td>
                                    <td>21/08/2025</td>
                                    <td><span class="badge bg-success">Archivé</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewImageModal" title="Visualiser">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-2-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IMG-20250820-005</td>
                                    <td>Marie A.</td>
                                    <td>Radio du genou</td>
                                    <td>20/08/2025</td>
                                    <td><span class="badge bg-success">Archivé</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewImageModal" title="Visualiser">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-2-line"></i>
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

<div class="modal fade" id="uploadImagesModal" tabindex="-1" aria-labelledby="uploadImagesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadImagesModalLabel">Télécharger des images médicales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="examId" class="form-label">Numéro de l'examen</label>
                        <input type="text" class="form-control" id="examId" placeholder="Ex: IMG-20250821-001">
                    </div>
                    <div class="mb-3">
                        <label for="pacsFiles" class="form-label">Fichiers (DICOM, JPEG, etc.)</label>
                        <input class="form-control" type="file" id="pacsFiles" multiple>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-dark">Télécharger</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewImageModal" tabindex="-1" aria-labelledby="viewImageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewImageModalLabel">Visualisation de l'examen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="text-muted">Aperçu des images de l'examen...</p>
                <div class="border p-3 rounded-3" style="min-height: 400px; background-color: #f8f9fa;">
                    [Ici s'afficherait une visionneuse d'images DICOM ou JPEG]
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>