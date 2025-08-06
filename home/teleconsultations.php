<?php include 'header.php'; ?>

<div class="app-body teleconsultation-module">
    <!-- Section Médecins Disponibles -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-light-primary border-0 py-3">
                    <h5 class="mb-0 fw-bold">
                        <i class="ri-team-line me-2"></i> Médecins disponibles en temps réel
                    </h5>
                    <small class="text-muted">Connecté maintenant (<?= date('H:i') ?>)</small>
                </div>
                <div class="card-body pt-0">
                    <!-- Carrousel amélioré -->
                    <div class="doctors-carousel owl-carousel" id="availableDoctors">
                        <!-- Les médecins seront chargés dynamiquement via AJAX -->
                        <div class="doctor-card">
                        <div class="position-relative">
                            <img src="../assets/images/patient4.png" class="doctor-avatar" alt="">
                            <span class="doctor-status"></span>
                        </div>
                        <h6 class="mb-1"></h6>
                        <small class="text-muted d-block">Cardiologue</small>
                        <button class="btn btn-sm btn-primary mt-2 select-doctor" data-id="1">
                            <i class="ri-user-add-line me-1"></i> Choisir
                        </button>
                    </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-sm btn-outline-primary" id="refreshDoctors">
                            <i class="ri-refresh-line me-1"></i> Actualiser la liste
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Colonne Gauche : Symptômes et Démarrer la consultation -->
        <div class="col-lg-7">
            <div class="card consultation-card h-100">
                <div class="card-header bg-white border-0 py-3">
                    <h3 class="card-title text-center mb-0">
                        <i class="ri-stethoscope-line fs-2 text-primary me-2"></i> 
                        <span class="d-inline-block animate-typing" data-text="Décrivez vos symptômes|Sélectionnez une spécialité|Préparez votre consultation"></span>
                    </h3>
                </div>
                
                <div class="card-body">
                    <!-- Sélecteur de symptômes amélioré -->
                    <div class="symptoms-selector mb-4">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold mb-0">Symptômes principaux</h6>
                            <a href="#" class="text-primary small" data-bs-toggle="modal" data-bs-target="#symptomsHelp">
                                <i class="ri-information-line me-1"></i> Comment décrire mes symptômes?
                            </a>
                        </div>
                        
                        <div class="symptoms-tags mb-3" id="selectedSymptoms">
                            <!-- Tags des symptômes sélectionnés apparaîtront ici -->
                            <div class="empty-state">
                                <i class="ri-arrow-up-line d-block text-muted mb-2"></i>
                                <span class="text-muted">Sélectionnez vos symptômes ci-dessous</span>
                            </div>
                        </div>
                        
                        <div class="symptoms-grid">
                            <button type="button" class="symptom-btn" data-category="general">
                                <i class="ri-asterisk fs-4 text-success me-2"></i> Général
                            </button>
                            <button type="button" class="symptom-btn" data-category="cardio">
                                <i class="ri-heart-line fs-4 text-danger me-2"></i> Cardiaque
                            </button>
                            <!-- Ajoutez d'autres boutons de symptômes ici -->
                        </div>
                    </div>
                    
                    <!-- Zone de description libre -->
                    <div class="mb-4">
                        <label for="symptomDetails" class="form-label fw-semibold">Décrivez en détail :</label>
                        <textarea class="form-control" id="symptomDetails" rows="3" 
                                  placeholder="Ex: Douleur aiguë au côté droit depuis 2 jours, fièvre à 38.5°C..."></textarea>
                        <div class="form-text">Décrivez l'intensité, la durée et les facteurs aggravants/soulageants</div>
                    </div>
                    
                    <!-- Boutons d'action -->
                    <div class="d-flex justify-content-between align-items-center border-top pt-3">
                        <button class="btn btn-outline-secondary" id="saveForLater">
                            <i class="ri-save-line me-1"></i> Sauvegarder
                        </button>
                        <button class="btn btn-primary px-4" id="startConsultation" disabled>
                            <i class="ri-vidicon-line me-1"></i> Démarrer la consultation
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Colonne Droite : Chat et Vidéo -->
        <div class="col-lg-5">
            <div class="card consultation-chat h-100">
                <div class="card-header border-bottom bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="avatar-status me-3">
                            <img src="../assets/images/user2.png" class="avatar rounded-circle" width="40" height="40" alt="Dr. Smith">
                            <span class="status-indicator "></span>
                        </div>
                        <div>
                            <h6 class="mb-0">Dr. Grace Smith</h6>
                            <small class="text-muted">Cardiologue - En ligne</small>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-transparent rounded-circle" type="button" data-bs-toggle="dropdown">
                            <i class="ri-more-2-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="ri-user-line me-2"></i> Profil du médecin</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ri-file-text-line me-2"></i> Dossier médical</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="ri-close-circle-line me-2"></i> Annuler la consultation</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Conteneur Vidéo/Chat -->
                <div class="consultation-container">
                    <!-- État initial : En attente de connexion -->
                    <div class="consultation-waiting text-center py-5">
                        <div class="waiting-icon mb-3">
                            <i class="ri-user-search-line fs-1 text-muted"></i>
                        </div>
                        <h5 class="mb-2">En attente de connexion</h5>
                        <p class="text-muted small mb-4">Votre consultation commencera automatiquement lorsque le médecin sera disponible</p>
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    
                    <!-- État actif (masqué par défaut) -->
                    <div class="consultation-active d-none">
                        <!-- Conteneur vidéo -->
                        <div class="video-container mb-3">
                            <div class="video-wrapper ratio ratio-16x9 bg-dark rounded">
                                <!-- Flux vidéo sera injecté ici -->
                                <div class="video-placeholder d-flex flex-column justify-content-center align-items-center text-white">
                                    <i class="ri-camera-off-line fs-1 mb-2"></i>
                                    <span>Caméra désactivée</span>
                                </div>
                                <div class="video-controls">
                                    <button class="btn btn-sm btn-light rounded-circle">
                                        <i class="ri-mic-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light rounded-circle">
                                        <i class="ri-camera-line"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger rounded-circle">
                                        <i class="ri-phone-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Chat intégré -->
                        <div class="chat-container">
                            <div class="chat-messages" id="consultationChat">
                                <!-- Messages seront chargés ici -->
                            </div>
                            <div class="chat-input input-group">
                                <input type="text" class="form-control" placeholder="Écrivez votre message...">
                                <button class="btn btn-primary" type="button">
                                    <i class="ri-send-plane-2-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<!-- Modal Aide Symptômes -->
