<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-success bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-wallet-line me-2"></i>
                        Gestion de la Paie
                    </h5>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addPayrollModal">
                        <i class="ri-add-line me-1"></i>
                        Ajouter une fiche de paie
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Suivez et gérez les salaires, les fiches de paie et les primes du personnel.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                    <i class="ri-line-chart-fill fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Masse salariale (mois)</span>
                                    <h4 class="mb-0">€545,000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-info bg-opacity-10 text-info rounded-4 me-3">
                                    <i class="ri-file-text-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Fiches de paie générées</span>
                                    <h4 class="mb-0">210</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-4">
                            <div class="d-flex align-items-center p-3 border rounded-3">
                                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                                    <i class="ri-error-warning-line fs-3"></i>
                                </div>
                                <div>
                                    <span class="text-muted">Fiches en retard</span>
                                    <h4 class="mb-0">0</h4>
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
                <div class="card-header bg-success bg-opacity-10">
                    <h5 class="card-title text-success mb-0">
                        <i class="ri-file-list-3-line me-2"></i>
                        Historique des fiches de paie
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="basicExample">
                            <thead>
                                <tr>
                                    <th>Employé</th>
                                    <th>Mois</th>
                                    <th>Salaire Brut</th>
                                    <th>Salaire Net</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Alex Johnson</td>
                                    <td>Juillet 2025</td>
                                    <td>€4,500.00</td>
                                    <td>€3,800.00</td>
                                    <td><span class="badge bg-success">Payé</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-line"></i>
                                            </button>
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPayrollModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePayrollModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marie Leblanc</td>
                                    <td>Juillet 2025</td>
                                    <td>€2,800.00</td>
                                    <td>€2,350.00</td>
                                    <td><span class="badge bg-success">Payé</span></td>
                                    <td>
                                        <div class="d-inline-flex gap-1">
                                            <button class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger">
                                                <i class="ri-download-line"></i>
                                            </button>
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPayrollModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePayrollModal" title="Supprimer">
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

<div class="modal fade" id="addPayrollModal" tabindex="-1" aria-labelledby="addPayrollModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPayrollModalLabel">Ajouter une nouvelle fiche de paie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="employeeName" class="form-label">Nom de l'employé</label>
                            <input type="text" class="form-control" id="employeeName">
                        </div>
                        <div class="col-md-6">
                            <label for="payrollMonth" class="form-label">Mois de la paie</label>
                            <input type="month" class="form-control" id="payrollMonth">
                        </div>
                        <div class="col-md-6">
                            <label for="grossSalary" class="form-label">Salaire Brut</label>
                            <input type="number" class="form-control" id="grossSalary" step="0.01">
                        </div>
                        <div class="col-md-6">
                            <label for="netSalary" class="form-label">Salaire Net</label>
                            <input type="number" class="form-control" id="netSalary" step="0.01">
                        </div>
                        <div class="col-md-12">
                            <label for="deductions" class="form-label">Déductions / Primes</label>
                            <textarea class="form-control" id="deductions" rows="3" placeholder="Détails des déductions et primes..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Enregistrer la fiche</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deletePayrollModal" tabindex="-1" aria-labelledby="deletePayrollModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePayrollModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette fiche de paie ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>