<?php include 'header.php' ?>
<link rel="stylesheet" href="../assets/css/custom.css">
<div class="app-body">
    <div class="row g-3">
        <!-- Carte principale améliorée -->
        <div class="col-12">
            <div class="card patient-portal-card">
                <!-- En-tête avec boutons d'action -->
                <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                    <div>
                        <h5 class="card-title mb-0">
                            <i class="ri-user-voice-line me-2"></i>Portail Patient
                        </h5>
                    </div>
                    <div class="portal-actions">
                        <button class="btn btn-sm btn-light">
                            <i class="ri-refresh-line"></i> Actualiser
                        </button>
                        <button class="btn btn-sm btn-light ms-2">
                            <i class="ri-printer-line"></i> Imprimer
                        </button>
                    </div>
                </div>

                <!-- Corps de carte réorganisé -->
                <div class="card-body p-0">
                    <!-- Navigation par onglets -->
                    <ul class="nav nav-tabs portal-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-tab">
                                <i class="ri-profile-line me-1"></i> Profil
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#rdv-tab">
                                <i class="ri-calendar-event-line me-1"></i> Rendez-vous
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#documents-tab">
                                <i class="ri-file-text-line me-1"></i> Documents
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#messages-tab">
                                <i class="ri-message-2-line me-1"></i> Messagerie
                            </button>
                        </li>
                    </ul>

                    <!-- Contenu des onglets -->
                    <div class="tab-content p-4">
                        <!-- Onglet Profil -->
                        <div class="tab-pane fade show active" id="profile-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="patient-avatar text-center mb-4">
                                        <img src="../assets/images/patient-avatar.png" class="rounded-circle" width="120" alt="Patient">
                                        <h5 class="mt-3 mb-1">Jean Dupont</h5>
                                        <p class="text-muted">ID: PAT-789456</p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="patient-info">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Date de naissance</label>
                                                <p class="form-control-static">15/03/1985</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Groupe sanguin</label>
                                                <p class="form-control-static">A+</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Téléphone</label>
                                                <p class="form-control-static">+33 6 12 34 56 78</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <p class="form-control-static">jean.dupont@example.com</p>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Adresse</label>
                                                <p class="form-control-static">123 Rue de la République, 75001 Paris</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Onglet Rendez-vous -->
                        <div class="tab-pane fade" id="rdv-tab" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-hover appointment-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Heure</th>
                                            <th>Médecin</th>
                                            <th>Spécialité</th>
                                            <th>Statut</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>15/06/2023</td>
                                            <td>14:30</td>
                                            <td>Dr. Martin</td>
                                            <td>Cardiologie</td>
                                            <td><span class="badge bg-success">Confirmé</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">Détails</button>
                                            </td>
                                        </tr>
                                        <!-- Plus de rendez-vous... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Onglet Documents -->
                        <div class="tab-pane fade" id="documents-tab" role="tabpanel">
                            <div class="document-grid">
                                <div class="document-card">
                                    <div class="document-icon">
                                        <i class="ri-file-pdf-line"></i>
                                    </div>
                                    <div class="document-info">
                                        <h6>Compte-rendu consultation</h6>
                                        <small class="text-muted">12/05/2023 - 250 Ko</small>
                                    </div>
                                    <div class="document-actions">
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="ri-download-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Plus de documents... -->
                            </div>
                        </div>

                        <!-- Onglet Messagerie -->
                        <div class="tab-pane fade" id="messages-tab" role="tabpanel">
                            <div class="message-container">
                                <div class="message-list">
                                    <div class="message-item unread">
                                        <div class="message-sender">Dr. Martin</div>
                                        <div class="message-preview">Résultats de vos analyses...</div>
                                        <div class="message-time">10:45</div>
                                    </div>
                                    <!-- Plus de messages... -->
                                </div>
                                <div class="message-view">
                                    <div class="message-header">
                                        <h6>Nouveau message</h6>
                                    </div>
                                    <div class="message-compose">
                                        <textarea class="form-control" rows="5" placeholder="Écrivez votre message..."></textarea>
                                        <button class="btn btn-primary mt-2">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pied de carte avec statistiques -->
                <div class="card-footer bg-light">
                    <div class="row text-center">
                        <div class="col-md-3 border-end">
                            <h5 class="mb-0">12</h5>
                            <small class="text-muted">Rendez-vous</small>
                        </div>
                        <div class="col-md-3 border-end">
                            <h5 class="mb-0">5</h5>
                            <small class="text-muted">Documents</small>
                        </div>
                        <div class="col-md-3 border-end">
                            <h5 class="mb-0">3</h5>
                            <small class="text-muted">Messages non lus</small>
                        </div>
                        <div class="col-md-3">
                            <h5 class="mb-0">2</h5>
                            <small class="text-muted">Ordonnances</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>