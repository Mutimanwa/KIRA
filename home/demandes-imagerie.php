<?php include 'header.php'; ?>

<div class="app-body">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary bg-opacity-10 text-primary">
                    <i class="ri-image-add-line me-2"></i> Demande d'Imagerie
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="patientName" class="form-label">Nom du Patient</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Entrez le nom du patient">
                        </div>
                        <div class="mb-3">
                            <label for="examType" class="form-label">Type d'Examen</label>
                            <select class="form-select" id="examType">
                                <option selected>Choisissez le type d'examen</option>
                                <option value="IRM">IRM</option>
                                <option value="Scanner">Scanner</option>
                                <option value="Radio">Radio</option>
                                <option value="Echographie">Échographie</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="prescription" class="form-label">Prescription Médicale</label>
                            <textarea class="form-control" id="prescription" rows="3" placeholder="Joindre la prescription médicale"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Soumettre la demande</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
