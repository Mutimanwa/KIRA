<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row g-3">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <!-- En-tête avec navigation -->
                <div class="card-header bg-primary bg-opacity-10 border-0 d-flex justify-content-between align-items-center py-3">
                    <h5 class="card-title mb-0 text-primary">
                        <i class="ri-calendar-todo-line me-2 "></i> Gestion du Planning Hospitalier
                    </h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-primary" id="addSchedule" data-bs-toggle="modal" data-bs-target="#eventModal">
                            <i class="ri-add-line me-1"></i> Nouveau créneau
                        </button>
                    </div>
                </div>
                <!-- Planning principal -->
                <div class="card-body">
                   <div id="hospitalisationCal">

                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Événement -->
<div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Détails du créneau</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Patient</label>
                        <select class="form-select select2-search">
                            <option selected disabled>Sélectionner un patient</option>
                            <option>Jean Dupont (N°123456)</option>
                            <option>Marie Durand (N°789012)</option>
                        </select>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Médecin</label>
                            <select class="form-select">
                                <option selected>Dr. Sophie Martin</option>
                                <option>Dr. Alain Durand</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Salle</label>
                            <select class="form-select">
                                <option>Salle 201</option>
                                <option>Salle 105</option>
                                <option>Salle Urgence 1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" value="2023-06-12">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Heure</label>
                            <input type="time" class="form-control" value="08:00">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Type</label>
                            <select class="form-select">
                                <option>Consultation</option>
                                <option>Contrôle</option>
                                <option>Urgence</option>
                                <option>Opération</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger me-auto" data-bs-dismiss="modal">
                    <i class="ri-delete-bin-line me-1"></i> Supprimer
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>