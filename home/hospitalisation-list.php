<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10 text-primary">
                    <h5 class="card-tilte">
                        <i class="ri-hotel-bed-line"></i>
                        List des hospitalisations
                    </h5>
                </div>
                <div class="card-footer">
                    <table id="roomList" class="table truncate m-0 align-middle">
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
                                <td>CH-001</td>
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
                                <td>CH-002</td>
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

<?php include 'footer.php';