<div class="modal fade" id="symptomsHelp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="ri-information-line text-primary me-2"></i> Comment décrire ses symptômes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <h6 class="fw-semibold"><i class="ri-checkbox-circle-fill text-success me-2"></i> Localisation</h6>
                        <p class="small text-muted">Précisez où se situe la douleur/inconfort (ex: "douleur au côté droit de l'abdomen")</p>
                    </li>
                    <li class="mb-3">
                        <h6 class="fw-semibold"><i class="ri-checkbox-circle-fill text-success me-2"></i> Intensité</h6>
                        <p class="small text-muted">Sur une échelle de 1 à 10, comment évaluez-vous votre douleur?</p>
                    </li>
                    <li class="mb-3">
                        <h6 class="fw-semibold"><i class="ri-checkbox-circle-fill text-success me-2"></i> Durée</h6>
                        <p class="small text-muted">Depuis combien de temps ces symptômes persistent-ils?</p>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">J'ai compris</button>
            </div>
        </div>
    </div>
</div>


<!-- Scripts JavaScript -->
<script>
$(document).ready(function() {
    // Initialisation du carrousel
    $('.doctors-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        responsive: {
            0: { items: 2 },
            576: { items: 3 },
            768: { items: 4 },
            992: { items: 5 }
        }
    });

    // Chargement dynamique des médecins disponibles
    function loadAvailableDoctors() {
        $.ajax({
            url: 'api/getDoctors.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let html = '';
                data.forEach(doctor => {
                    html += `
                    <div class="doctor-card">
                        <div class="position-relative">
                            <img src="${doctor.avatar}" class="doctor-avatar" alt="${doctor.name}">
                            <span class="doctor-status ${doctor.status}"></span>
                        </div>
                        <h6 class="mb-1">${doctor.name}</h6>
                        <small class="text-muted d-block">${doctor.specialty}</small>
                        <button class="btn btn-sm btn-primary mt-2 select-doctor" data-id="${doctor.id}">
                            <i class="ri-user-add-line me-1"></i> Choisir
                        </button>
                    </div>`;
                });
                $('#availableDoctors').html(html);
            }
        });
    }

    // Gestion des symptômes
    $('.symptom-btn').click(function() {
        $(this).toggleClass('active');
        updateSelectedSymptoms();
    });

    function updateSelectedSymptoms() {
        let selected = [];
        $('.symptom-btn.active').each(function() {
            selected.push($(this).text().trim());
        });
        
        if(selected.length > 0) {
            let html = '';
            selected.forEach(symptom => {
                html += `<span class="symptom-tag">${symptom} <i class="ri-close-line remove-tag"></i></span>`;
            });
            $('#selectedSymptoms').html(html);
            $('#startConsultation').prop('disabled', false);
        } else {
            $('#selectedSymptoms').html('<div class="empty-state"><i class="ri-arrow-up-line d-block text-muted mb-2"></i><span class="text-muted">Sélectionnez vos symptômes ci-dessous</span></div>');
            $('#startConsultation').prop('disabled', true);
        }
    }

    // Démarrer la consultation
    $('#startConsultation').click(function() {
        $('.consultation-waiting').addClass('d-none');
        $('.consultation-active').removeClass('d-none');
        
        // Ici vous ajouteriez la logique pour démarrer l'appel vidéo
        // Ex: initialisation de WebRTC, connexion au médecin, etc.
    });

    // Initialisation
    loadAvailableDoctors();
});
</script>

<?php include 'footer.php'; ?>