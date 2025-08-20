<?php include 'header.php'; ?>

<div class="app-body">

    <div class="row mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title text-primary mb-0">
                            <i class="ri-customer-service-2-line me-2"></i>
                            Centre de Support - Assistance Technique
                        </h5>
                        <p class="text-muted small mb-0 mt-1">Support disponible du lundi au vendredi, 8h-18h</p>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#quickHelpModal">
                            <i class="ri-lightbulb-flash-line me-1"></i>
                            Aide Rapide
                        </button>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTicketModal">
                            <i class="ri-add-line me-1"></i>
                            Nouveau Ticket
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Alertes importantes -->
                    <div class="alert alert-info d-flex align-items-center">
                        <i class="ri-information-line me-2 fs-4"></i>
                        <div>
                            <strong>Info :</strong> Temps de réponse moyen : < 2 heures pour les urgences, < 24 heures
                                pour les demandes standards. </div>
                        </div>

                        <!-- Cartes de statut -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6 col-xl-3 col-sm-6">
                                <div class="d-flex align-items-center p-3 border rounded-3">
                                    <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                                        <i class="ri-ticket-line fs-1 text-primary mb-2"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-primary mb-0">12</h3>
                                        <h6>Tickets ouverts</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 col-sm-6">
                                <div class="d-flex align-items-center p-3 border rounded-3 ">
                                    <div class="icon-box rounded-4 me-3 lg text-warning bg-warning bg-opacity-10">
                                        <i class="ri-time-line fs-1 text-warning mb-2"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-warning mb-0">3</h3>
                                        <h6>En attente</h6>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 col-sm-6">
                                <div class="d-flex align-items-center p-3 border rounded-3 ">
                                    <div class="icon-box rounded-4 me-3 lg text-center bg-success bg-opacity-10">
                                        <i class="ri-checkbox-circle-line fs-1 text-success mb-2"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-success mb-0">47</h3>
                                        <h6>Résolus</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 col-sm-6">
                                <div class="d-flex align-items-center p-3 border rounded-3 ">
                                    <div class="icon-box rounded-4 me-3 lg text-center bg-info bg-opacity-10">
                                        <i class="ri-calendar-event-line fs-1 text-info mb-2"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-info mb-0">5j</h3>
                                        <h6>Temps moyen</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-sm">

                    <div class="card-body">

                        <!-- Recherche et filtres -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-search-line"></i></span>
                                    <input type="text" class="form-control" placeholder="Rechercher dans mes tickets..."
                                        id="searchTickets">
                                    <button class="btn btn-outline-secondary" type="button">Rechercher</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-wrap gap-2 justify-content-md-end">
                                    <select class="form-select form-select-sm" style="width: auto;" id="filterStatus">
                                        <option value="">Tous les statuts</option>
                                        <option value="open">Ouvert</option>
                                        <option value="pending">En cours</option>
                                        <option value="resolved">Résolu</option>
                                        <option value="closed">Fermé</option>
                                    </select>
                                    <select class="form-select form-select-sm" style="width: auto;" id="filterPriority">
                                        <option value="">Toutes priorités</option>
                                        <option value="high">Haute</option>
                                        <option value="medium">Moyenne</option>
                                        <option value="low">Faible</option>
                                    </select>
                                    <button class="btn btn-outline-secondary btn-sm" id="resetFilters">
                                        <i class="ri-refresh-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ améliorée -->
                        <div class="row g-3 mb-4">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="mb-0"><i class="ri-question-answer-fill me-2"></i>Centre d'aide et FAQ
                                    </h6>
                                    <a href="guide-utilisateur.php" class="btn btn-sm btn-outline-primary">
                                        <i class="ri-book-open-line me-1"></i>Guide complet
                                    </a>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card h-100">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0"><i class="ri-computer-line me-2"></i>Problèmes
                                                    techniques</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item list-group-item-action">Problème
                                                        de connexion</a>
                                                    <a href="#" class="list-group-item list-group-item-action">Erreur
                                                        d'impression</a>
                                                    <a href="#" class="list-group-item list-group-item-action">Lenteur
                                                        du système</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card h-100">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0"><i class="ri-user-settings-line me-2"></i>Utilisation
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item list-group-item-action">Créer un
                                                        nouveau patient</a>
                                                    <a href="#" class="list-group-item list-group-item-action">Gérer les
                                                        rendez-vous</a>
                                                    <a href="#" class="list-group-item list-group-item-action">Éditer
                                                        une facture</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mes tickets avec onglets -->
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="mb-0"><i class="ri-ticket-2-line me-2"></i>Mes tickets de support</h6>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <button type="button" class="btn btn-outline-primary active"
                                            data-view="all">Tous</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-view="open">Ouverts</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-view="resolved">Résolus</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover align-middle m-0" id="support-tickets-table">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID Ticket</th>
                                                <th>Sujet</th>
                                                <th>Type</th>
                                                <th>Priorité</th>
                                                <th>Statut</th>
                                                <th>Dernière mise à jour</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="ticket-row" data-status="open" data-priority="high">
                                                <td><span class="fw-bold">#1001</span></td>
                                                <td>Problème d'impression des factures</td>
                                                <td>Bug</td>
                                                <td><span class="badge bg-danger">Haute</span></td>
                                                <td><span class="badge bg-warning text-dark">En cours</span></td>
                                                <td>18/08/2025 14:30</td>
                                                <td>
                                                    <div class="d-inline-flex gap-1">
                                                        <button class="btn btn-outline-info btn-sm view-ticket"
                                                            data-ticket-id="1001" data-bs-toggle="tooltip"
                                                            title="Voir détails">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-outline-success btn-sm"
                                                            data-bs-toggle="tooltip" title="Marquer résolu">
                                                            <i class="ri-check-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="ticket-row" data-status="resolved" data-priority="low">
                                                <td><span class="fw-bold">#1002</span></td>
                                                <td>Demande de fonctionnalité : exportation en PDF</td>
                                                <td>Amélioration</td>
                                                <td><span class="badge bg-success">Faible</span></td>
                                                <td><span class="badge bg-primary">Résolu</span></td>
                                                <td>17/08/2025 09:15</td>
                                                <td>
                                                    <div class="d-inline-flex gap-1">
                                                        <button class="btn btn-outline-info btn-sm view-ticket"
                                                            data-ticket-id="1002" data-bs-toggle="tooltip"
                                                            title="Voir détails">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-outline-warning btn-sm"
                                                            data-bs-toggle="tooltip" title="Rouvrir ticket">
                                                            <i class="ri-refresh-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="ticket-row" data-status="open" data-priority="medium">
                                                <td><span class="fw-bold">#1003</span></td>
                                                <td>Question sur la gestion des stocks pharmacie</td>
                                                <td>Question</td>
                                                <td><span class="badge bg-warning">Moyenne</span></td>
                                                <td><span class="badge bg-info">Nouveau</span></td>
                                                <td>19/08/2025 10:45</td>
                                                <td>
                                                    <div class="d-inline-flex gap-1">
                                                        <button class="btn btn-outline-info btn-sm view-ticket"
                                                            data-ticket-id="1003" data-bs-toggle="tooltip"
                                                            title="Voir détails">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-outline-danger btn-sm"
                                                            data-bs-toggle="tooltip" title="Supprimer">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <nav aria-label="Page navigation" class="mt-3">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Précédent</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Suivant</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nouveau Ticket -->
    <div class="modal fade" id="newTicketModal" tabindex="-1" aria-labelledby="newTicketModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newTicketModalLabel">
                        <i class="ri-ticket-line me-2"></i>Créer un nouveau ticket
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="ticketForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="ticketSubject" class="form-label">Sujet du ticket <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ticketSubject" required
                                    placeholder="Ex: Problème de connexion, Erreur de données, etc.">
                            </div>
                            <div class="col-md-6">
                                <label for="ticketModule" class="form-label">Module concerné</label>
                                <select class="form-select" id="ticketModule">
                                    <option value="">Sélectionner un module</option>
                                    <option>Gestion des patients</option>
                                    <option>Module clinique</option>
                                    <option>Pharmacie</option>
                                    <option>Facturation</option>
                                    <option>Ressources humaines</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label for="ticketType" class="form-label">Type de requête <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="ticketType" required>
                                    <option value="">Sélectionner un type</option>
                                    <option>Bug / Erreur</option>
                                    <option>Demande de fonctionnalité</option>
                                    <option>Assistance technique</option>
                                    <option>Question générale</option>
                                    <option>Problème de performance</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="ticketPriority" class="form-label">Priorité <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="ticketPriority" required>
                                    <option value="">Sélectionner une priorité</option>
                                    <option>Faible</option>
                                    <option>Moyenne</option>
                                    <option>Haute</option>
                                    <option>Urgent</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="ticketDescription" class="form-label">Description détaillée <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" id="ticketDescription" rows="5" required
                                placeholder="Décrivez votre problème le plus précisément possible..."></textarea>
                            <div class="form-text">Incluez les étapes pour reproduire le problème si applicable.</div>
                        </div>

                        <div class="mb-3">
                            <label for="ticketAttachment" class="form-label">Pièces jointes</label>
                            <input type="file" class="form-control" id="ticketAttachment" multiple>
                            <div class="form-text">Ajoutez des captures d'écran ou fichiers pertinents (max 5MB par
                                fichier).</div>
                        </div>

                        <div class="alert alert-info">
                            <i class="ri-information-line me-2"></i>
                            <strong>Conseil :</strong> Plus votre description est détaillée, plus nous pourrons vous
                            aider rapidement.
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" form="ticketForm" class="btn btn-primary">Envoyer le ticket</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Aide Rapide -->
    <div class="modal fade" id="quickHelpModal" tabindex="-1" aria-labelledby="quickHelpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="quickHelpModalLabel">
                        <i class="ri-lightbulb-flash-line me-2"></i>Aide Rapide
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="ri-lock-password-line text-primary me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Problème de connexion</h6>
                                    <p class="mb-0 small text-muted">Réinitialiser son mot de passe ou déverrouiller son
                                        compte</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="ri-printer-line text-primary me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Problème d'impression</h6>
                                    <p class="mb-0 small text-muted">Résoudre les erreurs d'impression courantes</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="ri-database-2-line text-primary me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Données manquantes</h6>
                                    <p class="mb-0 small text-muted">Retrouver ou restaurer des données</p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="ri-user-settings-line text-primary me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Configuration utilisateur</h6>
                                    <p class="mb-0 small text-muted">Modifier ses préférences et paramètres</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
                    <a href="guide-utilisateur.php" class="btn btn-info">Voir le guide complet</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Détails Ticket -->
    <div class="modal fade" id="ticketDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Détails du ticket <span id="ticketDetailId"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 id="ticketDetailSubject" class="mb-1"></h4>
                            <div class="d-flex gap-2">
                                <span id="ticketDetailPriority" class="badge"></span>
                                <span id="ticketDetailStatus" class="badge"></span>
                                <span id="ticketDetailType" class="badge bg-secondary"></span>
                            </div>
                        </div>
                        <div class="text-muted small text-end">
                            <div>Créé le: <span id="ticketDetailCreated"></span></div>
                            <div>Dernière mise à jour: <span id="ticketDetailUpdated"></span></div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="card-body">
                            <p id="ticketDetailDescription" class="mb-0"></p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Conversation</h6>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="ri-add-line me-1"></i>Ajouter un commentaire
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-3 mb-4">
                                <div class="flex-shrink-0">
                                    <div
                                        class="avatar avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-user-line"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-1">Vous</h6>
                                        <small class="text-muted">18/08/2025 14:30</small>
                                    </div>
                                    <p class="mb-0">Bonjour, je n'arrive pas à imprimer les factures depuis ce matin.
                                        L'impression se bloque à 50%.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div
                                        class="avatar avatar-sm bg-success text-white rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-customer-service-2-line"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-1">Support Technique</h6>
                                        <small class="text-muted">18/08/2025 15:45</small>
                                    </div>
                                    <p class="mb-0">Nous avons identifié le problème. Une mise à jour du pilote
                                        d'impression est nécessaire. Instructions envoyées par email.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Marquer comme résolu</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- JavaScript pour les fonctionnalités avancées -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialisation des tooltips Bootstrap
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Filtrage des tickets
            const filterStatus = document.getElementById('filterStatus');
            const filterPriority = document.getElementById('filterPriority');
            const resetFilters = document.getElementById('resetFilters');
            const ticketRows = document.querySelectorAll('.ticket-row');

            function filterTickets() {
                const statusValue = filterStatus.value;
                const priorityValue = filterPriority.value;

                ticketRows.forEach(row => {
                    const rowStatus = row.getAttribute('data-status');
                    const rowPriority = row.getAttribute('data-priority');

                    const statusMatch = !statusValue || rowStatus === statusValue;
                    const priorityMatch = !priorityValue || rowPriority === priorityValue;

                    if (statusMatch && priorityMatch) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            filterStatus.addEventListener('change', filterTickets);
            filterPriority.addEventListener('change', filterTickets);
            resetFilters.addEventListener('click', function () {
                filterStatus.value = '';
                filterPriority.value = '';
                filterTickets();
            });

            // Recherche de tickets
            const searchTickets = document.getElementById('searchTickets');
            searchTickets.addEventListener('input', function () {
                const searchTerm = this.value.toLowerCase();

                ticketRows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });

            // Changement de vue (tous/ouverts/résolus)
            const viewButtons = document.querySelectorAll('[data-view]');
            viewButtons.forEach(button => {
                button.addEventListener('click', function () {
                    viewButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const view = this.getAttribute('data-view');

                    ticketRows.forEach(row => {
                        if (view === 'all') {
                            row.style.display = '';
                        } else if (view === 'open') {
                            row.style.display = row.getAttribute('data-status') === 'open' ? '' : 'none';
                        } else if (view === 'resolved') {
                            row.style.display = row.getAttribute('data-status') === 'resolved' ? '' : 'none';
                        }
                    });
                });
            });

            // Gestion de l'ouverture des détails du ticket
            const viewTicketButtons = document.querySelectorAll('.view-ticket');
            const ticketDetailModal = new bootstrap.Modal(document.getElementById('ticketDetailModal'));

            viewTicketButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const ticketId = this.getAttribute('data-ticket-id');
                    // Ici, normalement on ferait une requête AJAX pour récupérer les détails du ticket
                    // Pour cet exemple, on utilise des données simulées

                    document.getElementById('ticketDetailId').textContent = '#' + ticketId;
                    document.getElementById('ticketDetailSubject').textContent = 'Problème d\'impression des factures';
                    document.getElementById('ticketDetailPriority').textContent = 'Haute';
                    document.getElementById('ticketDetailPriority').className = 'badge bg-danger';
                    document.getElementById('ticketDetailStatus').textContent = 'En cours';
                    document.getElementById('ticketDetailStatus').className = 'badge bg-warning text-dark';
                    document.getElementById('ticketDetailType').textContent = 'Bug';
                    document.getElementById('ticketDetailCreated').textContent = '18/08/2025 14:30';
                    document.getElementById('ticketDetailUpdated').textContent = '18/08/2025 15:45';
                    document.getElementById('ticketDetailDescription').textContent = 'Bonjour, je n\'arrive pas à imprimer les factures depuis ce matin. L\'impression se bloque systématiquement à 50% et affiche une erreur "Timeout printer". J\'ai essayé avec différentes factures et le problème persiste.';

                    ticketDetailModal.show();
                });
            });

            // Validation du formulaire de ticket
            const ticketForm = document.getElementById('ticketForm');
            if (ticketForm) {
                ticketForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Validation simple
                    const subject = document.getElementById('ticketSubject').value;
                    const description = document.getElementById('ticketDescription').value;

                    if (!subject || !description) {
                        alert('Veuillez remplir tous les champs obligatoires.');
                        return;
                    }

                    // Ici, normalement on enverrait les données au serveur
                    alert('Ticket créé avec succès! Notre équipe va le traiter rapidement.');
                    bootstrap.Modal.getInstance(document.getElementById('newTicketModal')).hide();

                    // Réinitialisation du formulaire
                    ticketForm.reset();
                });
            }
        });
    </script>

    <style>
        .card-stat {
            transition: transform 0.2s ease;
            border: none;
        }

        .card-stat:hover {
            transform: translateY(-3px);
        }

        .avatar {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ticket-row {
            transition: background-color 0.2s ease;
        }

        .ticket-row:hover {
            background-color: #f8f9fa;
        }
    </style>