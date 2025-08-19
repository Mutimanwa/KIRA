<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary bg-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-secondary mb-0">
                        <i class="ri-megaphone-line me-2"></i>
                        Tableau d'annonces
                    </h5>
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addAnnonceModal">
                        <i class="ri-add-line me-1"></i>
                        Créer une annonce
                    </button>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Consultez et gérez les annonces importantes pour le personnel.
                    </p>
                    
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 border-danger shadow-sm">
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2">Important</span>
                                    <h5 class="card-title fw-bold">Maintenance du serveur</h5>
                                    <h6 class="card-subtitle mb-2 text-muted small">Publiée le 19/08/2025 par Admin</h6>
                                    <p class="card-text text-truncate-2-lines">La maintenance du serveur principal aura lieu le 20 août à 23h00. Le système sera inaccessible pendant environ 2 heures.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <a href="#" class="btn btn-outline-info btn-sm">Lire la suite</a>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editAnnonceModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 border-secondary shadow-sm">
                                <div class="card-body">
                                    <span class="badge bg-secondary mb-2">Général</span>
                                    <h5 class="card-title fw-bold">Réunion du personnel</h5>
                                    <h6 class="card-subtitle mb-2 text-muted small">Publiée le 18/08/2025 par Dr. A. Smith</h6>
                                    <p class="card-text text-truncate-2-lines">Une réunion de tous les départements est prévue le vendredi 22 août à 14h00 dans la salle de conférence principale.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <a href="#" class="btn btn-outline-info btn-sm">Lire la suite</a>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editAnnonceModal" title="Modifier">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Supprimer">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addAnnonceModal" tabindex="-1" aria-labelledby="addAnnonceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAnnonceModalLabel">Créer une nouvelle annonce</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="annonceTitle" class="form-label">Titre de l'annonce</label>
                        <input type="text" class="form-control" id="annonceTitle" placeholder="Titre de l'annonce">
                    </div>
                    <div class="mb-3">
                        <label for="annonceContent" class="form-label">Contenu de l'annonce</label>
                        <textarea class="form-control" id="annonceContent" rows="5" placeholder="Saisir le contenu de l'annonce..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="annoncePriority" class="form-label">Priorité</label>
                        <select class="form-select" id="annoncePriority">
                            <option value="normal">Normale</option>
                            <option value="important">Importante</option>
                            <option value="urgent">Urgente</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-secondary">Publier l'annonce</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette annonce ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>