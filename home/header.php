<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TUNZA </title>

  <!-- Meta -->
  <meta property="og:description" content="Hopital management Système">
  <meta property="og:type" content="Website">
  <link rel="shortcut icon" href="../assets/images/favi.png">

      <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#0d6efd">
    <meta name="description" content="Système complet de gestion hospitalière KIRA">
    <link rel="manifest" href="/KIRA/manifest.json">
    <link rel="apple-touch-icon" href="/KIRA/assets/images/favi.png">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="KIRA">

        <!-- service worker -->
    <script src="/KIRA/pwa-register.js"></script>
    <!-- <script src="/KIRA/pwa-install-prompt.js"></script> -->

  <!-- *************
    ************ CSS Files *************
  ************* -->
  <link rel="stylesheet" href="../assets/fonts/remix/remixicon.css">
  <link rel="stylesheet" href="../assets/css/main.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">


  <!-- *************
    ************ Vendor Css Files *************
  ************ -->
  <link rel="stylesheet" href="../assets/vendor/dropzone/dropzone.min.css">
  <!-- Scrollbar CSS -->
  <link rel="stylesheet" href="../assets/vendor/overlay-scroll/OverlayScrollbars.min.css">
  <!-- VENDORS -->
  <link rel="stylesheet" href="../assets/vendor/datatables/dataTables.bs5.css">
  <link rel="stylesheet" href="../assets/vendor/datatables/dataTables.bs5-custom.css">
  <link rel="stylesheet" href="../assets/vendor/calendar/css/custom.css">
  <link rel="stylesheet" href="../assets/vendor/calendar/css/main.min.css">

  <link rel="stylesheet" href="../assets/vendor/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendor/owlcarousel/owl.theme.css">
</head>

