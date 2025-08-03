<?php include 'header.php' ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="app-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Nouvelle admission</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Patient -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="patient_id" class="form-label">Patient</label>
                                <select class="form-select select2-search" id="patient_id" name="patient_id" required>
                                    <option value="">Sélectionner un patient</option>
                                    <!-- Les options seront chargées dynamiquement -->
                                    
                                </select>

                            </div>
                        </div>

                        <!-- Type de séjour -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="type_sejour" class="form-label">Type de séjour</label>
                                <select class="form-control" id="type_sejour" name="type_sejour" required>
                                    <option value="HOSPITALISATION_COMPLETE">Hospitalisation complète</option>
                                    <option value="HOSPITALISATION_JOUR">Hospitalisation de jour</option>
                                    <option value="URGENCE">Urgence</option>
                                    <option value="SOINS_AMBULATOIRES">Soins ambulatoires</option>
                                </select>
                            </div>
                        </div>

                        <!-- Date admission -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="date_admission" class="form-label">Date d'admission</label>
                                <input type="datetime-local" class="form-control" id="date_admission"
                                    name="date_admission" required>
                            </div>
                        </div>

                        <!-- Date sortie prévue -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="date_sortie_prevue" class="form-label">Date sortie prévue</label>
                                <input type="datetime-local" class="form-control" id="date_sortie_prevue"
                                    name="date_sortie_prevue">
                            </div>
                        </div>

                        <!-- Médecin référent -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="medecin_referent_id" class="form-label">Médecin référent</label>
                                <select class="form-control" id="medecin_referent_id" name="medecin_referent_id">
                                    <!-- Options des médecins seraient chargées ici -->
                                </select>
                            </div>
                        </div>

                        <!-- Service admission -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="service_admission_id" class="form-label">Service d'admission</label>
                                <select class="form-control" id="service_admission_id" name="service_admission_id">
                                    <!-- Options des services seraient chargées ici -->
                                </select>
                            </div>
                        </div>

                        <!-- Unité fonctionnelle -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="unite_admission_id" class="form-label">Unité fonctionnelle</label>
                                <select class="form-control" id="unite_admission_id" name="unite_admission_id">
                                    <!-- Options des unités fonctionnelles seraient chargées ici -->
                                </select>
                            </div>
                        </div>

                        <!-- Lit actuel -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="lit_actuel_id" class="form-label">Lit</label>
                                <select class="form-control" id="lit_actuel_id" name="lit_actuel_id">
                                    <!-- Options des lits seraient chargées ici -->
                                </select>
                            </div>
                        </div>

                        <!-- Motif admission -->
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="motif_admission" class="form-label">Motif d'admission</label>
                                <textarea class="form-control" id="motif_admission" name="motif_admission" rows="3"
                                    required></textarea>
                            </div>
                        </div>

                        <!-- Diagnostic admission (CIM-10) -->
                        <div class="col-xxl-6 col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label for="diagnostic_admission" class="form-label">Diagnostic d'admission
                                    (CIM-10)</label>
                                <input type="text" class="form-control" id="diagnostic_admission"
                                    name="diagnostic_admission">
                            </div>
                        </div>

                        <!-- Statut (peut-être caché avec valeur par défaut) -->
                        <input type="hidden" name="statut" value="EN_COURS">

                        <!-- Boutons d'action -->
                        <div class="col-sm-12">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="admission.php" type="button" class="btn btn-outline-secondary">
                                    Annuler
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer l'admission
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Inclure jQuery et Select2 JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.select2-search').select2({
        placeholder: "Rechercher un patient...",
        minimumInputLength: 2, // Nombre de caractères avant déclenchement de la recherche
        ajax: {
            url: 'recherche_patients.php', // Votre endpoint API
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    search: params.term // Terme de recherche
                };
            },
            processResults: function(data) {
                return {
                    results: data.items // Format attendu: [{id: 1, text: "Nom Patient"}, ...]
                };
            },
            cache: true
        }
    });
});
</script>
<?php include 'footer.php' ?>