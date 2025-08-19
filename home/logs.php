<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-dark mb-0">
                        <i class="ri-clipboard-line me-2"></i>
                        Journal des Activités & Audit
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Consultez l'historique de toutes les actions importantes effectuées sur le système.
                    </p>

                    <form class="mb-4">
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-3">
                                <label for="logDate" class="form-label">Filtrer par date</label>
                                <input type="date" class="form-control" id="logDate">
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <label for="logUser" class="form-label">Utilisateur</label>
                                <select class="form-select" id="logUser">
                                    <option value="">Tous les utilisateurs</option>
                                    <option>Admin</option>
                                    <option>Dr. Smith</option>
                                    <option>Inf. Johnson</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <label for="logAction" class="form-label">Type d'action</label>
                                <select class="form-select" id="logAction">
                                    <option value="">Tous les types</option>
                                    <option>Connexion</option>
                                    <option>Création de patient</option>
                                    <option>Modification de dossier</option>
                                    <option>Suppression de données</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="ri-search-line me-1"></i>
                                    Rechercher
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0" id="logs-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date & Heure</th>
                                    <th>Utilisateur</th>
                                    <th>Type d'action</th>
                                    <th>Description de l'événement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>101</td>
                                    <td>19/08/2025 14:30:00</td>
                                    <td>Admin</td>
                                    <td>Connexion</td>
                                    <td>Connexion réussie depuis l'adresse IP 192.168.1.10</td>
                                </tr>
                                <tr>
                                    <td>102</td>
                                    <td>19/08/2025 14:32:15</td>
                                    <td>Dr. Smith</td>
                                    <td>Modification de dossier</td>
                                    <td>Mise à jour du dossier médical de Jane Doe (ID: 456)</td>
                                </tr>
                                <tr>
                                    <td>103</td>
                                    <td>19/08/2025 14:35:40</td>
                                    <td>Inf. Johnson</td>
                                    <td>Création de patient</td>
                                    <td>Création du nouveau dossier patient pour Marc Durand</td>
                                </tr>
                                <tr>
                                    <td>104</td>
                                    <td>19/08/2025 14:40:05</td>
                                    <td>Admin</td>
                                    <td>Suppression de données</td>
                                    <td>Suppression du rapport financier de juillet 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>