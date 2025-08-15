<?php include 'header.php'; ?>

<style>
    /* Styles pour cacher les étapes */
    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
    }
</style>

<div class="app-body">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-10">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">
                    <i class="ri-user-add-line me-2"></i> Enregistrer une nouvelle admission
                </h5>
                <a href="admission.php" class="btn btn-outline-secondary">
                    <i class="ri-arrow-left-line"></i> Retour
                </a>
            </div>

            <div class="progress mb-4" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <!-- listes des etape d'admission -->
            <div id="admissionForm">

                <div class="card shadow-sm mb-4 form-step active" id="step1">
                    <div class="card-header bg-primary bg-opacity-10 text-primary">
                        <h5 class="card-title mb-0">
                            <i class="ri-account-circle-line me-2"></i> Étape 1 : Informations du patient
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row gx-3">
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a1">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a2">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a2" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a3">Age <span class="text-danger">*</span></label>
                                    <select class="form-select" id="a3">
                                        <option value="0">Select Age</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="selectGender1">Gender <span
                                            class="text-danger">*</span></label>
                                    <div class="m-0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="selectGenderOptions"
                                                id="selectGender1" value="male">
                                            <label class="form-check-label" for="selectGender1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="selectGenderOptions"
                                                id="selectGender2" value="female">
                                            <label class="form-check-label" for="selectGender2">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a4">Create ID <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a4" placeholder="Create Unique ID">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a5">Email ID <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="a5" placeholder="Enter Email ID">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a6">Mobile Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="a6" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a7">Marital Status</label>
                                    <select class="form-select" id="a7">
                                        <option value="0">Select</option>
                                        <option value="1">Married</option>
                                        <option value="2">Un Married</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a8">Occupation</label>
                                    <select class="form-select" id="a8">
                                        <option value="0">Select</option>
                                        <option value="1">Teacher</option>
                                        <option value="2">Engineer</option>
                                        <option value="3">Business</option>
                                        <option value="4">Bank</option>
                                        <option value="5">Army</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a9">Blood Group <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="a9">
                                        <option value="0">Select</option>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="4">B-</option>
                                        <option value="5">O+</option>
                                        <option value="6">O-</option>
                                        <option value="7">AB+</option>
                                        <option value="8">AB-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a10">Blood Presure</label>
                                    <input type="text" class="form-control" id="a10" placeholder="Enter Blood Presure">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a11">Sugar</label>
                                    <input type="text" class="form-control" id="a11" placeholder="Enter Sugar Levels">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a12">Address</label>
                                    <input type="text" class="form-control" id="a12" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a13">City</label>
                                    <input type="text" class="form-control" id="a13" placeholder="Enter City">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a14">State</label>
                                    <select class="form-select" id="a14">
                                        <option value="0">Select</option>
                                        <option value="1">Alabama</option>
                                        <option value="2">Alaska</option>
                                        <option value="3">Arizona</option>
                                        <option value="4">California</option>
                                        <option value="5">Florida</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="a15">Postal Code</label>
                                    <input type="text" class="form-control" id="a15" placeholder="Enter Postal Code">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div id="dropzone" class="mb-3">
                                    <div action="/upload" class="dropzone dz-clickable" id="demo-upload">
                                        <div class="dz-message">
                                            <button type="button" class="dz-button">
                                                Click here to upload or Drop your reports here.</button>
                                            <h5>Upload your health reports.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
                    </div>
                </div>

                <div class="card shadow-sm mb-4 form-step" id="step2">
                    <div class="card-header bg-success bg-opacity-10 text-success">
                        <h5 class="card-title mb-0">
                            <i class="ri-hospital-bed-line me-2"></i> Étape 2 : Détails de l'admission
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="date_admission" class="form-label">Date et heure d'admission <span
                                        class="text-danger">*</span></label>
                                <input type="datetime-local" class="form-control" id="date_admission"
                                    name="date_admission" required>
                            </div>
                            <div class="col-md-6">
                                <label for="service_admission" class="form-label">Service <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="service_admission" name="service_admission" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="Pediatrie"></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="motif" class="form-label">Motif de l'admission</label>
                                <textarea class="form-control" id="motif" name="motif" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
                    </div>
                </div>

                <div class="card shadow-sm mb-4 form-step" id="step3">
                    <div class="card-header bg-info bg-opacity-10 text-info">
                        <h5 class="card-title mb-0">
                            <i class="ri-secure-payment-line me-2"></i> Étape 3 : Informations sur l'assurance
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="type_assurance" class="form-label">Type d'assurance</label>
                                <input type="text" class="form-control" id="type_assurance" name="type_assurance">
                            </div>
                            <div class="col-md-6">
                                <label for="numero_police" class="form-label">Numéro de police</label>
                                <input type="text" class="form-control" id="numero_police" name="numero_police">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
                        <button type="submit" class="btn btn-success">
                            <i class="ri-check-line me-1"></i> Terminer
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    let currentStep = 1;
    const totalSteps = 3;

    function updateProgressBar() {
        const progress = (currentStep / totalSteps) * 100;
        document.querySelector('.progress-bar').style.width = progress + '%';
        document.querySelector('.progress-bar').setAttribute('aria-valuenow', progress);
    }

    function showStep(stepNumber) {
        document.querySelectorAll('.form-step').forEach(step => {
            step.classList.remove('active');
        });
        document.getElementById(`step${stepNumber}`).classList.add('active');
    }

    function nextStep() {
        if (currentStep < totalSteps) {
            // Validation simple de l'étape actuelle
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const requiredFields = currentStepElement.querySelectorAll('[required]');
            let allFieldsValid = true;
            requiredFields.forEach(field => {
                if (!field.value) {
                    allFieldsValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (allFieldsValid) {
                currentStep++;
                showStep(currentStep);
                updateProgressBar();
            } else {
                alert("Veuillez remplir tous les champs obligatoires.");
            }
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
            updateProgressBar();
        }
    }

    // Afficher la première étape au chargement de la page
    document.addEventListener('DOMContentLoaded', () => {
        showStep(currentStep);
        updateProgressBar();
    });
</script>

<?php include 'footer.php'; ?>