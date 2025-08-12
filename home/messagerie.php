<?php include 'header.php'; ?>
<!-- 
<div class="app-body"> -->
    <!-- Mobile Header (visible uniquement sur petit écran) -->
    <div class="d-md-none mobile-messaging-header bg-primary text-white p-1">
        <div class="d-flex justify-content-between align-items-center">
            <button id="backToConversations" class="btn btn-sm btn-light d-none">
                <i class="ri-arrow-left-line"></i>
            </button>
            <h5 class="m-0 text-center flex-grow-1">Messagerie TUNZA</h5>
            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#newChatModal">
                <i class="ri-chat-new-line"></i>
            </button>
        </div>
    </div>

    <div class="container-fluid p-0 messaging-wrapper">
        <div class="row g-0 h-100">
            <!-- Liste des conversations - Visible par défaut sur mobile -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 conversation-panel d-flex flex-column border-end" id="conversationPanel">
                <div class="conversation-header d-flex justify-content-between align-items-center p-3 border-bottom bg-light d-none d-md-flex">
                    <div class="d-flex align-items-center">
                        <h5 class="m-0 fw-bold">Messagerie TUNZA</h5>
                        <span class="badge bg-primary ms-2">3</span>
                        
                    </div>
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#newChatModal" title="Nouvelle conversation">
                            <i class="ri-chat-new-line"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Filtres et recherche -->
                <div class="p-3 border-bottom">
                    <div class="search-box input-group input-group-sm">
                        <span class="input-group-text bg-white border-end-0"><i class="ri-search-line"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Rechercher...">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="ri-filter-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">Filtrer par</h6></li>
                            <li><a class="dropdown-item" href="#" data-filter="all">Toutes</a></li>
                            <li><a class="dropdown-item" href="#" data-filter="unread">Non lues</a></li>
                            <li><a class="dropdown-item" href="#" data-filter="urgent">Urgentes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#" data-filter="service">Services</a></li>
                            <li><a class="dropdown-item" href="#" data-filter="staff">Personnel</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Liste des conversations -->
                <div class="flex-grow-1  conversation-list scroll550">
                    <!-- Groupe de services -->
                    <div class="conversation-group">
                        <div class="conversation-group-header px-3 py-2 bg-light">
                            <small class="text-uppercase fw-bold text-muted">Services Hospitaliers</small>
                        </div>
                        
                        <!-- Conversation service Urgences -->
                        <a href="#" class="conversation-item d-flex align-items-center p-3" data-chat-type="service" data-chat-id="urgences">
                            <div class="position-relative me-3">
                                <div class="avatar-service bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                                    <i class="ri-empathize-line"></i>
                                </div>
                                <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-2 border-white rounded-circle"></span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <strong>Urgences</strong>
                                    <small class="text-muted">10:45</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-muted text-truncate">Nouveau patient à l'accueil...</p>
                                    <span class="badge bg-danger rounded-pill">3</span>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Conversation service Laboratoire -->
                        <a href="#" class="conversation-item d-flex align-items-center p-3" data-chat-type="service" data-chat-id="labo">
                            <div class="position-relative me-3">
                                <div class="avatar-service bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                                    <i class="ri-test-tube-line"></i>
                                </div>
                                <span class="position-absolute bottom-0 end-0 p-1 bg-secondary border border-2 border-white rounded-circle"></span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <strong>Laboratoire</strong>
                                    <small class="text-muted">Hier</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate">Résultats d'analyses disponibles...</p>
                            </div>
                        </a>
                    </div>
                   
                    
                    <!-- Groupe personnel -->
                    <div class="conversation-group">
                        <div class="conversation-group-header px-3 py-2 bg-light">
                            <small class="text-uppercase fw-bold text-muted">Personnel</small>
                        </div>
                        
                        <!-- Conversation collègue -->
                        <a href="#" class="conversation-item d-flex align-items-center p-3" data-chat-type="user" data-chat-id="dr_dupont">
                            <div class="position-relative me-3">
                                <img src="../assets/images/user2.png" class="rounded-circle" width="48" height="48" alt="Dr. Dupont">
                                <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-2 border-white rounded-circle"></span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <strong>Dr. Jean Dupont</strong>
                                    <small class="text-muted">09:30</small>
                                </div>
                                <p class="mb-0 text-muted text-truncate text-wrap">Pouvez-vous vérifier le dossier du patient...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Zone de chat - Cachée par défaut sur mobile -->
            <div class="col-12 col-md-8 col-lg-9 col-xl-9 chat-panel d-none d-md-flex flex-column" id="chatPanel">
                <div class="chat-header d-flex justify-content-between align-items-center p-3 border-bottom bg-light">
                    <div class="d-flex align-items-center">
                        <div class="position-relative me-3 d-md-none">
                            <div class="avatar-service bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                                <i class="ri-empathize-line"></i>
                            </div>
                            <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-2 border-white rounded-circle"></span>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold ">Urgences</h6>
                            <small class="text-muted status-indicator d-none d-sm-block">En ligne - 3 membres actifs</small>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <button class="btn btn-sm btn-outline-secondary" title="Appel vocal">
                            <i class="ri-phone-line"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-secondary ms-2" title="Visioconférence">
                            <i class="ri-vidicon-line"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-secondary ms-2" title="Détails du groupe">
                            <i class="ri-group-line"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Messages -->
                <div class="flex-grow-1 chat-messages p-3 ">
                    <div class="text-center my-3">
                        <span class="badge bg-light text-dark">Aujourd'hui</span>
                    </div>
                    
                    <!-- Message système -->
                    <div class=" mb-3 text-center my-3">
                        <small class="text-muted">Dr. Martin a rejoint la conversation</small>
                    </div>
                    
                    <!-- Message reçu -->
                    <div class="message received mb-3 ">
                        <div class="message-sender d-flex align-items-center mb-1">
                            <img src="../assets/images/user2.png" class="rounded-circle me-2" width="24" height="24">
                            <small class="fw-bold">Dr. Sophie Martin</small>
                        </div>
                        <div class="message-content">
                            <div class="message-text">Bonjour, nous avons un nouveau patient à l'accueil qui présente des douleurs thoraciques.</div>
                            <small class="message-time text-muted">10:45</small>
                        </div>
                    </div>
                    
                    <!-- Message envoyé -->
                    <div class="message sent mb-3">
                        <div class="message-content">
                            <div class="message-text">Merci pour l'information. Quel est le nom du patient et ses constantes ?</div>
                            <small class="message-time text-muted">10:47</small>
                        </div>
                    </div>
                    
                    <!-- Message avec pièce jointe -->
                    <div class="message received mb-3">
                        <div class="message-sender d-flex align-items-center mb-1">
                            <img src="../assets/images/user2.png" class="rounded-circle me-2" width="24" height="24">
                            <small class="fw-bold">Dr. Sophie Martin</small>
                        </div>
                        <div class="message-content">
                            <div class="message-text">Voici les premières observations :</div>
                            <div class="attachment-card mt-2 p-2 border rounded">
                                <div class="d-flex align-items-center">
                                    <i class="ri-file-text-line text-primary fs-4 me-2"></i>
                                    <div>
                                        <strong>Observations_urgences.pdf</strong>
                                        <div class="text-muted small">250 Ko - ECG inclus</div>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex">
                                    <button class="btn btn-sm btn-outline-primary me-2">
                                        <i class="ri-eye-line"></i> Voir
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="ri-download-line"></i> Télécharger
                                    </button>
                                </div>
                            </div>
                            <small class="message-time text-muted">10:50</small>
                        </div>
                    </div>
                    
                    <!-- Message urgent -->
                    <div class="message received mb-3">
                        <div class="message-sender d-flex align-items-center mb-1">
                            <img src="../assets/images/user4.png" class="rounded-circle me-2" width="24" height="24">
                            <small class="fw-bold">Inf. Alice Durand <span class="badge bg-danger ms-2">URGENT</span></small>
                        </div>
                        <div class="message-content">
                            <div class="message-text">Le patient fait une réaction allergique ! Nous avons besoin d'un médecin immédiatement.</div>
                            <small class="message-time text-muted">10:52</small>
                        </div>
                    </div>
                </div>
                
                <!-- Zone d'envoi -->
                <div class="chat-input p-3 border-top bg-light">
                    <form class="message-form d-flex align-items-center">
                        <div type="button" class=" me-2" title="Pièce jointe">
                            <i class="ri-attachment-line fs-3"></i>
                        </div>
                        <div class="flex-grow-1 position-relative">
                            
                            <input type="text" class="form-control message-input" placeholder="Écrire un message..." autocomplete="off" data-emoji-input="" data-autosize="true">
                            <div data-emoji-btn="" class=" btn-sm btn-link position-absolute text-decoration-none end-0 top-50 translate-middle-y me-2" title="Émojis">
                                <i class="ri-emotion-line fs-4"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ms-2" title="Envoyer">
                            <i class="ri-send-plane-2-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nouvelle Conversation -->