<body>

  <!-- Loading starts -->
  <!-- <div id="loading-wrapper">
      <div class='spin-wrapper'>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
        <div class='spin'>
          <div class='inner'></div>
        </div>
      </div>
    </div> -->
  <!-- Loading ends -->

  <!-- Page wrapper starts -->
  <div class="page-wrapper">

    <!-- App header starts -->
    <div class="app-header d-flex align-items-center">

      <!-- Toggle buttons starts -->
      <div class="d-flex">
        <button class="toggle-sidebar">
          <i class="ri-menu-line"></i>
        </button>
        <button class="pin-sidebar">
          <i class="ri-menu-line"></i>
        </button>
      </div>
      <!-- Toggle buttons ends -->

      <!-- App brand starts -->
      <div class="app-brand ms-3">
        <a href="index.html" class="d-lg-block d-none">
          <img src="../assets/images/logo.svg" class="logo" alt="MedFlex">
        </a>
        <a href="index.html" class="d-lg-none d-md-block">
          <img src="../assets/images/logo-sm.svg" class="logo" alt="MedFlex">
        </a>
      </div>
      <!-- App brand ends -->

      <!-- App header actions starts -->
      <div class="header-actions">

        <!-- Search container starts -->
        <div class="search-container d-lg-block d-none mx-3">
          <input type="text" class="form-control" id="searchId" placeholder="Search">
          <i class="ri-search-line"></i>
        </div>
        <!-- Search container ends -->

        <!-- Header actions starts -->
        <div class="d-lg-flex d-none gap-3">

          <!-- Select country dropdown starts -->
          <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center text-decoration-none mt-1" href="#" role="button"
              data-bs-toggle="dropdown">
              <img src="../assets/images/flags/1x1/fr.svg" class="flag-icon rounded-circle" width="25" alt="FR">
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm py-2">
              <li>
                <h6 class="dropdown-header px-3">Langues disponibles</h6>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center py-2" href="#">
                  <img src="../assets/images/flags/1x1/us.svg" class="flag-icon me-2" width="20" alt="EN">
                  <span>English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center py-2" href="#">
                  <img src="../assets/images/flags/1x1/br.svg" class="flag-icon me-2" width="20" alt="ES">
                  <span>Español</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- Select country dropdown ends -->



          <!-- Notifications dropdown starts -->
          <div class="dropdown">
            <a class="position-relative icon-box rounded-circle sm d-flex align-items-center text-decoration-none"
              href="#" role="button" data-bs-toggle="dropdown">
              <i class="ri-notification-3-line text-white fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger pulse">
                9+ <span class="visually-hidden">notifications</span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-notifications shadow-lg w-320">
              <div class="d-flex justify-content-between align-items-center px-3 pt-2">
                <h6 class="mb-0">Notifications</h6>
                <span class="badge bg-primary rounded-pill">3 nouvelles</span>
              </div>
              <hr class="my-2">
              <div class="notification-list">
                <a href="#" class="dropdown-item py-2 d-flex gap-3">
                  <div class="icon-box sm bg-info bg-opacity-10 text-info rounded-2 flex-shrink-0">
                    <i class="ri-user-add-line"></i>
                  </div>
                  <div>
                    <h6 class="mb-1">Nouvelle admission</h6>
                    <p class="small text-muted mb-0">Patient: Jean Dupont</p>
                    <small class="text-muted">Il y a 5 min</small>
                  </div>
                </a>
                <!-- Plus de notifications... -->
              </div>
              <hr class="my-1">
              <div class="px-3 pb-2">
                <a href="#" class="btn btn-outline-primary w-100">Voir tout</a>
              </div>
            </div>
          </div>
          <!-- Notifications dropdown ends -->
        </div>
        <!-- Header actions ends -->

        <!-- Header user settings starts -->
        <div class="dropdown">
          <a class="dropdown-toggle d-flex align-items-center text-decoration-none" href="#" role="button"
            data-bs-toggle="dropdown">
            <div class="avatar avatar-sm me-2">
              <span class="avatar-title bg-inline-warning rounded-circle ms-2 sm icon-box">JB</span>
              <span class="status-badge bg-success"></span>
            </div>
            <span class="d-none ">Dr. James Bruton</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm py-2">
            <li>
              <div class="px-3 py-2">
                <p class="small text-muted mb-1">Connecté en tant que</p>
                <h6 class="mb-0">Dr. James Bruton</h6>
              </div>
            </li>
            <li>
              <hr class="dropdown-divider my-1">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center py-2" href="profils.php">
                <i class="ri-user-line me-2"></i> Mon profil
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center py-2" href="parametres.php">
                <i class="ri-settings-3-line me-2"></i> Paramètres
              </a>
            </li>
            <li>
              <hr class="dropdown-divider my-1">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center py-2 text-danger" href="index.html">
                <i class="ri-logout-box-r-line me-2"></i> Déconnexion
              </a>
            </li>
          </ul>
        </div>
        <!-- Header user settings ends -->

      </div>
      <!-- App header actions ends -->

    </div>
    <!-- App header ends -->

    <!-- Main container starts -->
    <div class="main-container">

      <!-- Sidebar wrapper starts -->
      <nav id="sidebar" class="sidebar-wrapper">

        <!-- Sidebar profile starts -->
        <div class="sidebar-profile">
          <img src="../assets/images/user4.png" class="img-shadow img-3x me-3 rounded-5" alt="Hospital Admin Templates">
          <div class="m-0">
            <h5 class="mb-1 profile-name text-nowrap text-truncate">Dr. James Bruton</h5>
            <p class="m-0 small profile-name text-nowrap text-truncate">Dept Admin</p>
          </div>
        </div>
        <!-- Sidebar profile ends -->

        <!-- Sidebar menu starts -->
        <div class="sidebarMenuScroll">
          <ul class="sidebar-menu">

            <!-- Tableau de bord -->
            <li class="active current-page">
              <a href="index.html">
                <i class="ri-home-6-line"></i>
                <span class="menu-text">Tableau de bord</span>
              </a>
            </li>

            <!-- 1. Gestion des Patients -->
            <li class="divider mx-3 my-2 text-muted">Gestion des Patients</li>
            <li class="treeview">
              <a href="#"><i class="ri-user-line"></i><span class="menu-text">Dossier Patient</span></a>
              <ul class="treeview-menu">
                <li><a href="patients-list.php">Liste des patients</a></li>
                <li><a href="admission.php">Admission</a></li>
                <li><a href="dossier-medical.php">Dossier médical complet</a></li>
                <li><a href="historique-patient.php">Historique</a></li>
                <li><a href="recherche-patient.php">Recherche avancée</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-hotel-bed-line"></i><span class="menu-text">Hospitalisation</span></a>
              <ul class="treeview-menu">
                <li><a href="planning-hospitalisation.php">Planning</a></li>
                <li><a href="suivi-hospitalisation.php">Suivi quotidien</a></li>
                <li><a href="sortie-patient.php">Gestion des sorties</a></li>
              </ul>
            </li>
            <li><a href="appointments.php"><i class="ri-calendar-event-line"></i><span
                  class="menu-text">Rendez-vous</span></a></li>

            <!-- 2. Services Cliniques -->
            <li class="divider mx-3 my-2 text-muted ">Services Cliniques</li>

            <li class="treeview">
              <a href="#"><i class="ri-stethoscope-line"></i><span class="menu-text">Consultations</span></a>
              <ul class="treeview-menu">
                <li><a href="consultations-generales.php">Générales</a></li>
                <li><a href="consultations-specialistes.php">Spécialistes</a></li>
                <li><a href="teleconsultations.php">Téléconsultations</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-hearts-line"></i><span class="menu-text">Maternité</span></a>
              <ul class="treeview-menu">
                <li><a href="suivi-prenatal.php">Suivi prénatal</a></li>
                <li><a href="accouchement.php">Accouchement</a></li>
                <li><a href="post-partum.php">Post-partum</a></li>
                <li><a href="planning-familial.php">Planning familial</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-heart-pulse-line"></i><span class="menu-text">Pédiatrie</span></a>
              <ul class="treeview-menu">
                <li><a href="nouveau-nes.php">Soins nouveau-nés</a></li>
                <li><a href="vaccinations.php">Vaccinations</a></li>
                <li><a href="croissance.php">Suivi croissance</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-scissors-line"></i><span class="menu-text">Chirurgie</span></a>
              <ul class="treeview-menu">
                <li><a href="planning-chirurgie.php">Planning opératoire</a></li>
                <li><a href="bloc-operatoire.php">Bloc opératoire</a></li>
                <li><a href="interventions.php">Interventions</a></li>
                <li><a href="suivi-postop.php">Suivi post-op</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-first-aid-kit-line"></i><span class="menu-text">Urgences</span></a>
              <ul class="treeview-menu">
                <li><a href="tri.php">Triage</a></li>
                <li><a href="admission-rapide.php">Admission rapide</a></li>
                <li><a href="soins-immediats.php">Soins immédiats</a></li>
                <li><a href="registre-urgences.php">Registre des urgences</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-mental-health-line"></i><span class="menu-text">Psychiatrie</span></a>
              <ul class="treeview-menu">
                <li><a href="evaluations-psy.php">Évaluations</a></li>
                <li><a href="therapies.php">Thérapies</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-restaurant-line"></i><span class="menu-text">Nutrition</span></a>
              <ul class="treeview-menu">
                <li><a href="bilans-nutrition.php">Bilans</a></li>
                <li><a href="regimes.php">Régimes spécifiques</a></li>
              </ul>
            </li>

            <!-- 3. Prescriptions & Examens -->
            <li class="divider mx-3 my-2 text-muted">Prescriptions & Examens</li>
            <li class="treeview">
              <a href="#"><i class="ri-capsule-line"></i><span class="menu-text">Prescriptions</span></a>
              <ul class="treeview-menu">
                <li><a href="prescriptions.php">Nouvelle prescription</a></li>
                <li><a href="validation-prescription.php">Validation</a></li>
                <li><a href="historique-prescriptions.php">Historique</a></li>
                <li><a href="interactions-medicamenteuses.php">Interactions</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-test-tube-line"></i><span class="menu-text">Laboratoire</span></a>
              <ul class="treeview-menu">
                <li><a href="demandes-examens.php">Demandes</a></li>
                <li><a href="resultats-lab.php">Résultats</a></li>
                <li><a href="biologie.php">Biologie</a></li>
                <li><a href="microbiologie.php">Microbiologie</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-image-line"></i><span class="menu-text">Imagerie Médicale</span></a>
              <ul class="treeview-menu">
                <li><a href="demandes-imagerie.php">Demandes</a></li>
                <li><a href="radiologie.php">Radiologie</a></li>
                <li><a href="echographie.php">Échographie</a></li>
                <li><a href="irm-scanner.php">IRM/Scanner</a></li>
                <li><a href="pacs.php">Stockage PACS</a></li>
              </ul>
            </li>
            <li><a href="banque-sang.php"><i class="ri-drop-line"></i><span class="menu-text">Banque du sang</span></a>
            </li>

            <!-- 4. Facturation & Finances -->
            <li class="divider mx-3 my-2 text-muted">Facturation & Finances</li>
            <li class="treeview">
              <a href="#"><i class="ri-money-euro-box-line"></i><span class="menu-text">Facturation</span></a>
              <ul class="treeview-menu">
                <li><a href="facturation.php">Factures patients</a></li>
                <li><a href="tarifs.php">Grille tarifaire</a></li>
                <li><a href="devis.php">Devis</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-bank-card-line"></i><span class="menu-text">Paiements</span></a>
              <ul class="treeview-menu">
                <li><a href="encaissements.php">Encaissements</a></li>
                <li><a href="remboursements.php">Remboursements</a></li>
                <li><a href="assurances.php">Assurances</a></li>
                <li><a href="mutuelles.php">Mutuelles</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-file-chart-line"></i><span class="menu-text">Rapports Financiers</span></a>
              <ul class="treeview-menu">
                <li><a href="recettes-depenses.php">Recettes/Dépenses</a></li>
                <li><a href="indicateurs-financiers.php">Indicateurs</a></li>
                <li><a href="comptabilite.php">Comptabilité</a></li>
              </ul>
            </li>

            <!-- 5. Pharmacie & Stocks -->
            <li class="divider mx-3 my-2 text-muted">Pharmacie & Stocks</li>
            <li class="treeview">
              <a href="#"><i class="ri-capsule-line"></i><span class="menu-text">Gestion Pharmacie</span></a>
              <ul class="treeview-menu">
                <li><a href="stock-pharmacie.php">Stock</a></li>
                <li><a href="dispensation.php">Dispensation</a></li>
                <li><a href="medicaments.php">Médicaments</a></li>
                <li><a href="generiques.php">Génériques</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-boxing-line"></i><span class="menu-text">Gestion des Stocks</span></a>
              <ul class="treeview-menu">
                <li><a href="inventaire.php">Inventaire</a></li>
                <li><a href="commandes.php">Commandes</a></li>
                <li><a href="fournisseurs.php">Fournisseurs</a></li>
                <li><a href="perissables.php">Produits périssables</a></li>
              </ul>
            </li>

            <!-- 6. Ressources Humaines -->
            <li class="divider mx-3 my-2 text-muted">Ressources Humaines</li>
            <li class="treeview">
              <a href="#"><i class="ri-group-line"></i><span class="menu-text">Personnel</span></a>
              <ul class="treeview-menu">
                <li><a href="gestion-personnel.php">Fiches personnelles</a></li>
                <li><a href="contrats.php">Contrats</a></li>
                <li><a href="qualifications.php">Qualifications</a></li>
                <li><a href="formations.php">Formations</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-calendar-check-line"></i><span class="menu-text">Plannings</span></a>
              <ul class="treeview-menu">
                <li><a href="planning-general.php">Planning général</a></li>
                <li><a href="gardes.php">Gardes</a></li>
                <li><a href="conges.php">Gestion des congés</a></li>
              </ul>
            </li>
            <li><a href="paie.php"><i class="ri-wallet-line"></i><span class="menu-text">Paie</span></a></li>

            <!-- 7. Logistique & Maintenance -->
            <li class="divider mx-3 my-2 text-muted">Logistique & Maintenance</li>
            <li class="treeview">
              <a href="#"><i class="ri-hotel-bed-line"></i><span class="menu-text">Gestion des Lits</span></a>
              <ul class="treeview-menu">
                <li><a href="occupation-lits.php">Occupation</a></li>
                <li><a href="disponibilite-lits.php">Disponibilité</a></li>
                <li><a href="affectation-lits.php">Affectation</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-car-line"></i><span class="menu-text">Ambulance</span></a>
              <ul class="treeview-menu">
                <li><a href="gestion-ambulances.php">Flotte</a></li>
                <li><a href="interventions-ambulances.php">Interventions</a></li>
                <li><a href="tracking-ambulances.php">Tracking</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-tools-line"></i><span class="menu-text">Maintenance</span></a>
              <ul class="treeview-menu">
                <li><a href="maintenance-equipements.php">Équipements</a></li>
                <li><a href="maintenance-batiments.php">Bâtiments</a></li>
                <li><a href="tickets-maintenance.php">Tickets</a></li>
              </ul>
            </li>
            <li><a href="restauration.php"><i class="ri-restaurant-line"></i><span
                  class="menu-text">Restauration</span></a></li>

            <!-- 8. Qualité & Certification -->
            <li class="divider mx-3 my-2 text-muted">Qualité & Certification</li>
            <li class="treeview">
              <a href="#"><i class="ri-medal-line"></i><span class="menu-text">Gestion Qualité</span></a>
              <ul class="treeview-menu">
                <li><a href="indicateurs-qualite.php">Indicateurs</a></li>
                <li><a href="certifications.php">Certifications</a></li>
                <li><a href="audits.php">Audits</a></li>
              </ul>
            </li>
            <li><a href="gestion-risques.php"><i class="ri-alert-line"></i><span class="menu-text">Gestion des
                  risques</span></a></li>
            <li><a href="hygiene.php"><i class="ri-sanitizer-line"></i><span class="menu-text">Hygiène
                  hospitalière</span></a></li>

            <!-- 9. Système d'Information -->
            <li class="divider mx-3 my-2 text-muted">Système d'Information</li>
            <li class="treeview">
              <a href="#"><i class="ri-shield-user-line"></i><span class="menu-text">Sécurité</span></a>
              <ul class="treeview-menu">
                <li><a href="gestion-utilisateurs.php">Utilisateurs</a></li>
                <li><a href="droits-acces.php">Droits d'accès</a></li>
                <li><a href="audit-acces.php">Audit des accès</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-database-line"></i><span class="menu-text">Données</span></a>
              <ul class="treeview-menu">
                <li><a href="backup.php">Sauvegarde</a></li>
                <li><a href="archivage.php">Archivage</a></li>
                <li><a href="interoperabilite.php">Interopérabilité</a></li>
              </ul>
            </li>
            <li><a href="parametres.php"><i class="ri-settings-3-line"></i><span class="menu-text">Paramètres</span></a>
            </li>

            <!-- 10. Reporting & Analytics -->
            <li class="divider mx-3 my-2 text-muted">Reporting & Analytics</li>
            <li class="treeview">
              <a href="#"><i class="ri-bar-chart-line"></i><span class="menu-text">Rapports Cliniques</span></a>
              <ul class="treeview-menu">
                <li><a href="activite-clinique.php">Activité clinique</a></li>
                <li><a href="morbidite.php">Morbidité</a></li>
                <li><a href="mortalite.php">Mortalité</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="ri-pie-chart-line"></i><span class="menu-text">Statistiques</span></a>
              <ul class="treeview-menu">
                <li><a href="statistiques-patients.php">Patients</a></li>
                <li><a href="statistiques-activite.php">Activité</a></li>
                <li><a href="tableaux-bord.php">Tableaux de bord</a></li>
              </ul>
            </li>
            <li><a href="export-donnees.php"><i class="ri-download-line"></i><span class="menu-text">Export de
                  données</span></a></li>

            <!-- 11. Communication -->
            <li class="divider mx-3 my-2 text-muted">Communication</li>
            <li><a href="messagerie.php"><i class="ri-mail-line"></i><span class="menu-text">Messagerie
                  interne</span></a></li>
            <li><a href="portail-patient.php"><i class="ri-user-voice-line"></i><span class="menu-text">Portail
                  patient</span></a></li>
            <li><a href="annonces.php"><i class="ri-megaphone-line"></i><span class="menu-text">Annonces</span></a></li>

            <!-- 12. Aide -->
            <li class="divider mx-3 my-2 text-muted">Aide</li>
            <li><a href="documentation.php"><i class="ri-book-line"></i><span class="menu-text">Documentation</span></a>
            </li>
            <li><a href="support.php"><i class="ri-customer-service-line"></i><span class="menu-text">Support
                  technique</span></a></li>
            <li><a href="logs.php"><i class="ri-bug-line"></i><span class="menu-text">Journal système</span></a></li>
          </ul>
        </div>
        <!-- Sidebar menu ends -->
        <!-- Sidebar contact starts -->
        <div class="sidebar-contact">
          <p class="fw-light mb-1 text-nowrap text-truncate">Emergency Contact</p>
          <h5 class="m-0 lh-1 text-nowrap text-truncate">66352116</h5>
          <i class="ri-phone-line"></i>
        </div>
        <!-- Sidebar contact ends -->

      </nav>
      <!-- Sidebar wrapper ends -->

      <!-- App container starts -->
      <div class="app-container">

        <!-- App hero header starts -->
        <div class="app-hero-header d-flex align-items-center">

          <!-- Breadcrumb starts -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item text-primary" aria-current="page">
              Dashboard
            </li>
          </ol>
          <!-- Breadcrumb ends -->

        </div>
        <!-- App Hero header ends -->