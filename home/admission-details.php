<?php include 'header.php'; ?>

<div class="app-body">
    <style>
        .patient-avatar {
            width: 80px;
            height: 80px;
            font-size: 2rem;
        }

        .info-card {
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #dee2e6;
        }

        .timeline-item {
            position: relative;
            padding-bottom: 20px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -30px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #0d6efd;
            border: 3px solid white;
        }
    </style>
    <!-- En-tête patient -->
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                    
                        <!-- Statistiques patient -->
                        <div class="d-flex align-items-center flex-wrap gap-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-account-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Carole</h4>
                                    <p class="m-0">Nom du patient</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-women-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Féminin</h4>
                                    <p class="m-0">Sexe</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-arrow-right-up-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">68</h4>
                                    <p class="m-0">Âge</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-contrast-drop-2-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">O+</h4>
                                    <p class="m-0">Groupe sanguin</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-secondary rounded-5 me-2">
                                    <i class="ri-stethoscope-line fs-3 text-body"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Dr. David</h4>
                                    <p class="m-0">Médecin traitant</p>
                                </div>
                            </div>
                        </div>
                        <!-- Fin des statistiques -->
                        <div class="text-end">
                            <span class="badge bg-success fs-6">ADMIS</span>
                            <div class="text-muted mt-2">Depuis: 15/06/2023 14:30</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Colonne gauche -->
        <div class="col-lg-8">
            <!-- Résumé admission -->
            <div class="card mb-4">
                <div class="card-header">
                <div class="text-center">
                        <div class="icon-box md bg-danger rounded-5 m-auto">
                            <i class="ri-file-text-line fs-3"></i>
                        </div>
                        <div class="mt-3">
                        <h3 class="card-title mb-0">Résumé de l'admission</h3>
        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6 class="text-muted">Motif d'admission</h6>
                                <p>Douleurs thoraciques intenses avec suspicion d'infarctus du myocarde</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Diagnostic principal</h6>
                                <p>Infarctus aigu du myocarde (I21.9)</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Type de séjour</h6>
                                <p>Hospitalisation complète</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6 class="text-muted">Médecin référent</h6>
                                <p>Dr. Sophie MARTIN</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Service</h6>
                                <p>Cardiologie</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Unité/Lit</h6>
                                <p>USIC - Chambre 201, Lit 2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chronologie -->
            <div class="card mb-4 ">
                <div class="card-header">
                    <div class="text-center py-3">
                        <div class="bg-primary icon-box md rounded-5 m-auto">
                             <i class="ri-time-line fs-3"></i>
                        </div>
                        <h3 class="card-title mb-0"> Chronologie</h3>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="timeline scroll350 ">
                        <div class="timeline-item">
                            <h5>Admission aux urgences</h5>
                            <p class="text-muted small">15/06/2023 14:30</p>
                            <p>Le patient présente des douleurs thoraciques intenses depuis 2 heures. ECG anormal.</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Transfert en cardiologie</h5>
                            <p class="text-muted small">15/06/2023 15:45</p>
                            <p>Confirmation du diagnostic d'infarctus. Transfert en USIC pour prise en charge.</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Angioplastie coronaire</h5>
                            <p class="text-muted small">15/06/2023 17:30</p>
                            <p>Intervention réalisée par le Dr. Martin. Pose d'un stent sur l'artère coronaire droite.
                            </p>
                        </div>
                        <div class="timeline-item">
                            <h5>Surveillance post-opératoire</h5>
                            <p class="text-muted small">15/06/2023 19:00 - En cours</p>
                            <p>État stable sous monitoring continu. Traitement par antiagrégants plaquettaires.</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Surveillance post-opératoire</h5>
                            <p class="text-muted small">15/06/2023 19:00 - En cours</p>
                            <p>État stable sous monitoring continu. Traitement par antiagrégants plaquettaires.</p>
                        </div><div class="timeline-item">
                            <h5>Surveillance post-opératoire</h5>
                            <p class="text-muted small">15/06/2023 19:00 - En cours</p>
                            <p>État stable sous monitoring continu. Traitement par antiagrégants plaquettaires.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ordonnances et prescriptions -->
            <div class="card mb-4">
                <div class="card-header ">
                    <div class="text-center py-3">
                        <div class="bg-primary icon-box md rounded-5 m-auto">
                             <i class="ri-file-list-3-line fs-3"></i>
                        </div>
                        <h3 class="card-title mb-0"> Prescriptions</h3>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                       <div></div>
                        <a href="prescriptions.php" class="btn  btn-light">
                            <i class="ri-add-line me-1"></i> Ajouter une prescription
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive border">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Médicament</th>
                                    <th>Posologie</th>
                                    <th>Prescripteur</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15/06/2023 15:00</td>
                                    <td>Aspirine 250mg</td>
                                    <td>1 cp matin</td>
                                    <td>Dr. Martin</td>
                                    <td><span class="badge bg-success">En cours</span></td>
                                </tr>
                                <tr>
                                    <td>15/06/2023 15:00</td>
                                    <td>Clopidogrel 75mg</td>
                                    <td>1 cp matin</td>
                                    <td>Dr. Martin</td>
                                    <td><span class="badge bg-success">En cours</span></td>
                                </tr>
                                <tr>
                                    <td>15/06/2023 18:00</td>
                                    <td>Morphine 1%</td>
                                    <td>5mg si douleur</td>
                                    <td>Dr. Martin</td>
                                    <td><span class="badge bg-warning text-dark">Terminé</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite -->
        <div class="col-lg-4">
            <!-- Actions rapides -->
            <div class="card mb-4">
                <div class="card-header">
                    <div class="text-center">
                        <div class="icon-box bg-warning md rounded-5 m-auto">
                            <i class="ri-flashlight-line fs-3"></i>
                        </div>
                        <h3 class="card-title mb-0 "></i> Actions</h3>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary">
                            <i class="ri-file-edit-line me-2"></i> Modifier l'admission
                        </button>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#dischargeModal">
                            <i class="ri-logout-circle-line me-2"></i> Enregistrer une sortie
                        </button>
                        <button class="btn btn-outline-success">
                            <i class="ri-file-text-line me-2"></i> Générer un rapport
                        </button>
                        <button class="btn btn-outline-info">
                            <i class="ri-printer-line me-2"></i> Imprimer le dossier
                        </button>
                    </div>
                </div>
            </div>

            <!-- Informations de sortie -->
            <div class="card mb-4">
                <div class="card-header">
                    <div class="text-center">
                        <div class="bg-success icon-box m-auto rounded-5 md">
                            <i class="ri-logout-circle-r-line fs-3"></i>
                        </div>
                        <h3 class="card-title mb-0"> Sortie programmée</h3>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <i class="ri-information-line me-2"></i> Date prévue: <strong>20/06/2023</strong>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Destination après sortie</label>
                        <select class="form-select">
                            <option>Domicile</option>
                            <option>Centre de rééducation</option>
                            <option>Autre établissement</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Commentaires</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <!-- Contacts -->
            <div class="card mb-4">
                <div class="card-header">
                    <div class="text-center">
                        <div class="icon-box bg-primary m-auto rounded-5 md">
                            <i class="ri-contacts-line fs-3"></i>
                        </div>
                        <h3 class="card-title mb-0"></i> Contacts</h3>
                    </div>
                    
                    
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6>Personne à contacter</h6>
                        <p>Marie DUPONT (Épouse)<br>
                            <i class="ri-phone-line"></i> 06 12 34 56 78
                        </p>
                    </div>
                    <div class="mb-3">
                        <h6>Médecin traitant</h6>
                        <p>Dr. Alain DURAND<br>
                            <i class="ri-phone-line"></i> 01 23 45 67 89
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de sortie -->
<div class="modal fade" id="dischargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ri-logout-circle-line me-2"></i> Enregistrer une sortie</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Date et heure de sortie</label>
                        <input type="datetime-local" class="form-control" value="<?= date('Y-m-d\TH:i') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mode de sortie</label>
                        <select class="form-select">
                            <option value="">Sélectionner...</option>
                            <option value="DOMICILE">Retour à domicile</option>
                            <option value="TRANSFERT">Transfert vers autre établissement</option>
                            <option value="DECES">Décès</option>
                            <option value="FUITE">Fuite</option>
                            <option value="AUTRE">Autre</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Destination</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Résumé médical</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Confirmer la sortie</button>
            </div>
        </div>
    </div>
</div>

</div>
<?php include 'footer.php'; ?>