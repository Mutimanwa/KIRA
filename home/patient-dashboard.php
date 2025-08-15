<?php include 'header.php'; ?>
<!-- App body starts -->
<div class="app-body">

    <!-- Ligne des buttons -->
    <div class="row mb-3">
        <div class="col-xl-12 col-sm-12">
            <div class="card">
                <div class="card-header bg-primary bg-opacity-10 d-flex align-items-center justify-content-between">
                    <h5 class="card-title text-primary">
                        <i class="ri-folder-2-line"></i>
                        Dosier Medicale Electronic <span class="fw-bold"> [ DMC ] </span>
                    </h5>
                    <a href="" class="btn btn-primary ">
                        <i class="ri-hotel-bed-line"></i>
                        Admettre le patient
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Ligne d'en-tête -->
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex">
                        <!-- Statistiques patient -->
                        <div class="d-flex align-items-center flex-wrap gap-4">
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-account-circle-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Carole</h4>
                                    <p class="m-0">Nom du patient</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-women-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Féminin</h4>
                                    <p class="m-0">Sexe</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-arrow-right-up-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">68</h4>
                                    <p class="m-0">Âge</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-primary rounded-5 me-2">
                                    <i class="ri-contrast-drop-2-line fs-3"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">O+</h4>
                                    <p class="m-0">Groupe sanguin</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box lg bg-secondary rounded-5 me-2">
                                    <i class="ri-stethoscope-line fs-3 text-body"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Dr. David</h4>
                                    <p class="m-0">Médecin traitant</p>
                                </div>
                            </div>
                        </div>
                        <!-- Fin des statistiques -->

                        <img src="../assets/images/patient4.png" class="img-7x rounded-circle ms-auto"
                            alt="Profil patient">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la ligne -->

    <!-- Ligne des indicateurs de santé -->
    <div class="row gx-3">
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="text-center">
                        <div class="icon-box md bg-danger rounded-5 m-auto">
                            <i class="ri-capsule-line fs-3"></i>
                        </div>
                        <div class="mt-3">
                            <h5>Tension artérielle</h5>
                            <p class="m-0 opacity-50">5 dernières consultations</p>
                        </div>
                    </div>
                    <div id="bpLevels"></div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>24/04/2024</div>
                            <div>140</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>16/04/2024</div>
                            <div>190</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>10/04/2024</div>
                            <div>230</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="text-center">
                        <div class="icon-box md bg-info rounded-5 m-auto">
                            <i class="ri-contrast-drop-2-line fs-3"></i>
                        </div>
                        <div class="mt-3">
                            <h5>Glycémie</h5>
                            <p class="m-0 opacity-50">5 dernières consultations</p>
                        </div>
                    </div>
                    <div id="sugarLevels"></div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>24/04/2024</div>
                            <div>140</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>16/04/2024</div>
                            <div>190</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>10/04/2024</div>
                            <div>230</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="text-center">
                        <div class="icon-box md bg-success rounded-5 m-auto">
                            <i class="ri-heart-pulse-line fs-3"></i>
                        </div>
                        <div class="mt-3">
                            <h5>Rythme cardiaque</h5>
                            <p class="m-0 opacity-50">5 dernières consultations</p>
                        </div>
                    </div>
                    <div id="heartRate"></div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>24/04/2024</div>
                            <div>110</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>16/04/2024</div>
                            <div>120</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>10/04/2024</div>
                            <div>100</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="text-center">
                        <div class="icon-box md bg-warning rounded-5 m-auto">
                            <i class="ri-flask-line fs-3"></i>
                        </div>
                        <div class="mt-3">
                            <h5>Cholestérol</h5>
                            <p class="m-0 opacity-50">5 dernières consultations</p>
                        </div>
                    </div>
                    <div id="clolesterolLevels"></div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>24/04/2024</div>
                            <div>180</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>16/04/2024</div>
                            <div>220</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>10/04/2024</div>
                            <div>230</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la ligne -->

    <!-- Ligne des données financières -->
    <div class="row gx-3">
        <div class="col-xl-6 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Remboursements assurance</h5>
                </div>
                <div class="card-body">
                    <div id="insuranceClaims"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Dépenses médicales</h5>
                </div>
                <div class="card-body">
                    <div id="medicalExpenses"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la ligne -->

    <!-- Ligne des consultations -->
    <div class="row gx-3">
        <div class="col-xl-6 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Consultations</h5>
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle truncate m-0">
                                <thead>
                                    <tr>
                                        <th>Médecin</th>
                                        <th>Date</th>
                                        <th>Service</th>
                                        <th>Rapports</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/user1.png" class="img-3x rounded-2"
                                                alt="Photo médecin"> Dr. Hector
                                        </td>
                                        <td>20/05/2024</td>
                                        <td>Dentiste</td>
                                        <td>
                                            <div class="d-inline-flex gap-1">
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewReportsModal1">
                                                    Voir rapports
                                                </button>
                                                <button class="btn btn-info btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Télécharger">
                                                    <i class="ri-file-download-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/user5.png" class="img-3x rounded-2"
                                                alt="Photo médecin"> Dr. Michel
                                        </td>
                                        <td>20/05/2024</td>
                                        <td>Urologue</td>
                                        <td>
                                            <div class="d-inline-flex gap-1">
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewReportsModal1">
                                                    Voir rapports
                                                </button>
                                                <button class="btn btn-info btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Télécharger">
                                                    <i class="ri-file-download-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Rapports médicaux</h5>
                </div>
                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle truncate m-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fichier</th>
                                        <th>Nom du rapport</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="icon-box md bg-primary rounded-2">
                                                <i class="ri-file-excel-2-line"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#!" class="link-primary text-truncate">Rapport clinique</a>
                                        </td>
                                        <td>28/05/2024</td>
                                        <td>
                                            <div class="d-inline-flex gap-1">
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#delRow">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                                <button class="btn btn-info btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Télécharger">
                                                    <i class="ri-file-download-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la ligne -->

    <!-- Ligne des activités -->
    <div class="row gx-3">
        <div class="col-xl-4 col-sm-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Activité santé</h5>
                </div>
                <div class="card-body">
                    <div class="scroll350">
                        <div id="healthActivity"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Pharmacie</h5>
                </div>
                <div class="card-body">
                    <div class="scroll350">
                        <div class="text-center">
                            <img class="img-fluid mb-3" src="../assets/images/reports.svg" style="width: 180px;"
                                alt="Illustration pharmacie">
                            <h2>980€</h2>
                            <span class="d-block mb-1">Dépense moyenne</span>
                            <span class="d-block mb-2"><b>+20%</b> vs mois dernier</span>
                            <p class="m-0 opacity-75">Gestion des ordonnances et des médicaments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Historique</h5>
                </div>
                <div class="card-body">
                    <div class="scroll350">
                        <div class="activity-feed">
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                    data-bs-title="Aujourd'hui 05:32:35">Il y a 1 heure</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Janie Mcdonald</a> - nouvelle ordonnance.
                                </div>
                                <div class="mb-1">Médicament - <a href="#" class="text-danger">Amocvmillin</a></div>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                    data-bs-title="Aujourd'hui 05:32:35">Il y a 1 heure</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Hector Banks</a> - rapport ajouté.
                                </div>
                                <div class="mb-1">Nom du rapport - <a href="#" class="text-danger">Lisymorpril</a></div>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                    data-bs-title="Aujourd'hui 05:32:35">Il y a 1 heure</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Hector Banks</a> - rapport ajouté.
                                </div>
                                <div class="mb-1">Nom du rapport - <a href="#" class="text-danger">Lisymorpril</a></div>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                    data-bs-title="Aujourd'hui 05:32:35">Il y a 1 heure</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Hector Banks</a> - rapport ajouté.
                                </div>
                                <div class="mb-1">Nom du rapport - <a href="#" class="text-danger">Lisymorpril</a></div>
                            </div>
                            <div class="feed-item">
                                <span class="feed-date pb-1" data-bs-toggle="tooltip"
                                    data-bs-title="Aujourd'hui 05:32:35">Il y a 1 heure</span>
                                <div class="mb-1">
                                    <a href="#" class="text-primary">Dr. Hector Banks</a> - rapport ajouté.
                                </div>
                                <div class="mb-1">Nom du rapport - <a href="#" class="text-danger">Lisymorpril</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la ligne -->



    <!-- Modal Suppression -->
    <div class="modal fade" id="delRow" tabindex="-1" aria-labelledby="delRowLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delRowLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    Confirmez-vous la suppression de ce rapport ?
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-end gap-2">
                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Fermer">Non</button>
                        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Fermer">Oui</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Voir rapports -->
    <div class="modal fade" id="viewReportsModal1" tabindex="-1" aria-labelledby="viewReportsModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewReportsModalLabel1">Rapports médicaux</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-sm-2">
                            <a href="#" class="d-flex flex-column bg-light p-2 rounded-2 text-center"
                                data-bs-target="#viewReportsModal2" data-bs-toggle="modal">
                                <img src="../assets/images/report.svg" class="img-fluid rounded-2"
                                    alt="Rapport médical">
                                <h6 class="mt-3 mb-1 text-truncate">Rapport clinique</h6>
                                <p class="m-0 small">10/05/2024</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Détail rapport -->
    <div class="modal fade" id="viewReportsModal2" tabindex="-1" aria-labelledby="viewReportsModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewReportsModalLabel2">
                        <div class="d-flex align-items-center">
                            <a href="#!" class="btn btn-sm btn-outline-primary me-2" data-bs-target="#viewReportsModal1"
                                data-bs-toggle="modal">
                                <i class="ri-arrow-left-wide-fill"></i>
                            </a>
                            Rapport clinique
                        </div>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <a href="#" class="d-flex flex-column bg-light p-2 rounded-2 text-center">
                                <img src="../assets/images/report.svg" class="img-fluid rounded-2"
                                    alt="Rapport médical">
                                <h6 class="mt-3 mb-1 text-truncate">Rapport clinique complet</h6>
                                <p class="m-0 small">10/05/2024</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include 'footer.php'; ?>