<div class="modal fade" id="newChatModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nouvelle conversation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs mb-3" id="newChatTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="service-tab" data-bs-toggle="tab" data-bs-target="#service-tab-pane">Services</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff-tab-pane">Personnel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="patient-tab" data-bs-toggle="tab" data-bs-target="#patient-tab-pane">Patients</button>
                    </li>
                </ul>
                
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="service-tab-pane" role="tabpanel">
                        <div class="search-box mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="ri-search-line"></i></span>
                                <input type="text" class="form-control" placeholder="Rechercher un service...">
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="avatar-service bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px;height:40px;">
                                    <i class="ri-empathize-line"></i>
                                </div>
                                <div>
                                    <strong>Urgences</strong>
                                    <small class="text-muted">5 membres</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="avatar-service bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px;height:40px;">
                                    <i class="ri-test-tube-line"></i>
                                </div>
                                <div>
                                    <strong>Laboratoire</strong>
                                    <small class="text-muted">3 membres</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="staff-tab-pane" role="tabpanel">
                        <div class="search-box mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="ri-search-line"></i></span>
                                <input type="text" class="form-control" placeholder="Rechercher un collègue...">
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <img src="../assets/images/user4.png" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <strong>Dr. Jean Dupont</strong>
                                    <small class="text-muted">Cardiologie</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <img src="../assets/images/user1.png" class="rounded-circle me-3" width="40" height="40">
                                <div>
                                    <strong>Inf. Alice Durand</strong>
                                    <small class="text-muted">Urgences</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="patient-tab-pane" role="tabpanel">
                        <div class="alert alert-info">
                            <i class="ri-information-line"></i> La messagerie avec les patients passe par le portail patient sécurisé.
                        </div>
                        <div class="search-box mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="ri-search-line"></i></span>
                                <input type="text" class="form-control" placeholder="Rechercher un patient...">
                            </div>
                        </div>
                        <!-- Liste des patients -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Démarrer la conversation</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Détails du groupe -->
