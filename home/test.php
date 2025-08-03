
<!--  -->
<div class="app-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">
                        Gestion des Admissions
                    </h5>
                    <a href="add-admission.php" class="btn btn-primary ms-auto">
                        <i class="ri-add-line"></i> Nouvelle admission
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <p class="h5 mb-4">Liste des patients actuellement admis dans l'établissement</p>
                    </div>
                    <div class="table-responsive">
                        <table id="basicExample" class="table table-hover truncate m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>ID Admission</th>
                                    <th>Patient</th>
                                    <th>Date Admission</th>
                                    <th>Service</th>
                                    <th>Lit</th>
                                    <th>Médecin</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ADM-2023-0025</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title ">
                                                    <img src="../assets/images/user.png"
                                                        class="img-shadow img-2x rounded-5 me-1"
                                                        alt="Medical Admin Template">
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jean DUPONT</h6>
                                                <small class="text-muted">N° dossier: 123456</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>15/06/2023 14:30</td>
                                    <td>Cardiologie</td>
                                    <td>Chambre 201 - Lit 2</td>
                                    <td>Dr. Sophie MARTIN</td>
                                    <td>
                                        <span class="badge bg-success">EN COURS</span>
                                    </td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#dischargeModal" data-admission-id="25">
                                                <i class="ri-logout-circle-line" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Sortie patient"></i>
                                            </button>
                                            <a href="edit-admission.php" class="btn btn-outline-success btn-sm"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Modifier l'admission">
                                                <i class="ri-edit-box-line"></i>
                                            </a>
                                            <a href="admission-details.php" class="btn btn-outline-info btn-sm"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Détails complets">
                                                <i class="ri-file-list-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#ADM-2023-0024</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-title bg-warning rounded-5 ">MA</span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Marie AUBERT</h6>
                                                <small class="text-muted">N° dossier: 123457</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>14/06/2023 09:15</td>
                                    <td>Pédiatrie</td>
                                    <td>Chambre 105 - Lit 1</td>
                                    <td>Dr. Pierre LEROY</td>
                                    <td>
                                        <span class="badge bg-secondary">TERMINÉ</span>
                                    </td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-secondary btn-sm" disabled>
                                                <i class="ri-logout-circle-line"></i>
                                            </button>
                                            <a href="edit-admission.php?id=24" class="btn btn-outline-success btn-sm">
                                                <i class="ri-edit-box-line"></i>
                                            </a>
                                            <a href="admission-details.php?id=24" class="btn btn-outline-info btn-sm">
                                                <i class="ri-file-list-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal pour la sortie du patient -->
            <div class="modal fade" id="dischargeModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Enregistrer une sortie</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="dischargeForm">
                                <input type="hidden" id="admissionId" name="admission_id">
                                <div class="mb-3">
                                    <label for="dischargeDate" class="form-label">Date de sortie</label>
                                    <input type="datetime-local" class="form-control" id="dischargeDate"
                                        name="discharge_date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="dischargeType" class="form-label">Mode de sortie</label>
                                    <select class="form-select" id="dischargeType" name="discharge_type" required>
                                        <option value="">Sélectionner...</option>
                                        <option value="DOMICILE">Retour à domicile</option>
                                        <option value="TRANSFERT_ETABLISSEMENT">Transfert vers autre établissement
                                        </option>
                                        <option value="DECES">Décès</option>
                                        <option value="FUITE">Fuite</option>
                                        <option value="AUTRE">Autre</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="dischargeSummary" class="form-label">Résumé médical</label>
                                    <textarea class="form-control" id="dischargeSummary" name="discharge_summary"
                                        rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary" id="confirmDischarge">Enregistrer la
                                sortie</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Delete Row -->
        <div class="modal fade" id="delRow" tabindex="-1" aria-labelledby="delRowLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delRowLabel">
                            Confirm
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete the doctor from list?
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                aria-label="Close">No</button>
                            <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- liste de patient -->

<div class="app-body"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Portail Patient</h5>
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    </div>
</div>