<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary bg-opacity-10">
                    <div class="d-flex justify-content-between align-item-center">
                        <h5 class="card-title text-primary mb-0">
                            <i class="ri-hotel-bed-line me-2"></i>
                            Gestion de chambres
                        </h5>
                        <a href="add-chambre.php" class="btn btn-primary btn-sm">
                            <i class="ri-add-line"></i>
                            Ajouter une chambre
                        </a>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-md-3 col-sm-6 ">
                            <div class="d-flex align-items-center border p-3 rounded">
                                <div class="icon-box lg text-primary rounded-4 bg-primary bg-opacity-10 me-3">
                                    <i class="ri-hotel-bed-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-0">78</h4>
                                    <span class="text-muted">Nombre total de chambres</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="d-flex align-items-center border p-3 rounded">
                                <div class="icon-box text-success bg-success lg rounded-4 bg-opacity-10 me-3">
                                    <i class="ri-checkbox-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h4>20</h4>
                                    <span class="text-muted">Lits disponibles</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="d-flex align-items-center border p-3 rounded">
                                <div class="icon-box text-info bg-info lg rounded-4 bg-opacity-10 me-3">
                                    <i class="ri-hotel-bed-line fs-3"></i>
                                </div>
                                <div>
                                    <h4>20</h4>
                                    <span class="text-muted">Lits occupés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="d-flex align-items-center border p-3 rounded">
                                <div class="icon-box text-warning bg-warning lg rounded-4 bg-opacity-10 me-3">
                                    <i class="ri-refresh-line fs-3"></i>
                                </div>
                                <div>
                                    <h4>20</h4>
                                    <span class="text-muted">Lits en nettoyage</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- liste de lits -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="basicExample" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>ID de la chambre</th>
                                    <th>Numéro de chambre</th>
                                    <th>Unité fonctionnelle</th>
                                    <th>Type</th>
                                    <th>Capacité en lits</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-semibold">CH-001</td>
                                    <td>101</td>
                                    <td>Urgence</td>
                                    <td><span class="badge bg-primary">Privée</span></td>
                                    <td>2</td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <a href="edit-chambre.php?id=1" class="btn btn-outline-success btn-sm"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Modifier la chambre">
                                                <i class="ri-edit-box-line"></i>
                                            </a>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#delRow-1">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold">CH-002</td>
                                    <td>205</td>
                                    <td>Chirurgie</td>
                                    <td><span class="badge bg-secondary">Double</span></td>
                                    <td>4</td>
                                    <td><span class="badge bg-danger">Occupée</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <a href="edit-chambre.php?id=2" class="btn btn-outline-success btn-sm">
                                                <i class="ri-edit-box-line"></i>
                                            </a>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#delRow-2">
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

<?php include 'footer.php'; ?>