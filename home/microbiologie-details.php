<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-info bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-info mb-0">
                        <i class="ri-microscope-line me-2"></i>
                        Détails de l'analyse: M-20250821-001
                    </h5>
                    <a href="microbiologie.php" class="btn btn-outline-info btn-sm">
                        <i class="ri-arrow-left-line me-1"></i>
                        Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-xl-8 col-lg-12">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-info bg-opacity-10">
                    <h6 class="card-subtitle text-info mb-0">
                        Informations sur les résultats
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm m-0">
                            <thead>
                                <tr class="table-secondary">
                                    <th>Nom du Test</th>
                                    <th>Résultat</th>
                                    <th>Unité</th>
                                    <th>Valeurs de Référence</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Culture bactérienne</td>
                                    <td>Résultat Positif</td>
                                    <td></td>
                                    <td>Résultat Négatif</td>
                                </tr>
                                <tr>
                                    <td>Germe identifié</td>
                                    <td class="text-danger fw-bold">Staphylococcus aureus</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sensibilité à la Pénicilline</td>
                                    <td>Sensible</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sensibilité à la Céphalosporine</td>
                                    <td>Résistant</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sensibilité à la Vancomycine</td>
                                    <td>Sensible</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        <h6>Notes et conclusions du biologiste :</h6>
                        <div class="border p-3 rounded-3 bg-light">
                            <p class="mb-0">
                                Le prélèvement a révélé la présence de Staphylococcus aureus. Les tests de sensibilité montrent une résistance à la Céphalosporine. Il est recommandé d'adapter le traitement en conséquence.
                            </p>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <button class="btn btn-success">
                            <i class="ri-file-check-line me-1"></i>
                            Valider le rapport
                        </button>
                        <button class="btn btn-primary ms-2">
                            <i class="ri-printer-line me-1"></i>
                            Imprimer le rapport
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-info bg-opacity-10">
                    <h6 class="card-subtitle text-info mb-0">
                        Informations générales
                    </h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="fw-bold">Patient :</h6>
                        <ul class="list-unstyled">
                            <li><strong>Nom:</strong> Martin</li>
                            <li><strong>Prénom:</strong> A.</li>
                            <li><strong>ID Patient:</strong> 12345</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h6 class="fw-bold">Détails de l'analyse :</h6>
                        <ul class="list-unstyled">
                            <li><strong>Numéro:</strong> M-20250821-001</li>
                            <li><strong>Type:</strong> Hémoculture</li>
                            <li><strong>Date d'échantillon:</strong> 21/08/2025</li>
                            <li><strong>Statut:</strong> <span class="badge bg-warning text-dark">En cours</span></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <h6 class="fw-bold">Médecin Demandeur :</h6>
                        <ul class="list-unstyled">
                            <li><strong>Nom:</strong> Dr. Dubois</li>
                            <li><strong>Service:</strong> Urgences</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>