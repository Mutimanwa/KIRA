<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie Hospitalière</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .chat-container {
            height: 80vh;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .contacts-list {
            height: 100%;
            overflow-y: auto;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .chat-area {
            height: 100%;
            display: flex;
            flex-direction: column;
            background-color: #fff;
        }
        .chat-header {
            background-color: #0d6efd;
            color: white;
            padding: 15px;
        }
        .messages {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            background-color: #f5f5f5;
        }
        .message-input {
            padding: 15px;
            border-top: 1px solid #dee2e6;
            background-color: #fff;
        }
        .message {
            margin-bottom: 10px;
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 18px;
            position: relative;
            word-wrap: break-word;
        }
        .received {
            background-color: #e9ecef;
            align-self: flex-start;
            border-bottom-left-radius: 5px;
        }
        .sent {
            background-color: #0d6efd;
            color: white;
            align-self: flex-end;
            border-bottom-right-radius: 5px;
        }
        .contact-item {
            padding: 10px 15px;
            border-bottom: 1px solid #dee2e6;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .contact-item:hover, .contact-item.active {
            background-color: #e9ecef;
        }
        .badge-service {
            background-color: #6c757d;
        }
        .badge-global {
            background-color: #198754;
        }
        .unread-count {
            background-color: #dc3545;
        }
        .user-status {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        .online {
            background-color: #28a745;
        }
        .offline {
            background-color: #6c757d;
        }
        .department-title {
            font-weight: bold;
            background-color: #e9ecef;
            padding: 8px 15px;
            border-bottom: 1px solid #dee2e6;
        }
        .search-box {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        .message-time {
            font-size: 0.75rem;
            opacity: 0.7;
            margin-top: 3px;
        }
        .sent .message-time {
            color: rgba(255,255,255,0.8);
        }
        .received .message-time {
            color: rgba(0,0,0,0.6);
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-4"><i class="fas fa-comments me-2"></i>Messagerie Hospitalière</h1>
                <div class="chat-container">
                    <div class="row h-100">
                        <!-- Liste des contacts -->
                        <div class="col-md-4 p-0 contacts-list">
                            <div class="search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Rechercher..." id="searchContact">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="department-title d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#globalChat">
                                <span><i class="fas fa-hospital me-2"></i>Chat Général</span>
                                <span class="badge rounded-pill bg-primary">3</span>
                            </div>
                            <div class="contact-item active" data-chat="global">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="user-status online"></span>
                                        <strong>Tout l'hôpital</strong>
                                    </div>
                                    <span class="badge rounded-pill unread-count">3</span>
                                </div>
                                <small class="text-muted">Dernier message: 10:45</small>
                            </div>
                            
                            <div class="department-title d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#departments">
                                <span><i class="fas fa-users me-2"></i>Services</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div id="departments" class="collapse show">
                                <!-- Cardiologie -->
                                <div class="contact-item" data-chat="cardio">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status online"></span>
                                            <strong>Cardiologie</strong>
                                        </div>
                                        <span class="badge rounded-pill badge-service">12</span>
                                    </div>
                                    <small class="text-muted">Dr. Dupont: Le patient en chambre 204...</small>
                                </div>
                                
                                <!-- Urgences -->
                                <div class="contact-item" data-chat="urgences">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status online"></span>
                                            <strong>Urgences</strong>
                                        </div>
                                        <span class="badge rounded-pill badge-service">5</span>
                                    </div>
                                    <small class="text-muted">Inf. Martin: Arrivée d'un trauma...</small>
                                </div>
                                
                                <!-- Pédiatrie -->
                                <div class="contact-item" data-chat="pediatrie">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status online"></span>
                                            <strong>Pédiatrie</strong>
                                        </div>
                                    </div>
                                    <small class="text-muted">Dr. Leroy: Réunion à 15h...</small>
                                </div>
                                
                                <!-- Chirurgie -->
                                <div class="contact-item" data-chat="chirurgie">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status offline"></span>
                                            <strong>Chirurgie</strong>
                                        </div>
                                    </div>
                                    <small class="text-muted">Aucun message récent</small>
                                </div>
                            </div>
                            
                            <div class="department-title d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#contacts">
                                <span><i class="fas fa-user-friends me-2"></i>Contacts</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div id="contacts" class="collapse show">
                                <!-- Contacts individuels -->
                                <div class="contact-item" data-chat="drDupont">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status online"></span>
                                            <strong>Dr. Dupont</strong>
                                            <small class="text-muted ms-2">Cardiologie</small>
                                        </div>
                                    </div>
                                    <small class="text-muted">Je vous envoie les résultats...</small>
                                </div>
                                
                                <div class="contact-item" data-chat="infMartin">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status online"></span>
                                            <strong>Inf. Martin</strong>
                                            <small class="text-muted ms-2">Urgences</small>
                                        </div>
                                        <span class="badge rounded-pill unread-count">1</span>
                                    </div>
                                    <small class="text-muted">Pouvez-vous venir en urgence...</small>
                                </div>
                                
                                <div class="contact-item" data-chat="drLeroy">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status offline"></span>
                                            <strong>Dr. Leroy</strong>
                                            <small class="text-muted ms-2">Pédiatrie</small>
                                        </div>
                                    </div>
                                    <small class="text-muted">A demain pour la visite...</small>
                                </div>
                                
                                <div class="contact-item" data-chat="mmeDubois">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="user-status online"></span>
                                            <strong>Mme Dubois</strong>
                                            <small class="text-muted ms-2">Administration</small>
                                        </div>
                                    </div>
                                    <small class="text-muted">Les documents sont prêts...</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Zone de chat -->
                        <div class="col-md-8 p-0 chat-area">
                            <!-- En-tête du chat -->
                            <div class="chat-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0" id="chatTitle">Tout l'hôpital</h5>
                                    <small id="chatStatus"><span class="user-status online"></span> 12 membres en ligne</small>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-light me-2">
                                        <i class="fas fa-users"></i> Membres
                                    </button>
                                    <button class="btn btn-sm btn-light">
                                        <i class="fas fa-cog"></i> Paramètres
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Messages -->
                            <div class="messages" id="messagesContainer">
                                <!-- Messages du chat global -->
                                <div class="message received">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <strong>Dr. Dupont</strong>
                                        <small class="message-time">10:30</small>
                                    </div>
                                    <p>Bonjour à tous, rappel: réunion médicale aujourd'hui à 14h en salle de conférence.</p>
                                </div>
                                
                                <div class="message received">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <strong>Inf. Martin</strong>
                                        <small class="message-time">10:35</small>
                                    </div>
                                    <p>Merci pour l'info. Je ne pourrai pas y assister, je suis de garde aux urgences.</p>
                                </div>
                                
                                <div class="message sent">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <strong>Vous</strong>
                                        <small class="message-time">10:45</small>
                                    </div>
                                    <p>Je serai présent. Quelqu'un a les comptes-rendus de la dernière réunion?</p>
                                </div>
                                
                                <!-- Messages des autres chats (cachés par défaut) -->
                                <div class="d-none" id="cardioMessages">
                                    <div class="message received">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Dr. Dupont</strong>
                                            <small class="message-time">09:15</small>
                                        </div>
                                        <p>Le patient en chambre 204 a besoin d'une échocardiographie en urgence.</p>
                                    </div>
                                    
                                    <div class="message sent">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Vous</strong>
                                            <small class="message-time">09:20</small>
                                        </div>
                                        <p>Je m'en occupe, j'ai prévenu le service d'imagerie.</p>
                                    </div>
                                </div>
                                
                                <div class="d-none" id="urgencesMessages">
                                    <div class="message received">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Inf. Martin</strong>
                                            <small class="message-time">08:05</small>
                                        </div>
                                        <p>Arrivée d'un trauma dans 5 minutes, préparez la salle de choc.</p>
                                    </div>
                                    
                                    <div class="message received">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Dr. Lambert</strong>
                                            <small class="message-time">08:10</small>
                                        </div>
                                        <p>Tout est prêt, équipe au complet.</p>
                                    </div>
                                </div>
                                
                                <div class="d-none" id="pediatrieMessages">
                                    <div class="message received">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Dr. Leroy</strong>
                                            <small class="message-time">Hier, 16:30</small>
                                        </div>
                                        <p>Réunion demain à 15h pour discuter des nouveaux protocoles.</p>
                                    </div>
                                </div>
                                
                                <div class="d-none" id="drDupontMessages">
                                    <div class="message received">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Dr. Dupont</strong>
                                            <small class="message-time">Hier, 18:45</small>
                                        </div>
                                        <p>Bonjour, je vous envoie les résultats des tests du patient Martin.</p>
                                    </div>
                                    
                                    <div class="message sent">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Vous</strong>
                                            <small class="message-time">Hier, 19:10</small>
                                        </div>
                                        <p>Merci, je les ai reçus. Je les analyserai demain matin.</p>
                                    </div>
                                </div>
                                
                                <div class="d-none" id="infMartinMessages">
                                    <div class="message received">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <strong>Inf. Martin</strong>
                                            <small class="message-time">Aujourd'hui, 07:30</small>
                                        </div>
                                        <p>Bonjour, pouvez-vous venir en urgence en salle de réa? Le patient en crise.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Champ de saisie -->
                            <div class="message-input">
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary" type="button" title="Ajouter un fichier">
                                        <i class="fas fa-paperclip"></i>
                                    </button>
                                    <input type="text" class="form-control" placeholder="Écrire un message..." id="messageInput">
                                    <button class="btn btn-primary" type="button" id="sendButton">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion du changement de chat
            const contactItems = document.querySelectorAll('.contact-item');
            const messagesContainer = document.getElementById('messagesContainer');
            const chatTitle = document.getElementById('chatTitle');
            const chatStatus = document.getElementById('chatStatus');
            
            contactItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Retirer la classe active de tous les contacts
                    contactItems.forEach(i => i.classList.remove('active'));
                    // Ajouter la classe active au contact cliqué
                    this.classList.add('active');
                    
                    // Récupérer l'ID du chat
                    const chatId = this.getAttribute('data-chat');
                    
                    // Masquer tous les messages
                    const allMessages = messagesContainer.querySelectorAll('[id$="Messages"]');
                    allMessages.forEach(msg => msg.classList.add('d-none'));
                    
                    // Afficher les messages correspondants
                    if (chatId === 'global') {
                        // Afficher les messages globaux (déjà visibles par défaut)
                        chatTitle.textContent = 'Tout l\'hôpital';
                        chatStatus.innerHTML = '<span class="user-status online"></span> 12 membres en ligne';
                    } else {
                        // Afficher les messages du chat sélectionné
                        const chatMessages = document.getElementById(chatId + 'Messages');
                        if (chatMessages) {
                            chatMessages.classList.remove('d-none');
                        }
                        
                        // Mettre à jour le titre et le statut
                        const contactName = this.querySelector('strong').textContent;
                        chatTitle.textContent = contactName;
                        
                        // Déterminer si c'est un service ou un contact individuel
                        if (chatId === 'cardio' || chatId === 'urgences' || chatId === 'pediatrie' || chatId === 'chirurgie') {
                            chatStatus.innerHTML = '<span class="user-status online"></span> 5 membres en ligne';
                        } else {
                            const statusElement = this.querySelector('.user-status');
                            const statusClass = statusElement.classList.contains('online') ? 'en ligne' : 'hors ligne';
                            chatStatus.innerHTML = `<span class="user-status ${statusElement.classList.contains('online') ? 'online' : 'offline'}"></span> ${statusClass}`;
                        }
                    }
                    
                    // Faire défiler vers le bas
                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                    
                    // Réinitialiser le compteur de messages non lus
                    const unreadBadge = this.querySelector('.unread-count');
                    if (unreadBadge) {
                        unreadBadge.remove();
                    }
                });
            });
            
            // Gestion de l'envoi de message
            const messageInput = document.getElementById('messageInput');
            const sendButton = document.getElementById('sendButton');
            
            function sendMessage() {
                const messageText = messageInput.value.trim();
                if (messageText) {
                    // Créer un nouveau message
                    const messageElement = document.createElement('div');
                    messageElement.className = 'message sent';
                    
                    const now = new Date();
                    const timeString = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
                    
                    messageElement.innerHTML = `
                        <div class="d-flex justify-content-between align-items-baseline">
                            <strong>Vous</strong>
                            <small class="message-time">${timeString}</small>
                        </div>
                        <p>${messageText}</p>
                    `;
                    
                    // Ajouter le message à la conversation active
                    const activeChat = document.querySelector('.contact-item.active').getAttribute('data-chat');
                    if (activeChat === 'global') {
                        messagesContainer.appendChild(messageElement);
                    } else {
                        const chatMessages = document.getElementById(activeChat + 'Messages');
                        if (chatMessages) {
                            chatMessages.appendChild(messageElement);
                            chatMessages.classList.remove('d-none');
                        }
                    }
                    
                    // Effacer le champ de saisie
                    messageInput.value = '';
                    
                    // Faire défiler vers le bas
                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                }
            }
            
            // Envoyer avec le bouton
            sendButton.addEventListener('click', sendMessage);
            
            // Envoyer avec Entrée
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
            
            // Simulation de nouveaux messages entrants
            setTimeout(() => {
                // Ajouter un message dans le chat des urgences
                const newMessage = document.createElement('div');
                newMessage.className = 'message received';
                newMessage.innerHTML = `
                    <div class="d-flex justify-content-between align-items-baseline">
                        <strong>Dr. Lambert</strong>
                        <small class="message-time">11:00</small>
                    </div>
                    <p>Le patient est stabilisé, merci à tous pour votre réactivité.</p>
                `;
                document.getElementById('urgencesMessages').appendChild(newMessage);
                
                // Mettre à jour le dernier message dans la liste
                const urgencesContact = document.querySelector('.contact-item[data-chat="urgences"]');
                urgencesContact.querySelector('small').textContent = 'Dr. Lambert: Le patient est stabilisé...';
                
                // Si le chat des urgences n'est pas actif, ajouter un badge de notification
                if (!urgencesContact.classList.contains('active')) {
                    const unreadBadge = document.createElement('span');
                    unreadBadge.className = 'badge rounded-pill unread-count';
                    unreadBadge.textContent = '1';
                    urgencesContact.querySelector('.d-flex').appendChild(unreadBadge);
                }
            }, 5000);
        });
    </script>
</body>
</html>