<div class="modal fade" id="groupDetailsModal" tabindex="-1" aria-hidden="true">
    <!-- Contenu des détails du groupe -->
     
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la responsive mobile
    const backBtn = document.getElementById('backToConversations');
    const conversationPanel = document.getElementById('conversationPanel');
    const chatPanel = document.getElementById('chatPanel');
    
    if (window.innerWidth < 768) {
        document.querySelectorAll('.conversation-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                conversationPanel.classList.add('hidden');
                chatPanel.classList.add('active');
                backBtn.classList.remove('d-none');
            });
        });
        
        backBtn.addEventListener('click', function() {
            conversationPanel.classList.remove('hidden');
            chatPanel.classList.remove('active');
            this.classList.add('d-none');
        });
    }
    
    // Auto-scroll vers le bas des messages
    const chatMessages = document.querySelector('.chat-messages');
    if (chatMessages) {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Gestion de l'envoi de message
    const messageForm = document.querySelector('.message-form');
    if (messageForm) {
        messageForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('.message-input');
            const messageText = input.value.trim();
            
            if (messageText) {
                const now = new Date();
                const timeString = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
                
                const newMessage = document.createElement('div');
                newMessage.className = 'message sent mb-3';
                newMessage.innerHTML = `
                    <div class="message-content">
                        <div class="message-text">${messageText}</div>
                        <small class="message-time">${timeString}</small>
                    </div>
                `;
                
                chatMessages.appendChild(newMessage);
                input.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
                // Simulation de réponse (pour la démo)
                setTimeout(() => {
                    const replies = [
                        "Message reçu, je traite l'information.",
                        "Pouvez-vous préciser la demande ?",
                        "Je transfère à l'équipe concernée.",
                        "Patient pris en charge, merci."
                    ];
                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    
                    const replyMessage = document.createElement('div');
                    replyMessage.className = 'message received mb-3';
                    replyMessage.innerHTML = `
                        <div class="message-sender d-flex align-items-center mb-1">
                            <img src="../assets/images/user2.png" class="rounded-circle me-2" width="24" height="24">
                            <small class="fw-bold">Dr. Sophie Martin</small>
                        </div>
                        <div class="message-content">
                            <div class="message-text">${randomReply}</div>
                            <small class="message-time text-muted">${now.getHours() + ':' + (now.getMinutes() + 1 < 10 ? '0' : '') + (now.getMinutes() + 1)}</small>
                        </div>
                    `;
                    
                    chatMessages.appendChild(replyMessage);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000 + Math.random() * 2000);
            }
        });
    }
    
    // Filtrage des conversations
    document.querySelectorAll('[data-filter]').forEach(filter => {
        filter.addEventListener('click', function(e) {
            e.preventDefault();
            const filterType = this.getAttribute('data-filter');
            
            document.querySelectorAll('.conversation-item').forEach(item => {
                if (filterType === 'all') {
                    item.style.display = 'flex';
                } else {
                    item.style.display = item.getAttribute('data-chat-type') === filterType ? 'flex' : 'none';
                }
            });
        });
    });
    
    // Rafraîchissement périodique des conversations (simulé)
    setInterval(() => {
        // En production, vous feriez une requête AJAX ici
        console.log('Vérification des nouveaux messages...');
    }, 30000);
});
</script>

    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
        <!-- Overlay Scroll JS -->
        <script src="../assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="../assets/vendor/overlay-scroll/custom-scrollbar.js"></script>
        <!-- Custom JS files -->
        <script src="../assets/js/custom.js"></script>
</body>
</html>