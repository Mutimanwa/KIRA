-- Création de la base de données principale
CREATE DATABASE IF NOT EXISTS `hospital_management_system`
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `hospital_management_system`;

-- Table des versions du système
CREATE TABLE `system_versions` (
  `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` enum('DEMO','STANDARD','PRO','ENTERPRISE') NOT NULL COMMENT 'Nom de la version',
  `nom_complet` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT 'Disponible à l''achat',
  `is_default` tinyint(1) DEFAULT 0 COMMENT 'Version par défaut pour nouveaux établissements',
  `modules_inclus` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Liste JSON des modules inclus' CHECK (json_valid(`modules_inclus`)),
  `modules_optionnels` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Modules disponibles en option' CHECK (json_valid(`modules_optionnels`)),
  `max_utilisateurs` int(10) UNSIGNED DEFAULT NULL,
  `max_patients` int(10) UNSIGNED DEFAULT NULL,
  `max_etablissements` int(10) UNSIGNED DEFAULT NULL COMMENT 'Pour version ENTERPRISE',
  `storage_limit_gb` decimal(10,2) DEFAULT NULL,
  `prix_mensuel` decimal(10,2) DEFAULT NULL,
  `prix_annuel` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertion des versions de base
INSERT INTO `system_versions` (`code`, `nom_complet`, `description`, `is_active`, `is_default`, `modules_inclus`, `modules_optionnels`, `max_utilisateurs`, `max_patients`, `max_etablissements`, `storage_limit_gb`, `prix_mensuel`, `prix_annuel`) VALUES
('DEMO', 'Version Démo', 'Version limitée pour évaluation', 1, 0,
  '["PATIENTS", "CONSULTATIONS", "AGENDA"]',
  '[]',
  2, 50, 1, 0.50, 0.00, 0.00),
('STANDARD', 'Version Standard', 'Pour petites cliniques et cabinets', 1, 1,
  '["PATIENTS", "CONSULTATIONS", "AGENDA", "PHARMACIE", "LABORATOIRE", "FACTURATION"]',
  '["RADIOLOGIE", "HOSPITALISATION"]',
  10, 500, 1, 2.00, 29.99, 299.00),
('PRO', 'Version Professionnelle', 'Pour hôpitaux moyens', 1, 0,
  '["PATIENTS", "CONSULTATIONS", "AGENDA", "PHARMACIE", "LABORATOIRE", "FACTURATION", "RADIOLOGIE", "HOSPITALISATION", "RH"]',
  '["BLOC_OPERATOIRE", "MATERNITE", "QUALITE"]',
  50, 5000, 1, 10.00, 59.99, 599.00),
('ENTERPRISE', 'Version Entreprise', 'Solution complète multi-établissements', 1, 0,
  '["PATIENTS", "CONSULTATIONS", "AGENDA", "PHARMACIE", "LABORATOIRE", "FACTURATION", "RADIOLOGIE", "HOSPITALISATION", "RH", "BLOC_OPERATOIRE", "MATERNITE", "QUALITE", "MAINTENANCE", "REPORTING"]',
  '["TELEMEDECINE", "MOBILE_APP", "INTERFACE_API"]',
  100, NULL, NULL, 50.00, 199.99, 1999.00);

-- Table des modules disponibles
CREATE TABLE `system_modules` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `categorie` enum('CLINIQUE','ADMINISTRATIF','TECHNIQUE','LOGISTIQUE','FINANCIER','RH','QUALITE','COMMUNICATION') NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `route` varchar(100) DEFAULT NULL COMMENT 'Route principale du module',
  `is_core` tinyint(1) DEFAULT 0 COMMENT 'Module indispensable au système',
  `is_active` tinyint(1) DEFAULT 1,
  `min_version_id` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'Version minimale requise',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `min_version_id` (`min_version_id`),
  CONSTRAINT `system_modules_ibfk_1` FOREIGN KEY (`min_version_id`) REFERENCES `system_versions` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertion des modules de base
INSERT INTO `system_modules` (`code`, `nom`, `description`, `categorie`, `icon`, `route`, `is_core`, `is_active`, `min_version_id`) VALUES
('PATIENTS', 'Gestion des Patients', 'Dossiers patients, admissions, antécédents', 'CLINIQUE', 'users', '/patients', 1, 1, 1),
('CONSULTATIONS', 'Consultations', 'Gestion des consultations médicales', 'CLINIQUE', 'stethoscope', '/consultations', 1, 1, 1),
('AGENDA', 'Agenda & Rendez-vous', 'Planification des consultations', 'CLINIQUE', 'calendar', '/agenda', 0, 1, 1),
('PHARMACIE', 'Pharmacie', 'Gestion des stocks et prescriptions', 'CLINIQUE', 'pills', '/pharmacie', 0, 1, 2),
('LABORATOIRE', 'Laboratoire', 'Examens biologiques et résultats', 'CLINIQUE', 'flask', '/laboratoire', 0, 1, 2),
('RADIOLOGIE', 'Radiologie', 'Examens d''imagerie médicale', 'CLINIQUE', 'x-ray', '/radiologie', 0, 1, 2),
('HOSPITALISATION', 'Hospitalisation', 'Gestion des lits et séjours', 'CLINIQUE', 'bed', '/hospitalisation', 0, 1, 2),
('BLOC_OPERATOIRE', 'Bloc Opératoire', 'Planification des interventions', 'CLINIQUE', 'scalpel', '/bloc-operatoire', 0, 1, 3),
('MATERNITE', 'Maternité', 'Suivi des grossesses et accouchements', 'CLINIQUE', 'baby-carriage', '/maternite', 0, 1, 3),
('URGENCES', 'Urgences', 'Gestion des admissions urgentes', 'CLINIQUE', 'ambulance', '/urgences', 0, 1, 3),
('FACTURATION', 'Facturation', 'Facturation et comptabilité', 'FINANCIER', 'receipt', '/facturation', 0, 1, 2),
('RH', 'Ressources Humaines', 'Gestion du personnel', 'RH', 'id-card', '/rh', 0, 1, 3),
('QUALITE', 'Qualité & Certification', 'Indicateurs qualité et certifications', 'QUALITE', 'award', '/qualite', 0, 1, 3),
('MAINTENANCE', 'Maintenance', 'Gestion des équipements', 'LOGISTIQUE', 'tools', '/maintenance', 0, 1, 3),
('REPORTING', 'Reporting', 'Tableaux de bord et statistiques', 'ADMINISTRATIF', 'chart-bar', '/reporting', 0, 1, 3),
('ADMINISTRATION', 'Administration', 'Configuration du système', 'ADMINISTRATIF', 'cog', '/admin', 1, 1, 1),
('TELEMEDECINE', 'Télémédecine', 'Consultations à distance', 'CLINIQUE', 'video', '/telemedecine', 0, 1, 4),
('MOBILE_APP', 'Application Mobile', 'Accès mobile pour professionnels', 'TECHNIQUE', 'mobile-alt', '/mobile', 0, 1, 4),
('INTERFACE_API', 'Interface API', 'Intégration avec autres systèmes', 'TECHNIQUE', 'code', '/api', 0, 1, 4),
('COMMUNICATION', 'Communication Interne', 'Messages, Annonces, Notifications', 'COMMUNICATION', 'comments', '/communication', 0, 1, 3);

-- Table des établissements (hôpitaux/cliniques)
CREATE TABLE `etablissements` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL DEFAULT (uuid()),
  `version_id` tinyint(3) UNSIGNED NOT NULL,
  `code_finess` varchar(9) DEFAULT NULL COMMENT 'Identifiant officiel',
  `nom` varchar(200) NOT NULL,
  `raison_sociale` varchar(250) DEFAULT NULL,
  `siret` varchar(14) DEFAULT NULL,
  `type_etablissement` enum('CHU','CHR','CH','CLINIQUE_PRIVEE','HOPITAL_PRIVE','ESPIC','CABINET','MAISON_SANTE') NOT NULL,
  `statut_juridique` enum('PUBLIC','PRIVE_LUCRATIF','PRIVE_NON_LUCRATIF','ASSOCIATION') NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` varchar(100) DEFAULT 'France',
  `region` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `site_web` varchar(255) DEFAULT NULL,
  `logo_url` varchar(500) DEFAULT NULL,
  `directeur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `directeur_medical_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre_lits` smallint(5) UNSIGNED DEFAULT 0,
  `nombre_places` smallint(5) UNSIGNED DEFAULT 0,
  `nombre_professionnels` smallint(5) UNSIGNED DEFAULT 0,
  `modules_actifs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Modules activés pour cet établissement' CHECK (json_valid(`modules_actifs`)),
  `modules_optionnels` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Modules optionnels souscrits' CHECK (json_valid(`modules_optionnels`)),
  `date_ouverture` date DEFAULT NULL,
  `date_fermeture` date DEFAULT NULL,
  `date_migration` date DEFAULT NULL COMMENT 'Date de migration vers le système',
  `statut` enum('ACTIF','FERME_TEMPORAIRE','FERME_DEFINITIF','EN_CREATION') DEFAULT 'ACTIF',
  `configurations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Configurations spécifiques' CHECK (json_valid(`configurations`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  UNIQUE KEY `code_finess` (`code_finess`),
  KEY `version_id` (`version_id`),
  CONSTRAINT `etablissements_ibfk_1` FOREIGN KEY (`version_id`) REFERENCES `system_versions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des abonnements des établissements
CREATE TABLE `etablissement_abonnements` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `version_id` tinyint(3) UNSIGNED NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `montant_ht` decimal(10,2) NOT NULL,
  `taux_tva` decimal(5,2) NOT NULL DEFAULT 20.00,
  `periodicite` enum('MENSUEL','TRIMESTRIEL','ANNUEL') NOT NULL DEFAULT 'MENSUEL',
  `mode_paiement` enum('CARTE','VIREMENT','PRELEVEMENT','CHEQUE','ESPECES') DEFAULT NULL,
  `reference_contrat` varchar(100) DEFAULT NULL,
  `statut` enum('ACTIF','SUSPENDU','RESILIE','EN_ATTENTE') DEFAULT 'ACTIF',
  `modules_inclus` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Modules inclus dans l''abonnement' CHECK (json_valid(`modules_inclus`)),
  `modules_optionnels` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Modules optionnels souscrits' CHECK (json_valid(`modules_optionnels`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `version_id` (`version_id`),
  CONSTRAINT `etablissement_abonnements_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`) ON DELETE CASCADE,
  CONSTRAINT `etablissement_abonnements_ibfk_2` FOREIGN KEY (`version_id`) REFERENCES `system_versions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des pôles (groupes de services)
CREATE TABLE `poles` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `code` varchar(10) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `nom_court` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `chef_pole_id` bigint(20) UNSIGNED DEFAULT NULL,
  `chef_pole_adjoint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_creation` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `budget_annuel` decimal(15,2) DEFAULT NULL,
  `code_analytique` varchar(20) DEFAULT NULL,
  `statut` enum('ACTIF','INACTIF','REORGANISATION') DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_code` (`etablissement_id`,`code`),
  CONSTRAINT `poles_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des services cliniques et administratifs
CREATE TABLE `services` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pole_id` smallint(5) UNSIGNED NOT NULL,
  `code` varchar(10) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `nom_court` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type_service` enum('MEDECINE','CHIRURGIE','OBSTETRIQUE','PEDIATRIE','PSYCHIATRIE','URGENCES','REANIMATION','SOINS_INTENSIFS','SOINS_CONTINUS','RADIOLOGIE','LABORATOIRE','PHARMACIE','BLOC_OPERATOIRE','CONSULTATIONS_EXTERNES','HOSPITALISATION_JOUR','HAD','ADMINISTRATIF','TECHNIQUE','LOGISTIQUE','DIRECTION') NOT NULL,
  `discipline_medicale` varchar(100) DEFAULT NULL,
  `age_min` tinyint(3) UNSIGNED DEFAULT NULL,
  `age_max` tinyint(3) UNSIGNED DEFAULT NULL,
  `sexe_specifique` enum('M','F','MIXTE') DEFAULT 'MIXTE',
  `batiment` varchar(50) DEFAULT NULL,
  `etage` tinyint(4) DEFAULT NULL,
  `aile` varchar(50) DEFAULT NULL,
  `chef_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `chef_service_adjoint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cadre_sante_id` bigint(20) UNSIGNED DEFAULT NULL,
  `secretaire_medicale_id` bigint(20) UNSIGNED DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nombre_lits_autorises` tinyint(3) UNSIGNED DEFAULT 0,
  `nombre_lits_installes` tinyint(3) UNSIGNED DEFAULT 0,
  `nombre_places_hospit_jour` tinyint(3) UNSIGNED DEFAULT 0,
  `nombre_consultations_par_jour` tinyint(3) UNSIGNED DEFAULT 0,
  `horaires_ouverture` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Horaires par jour de la semaine' CHECK (json_valid(`horaires_ouverture`)),
  `garde_assure` tinyint(1) DEFAULT 0,
  `astreinte_assure` tinyint(1) DEFAULT 0,
  `acces_urgence` tinyint(1) DEFAULT 0,
  `acces_handicap` tinyint(1) DEFAULT 0,
  `isolement_possible` tinyint(1) DEFAULT 0,
  `surveillance_continue` tinyint(1) DEFAULT 0,
  `budget_annuel` decimal(12,2) DEFAULT NULL,
  `code_analytique` varchar(20) DEFAULT NULL,
  `centre_cout` varchar(20) DEFAULT NULL,
  `derniere_inspection` date DEFAULT NULL,
  `certifie_has` tinyint(1) DEFAULT 0,
  `date_certification_has` date DEFAULT NULL,
  `statut` enum('ACTIF','FERME_TEMPORAIRE','FERME_DEFINITIF','REORGANISATION') DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_pole_code` (`pole_id`,`code`),
  CONSTRAINT `services_ibfk_1` FOREIGN KEY (`pole_id`) REFERENCES `poles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des unités fonctionnelles (sous-divisions des services)
CREATE TABLE `unites_fonctionnelles` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_id` smallint(5) UNSIGNED NOT NULL,
  `code` varchar(10) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `type_unite` enum('HOSPITALISATION_COMPLETE','HOSPITALISATION_JOUR','AMBULATOIRE','CONSULTATIONS','URGENCES','BLOC_OPERATOIRE','RADIOLOGIE','LABORATOIRE','PHARMACIE','REANIMATION','SOINS_INTENSIFS','MATERNITE','NEONATOLOGIE','DIALYSE','CHIMIOTHERAPIE') NOT NULL,
  `batiment` varchar(50) DEFAULT NULL,
  `etage` tinyint(4) DEFAULT NULL,
  `secteur` varchar(50) DEFAULT NULL,
  `responsable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `responsable_adjoint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `capacite_lits` tinyint(3) UNSIGNED DEFAULT 0,
  `capacite_fauteuils` tinyint(3) UNSIGNED DEFAULT 0,
  `capacite_consultations` tinyint(3) UNSIGNED DEFAULT 0,
  `equipements_specifiques` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Liste des équipements spécifiques' CHECK (json_valid(`equipements_specifiques`)),
  `niveau_surveillance` enum('STANDARD','INTERMEDIAIRE','INTENSIF') DEFAULT 'STANDARD',
  `fonctionne_24h` tinyint(1) DEFAULT 0,
  `fonctionne_weekend` tinyint(1) DEFAULT 0,
  `statut` enum('ACTIF','INACTIF','MAINTENANCE','REORGANISATION') DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_service_code` (`service_id`,`code`),
  CONSTRAINT `unites_fonctionnelles_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des chambres
CREATE TABLE `chambres` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unite_id` smallint(5) UNSIGNED NOT NULL,
  `numero` varchar(20) NOT NULL,
  `type_chambre` enum('INDIVIDUELLE','DOUBLE','TRIPLE','QUADRUPLE','ISOLEMENT','ISOLEMENT_PROTECTEUR','ISOLEMENT_SEPTIQUE','SOINS_INTENSIFS','SURVEILLANCE_CONTINUE','MATERNITE','PEDIATRIE','CHAMBRE_MERE_ENFANT') NOT NULL,
  `superficie` decimal(5,2) DEFAULT NULL COMMENT 'en m²',
  `vue_exterieure` tinyint(1) DEFAULT 0,
  `climatisation` tinyint(1) DEFAULT 0,
  `television` tinyint(1) DEFAULT 0,
  `refrigerateur` tinyint(1) DEFAULT 0,
  `coffre_fort` tinyint(1) DEFAULT 0,
  `acces_handicap` tinyint(1) DEFAULT 0,
  `salle_bain_adaptee` tinyint(1) DEFAULT 0,
  `prises_oxygene` tinyint(3) UNSIGNED DEFAULT 0,
  `prises_vide` tinyint(3) UNSIGNED DEFAULT 0,
  `prises_air_comprime` tinyint(3) UNSIGNED DEFAULT 0,
  `prises_electriques_medical` tinyint(3) UNSIGNED DEFAULT 0,
  `telephone` varchar(20) DEFAULT NULL,
  `poste_infirmier` varchar(10) DEFAULT NULL,
  `supplement_chambre_individuelle` decimal(8,2) DEFAULT 0.00,
  `categorie_confort` enum('STANDARD','CONFORT','LUXE') DEFAULT 'STANDARD',
  `statut` enum('DISPONIBLE','OCCUPEE','NETTOYAGE','DESINFECTION','MAINTENANCE','HORS_SERVICE') DEFAULT 'DISPONIBLE',
  `date_derniere_desinfection` datetime DEFAULT NULL,
  `date_derniere_maintenance` date DEFAULT NULL,
  `particularites` text DEFAULT NULL,
  `restrictions_usage` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_unite_numero` (`unite_id`,`numero`),
  CONSTRAINT `chambres_ibfk_1` FOREIGN KEY (`unite_id`) REFERENCES `unites_fonctionnelles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des lits
CREATE TABLE `lits` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chambre_id` mediumint(8) UNSIGNED NOT NULL,
  `code_lit` varchar(10) NOT NULL,
  `type_lit` enum('STANDARD','ELECTRIQUE','REANIMATION','SOINS_INTENSIFS','MATERNITE','PEDIATRIQUE','NEONATOLOGIE','BARIATRIQUE','ORTHOPEDIQUE','PSYCHIATRIE') NOT NULL DEFAULT 'STANDARD',
  `poids_max_patient` smallint(5) UNSIGNED DEFAULT 150 COMMENT 'en kg',
  `hauteur_variable` tinyint(1) DEFAULT 0,
  `inclinaison_variable` tinyint(1) DEFAULT 0,
  `barrieres` tinyint(1) DEFAULT 1,
  `potence` tinyint(1) DEFAULT 0,
  `table_de_lit` tinyint(1) DEFAULT 0,
  `eclairage_integre` tinyint(1) DEFAULT 0,
  `moniteur_multiparametrique` tinyint(1) DEFAULT 0,
  `pousse_seringue_electrique` tinyint(1) DEFAULT 0,
  `respirateur` tinyint(1) DEFAULT 0,
  `scope_cardiaque` tinyint(1) DEFAULT 0,
  `type_matelas` enum('STANDARD','ANTI_ESCARRE','ALTERNATING','AIR_FLUIDISE') DEFAULT 'STANDARD',
  `date_changement_matelas` date DEFAULT NULL,
  `statut` enum('LIBRE','OCCUPE','RESERVE','NETTOYAGE','MAINTENANCE','HORS_SERVICE') DEFAULT 'LIBRE',
  `date_derniere_desinfection` datetime DEFAULT NULL,
  `prochaine_maintenance` date DEFAULT NULL,
  `reserve_pour_patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_reservation` datetime DEFAULT NULL,
  `duree_reservation_heures` tinyint(3) UNSIGNED DEFAULT NULL,
  `equipements_specifiques` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
    COMMENT 'Liste des équipements spécifiques' CHECK (json_valid(`equipements_specifiques`)),
  `restrictions_usage` text DEFAULT NULL,
  `observations` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_chambre_lit` (`chambre_id`,`code_lit`),
  CONSTRAINT `lits_ibfk_1` FOREIGN KEY (`chambre_id`) REFERENCES `chambres` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des personnes (base commune pour patients et personnel)
CREATE TABLE `personnes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL DEFAULT (uuid()),
  `type_personne` enum('PATIENT','PERSONNEL','VISITEUR','FOURNISSEUR') NOT NULL,
  `civilite` enum('M.','Mme','Mlle','Dr','Pr','Me') NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom_jeune_fille` varchar(100) DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(150) DEFAULT NULL,
  `sexe` enum('M','F','A') NOT NULL COMMENT 'A=Autre/Non-binaire',
  `nationalite` varchar(100) DEFAULT NULL,
  `adresse_ligne1` varchar(255) DEFAULT NULL,
  `adresse_ligne2` varchar(255) DEFAULT NULL,
  `code_postal` varchar(20) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `telephone_portable` varchar(20) DEFAULT NULL,
  `telephone_fixe` varchar(20) DEFAULT NULL,
  `telephone_professionnel` varchar(20) DEFAULT NULL,
  `email_principal` varchar(255) DEFAULT NULL,
  `email_secondaire` varchar(255) DEFAULT NULL,
  `personne_confiance_nom` varchar(200) DEFAULT NULL,
  `personne_confiance_tel` varchar(20) DEFAULT NULL,
  `personne_confiance_lien` varchar(50) DEFAULT NULL,
  `photo_url` varchar(500) DEFAULT NULL,
  `langue_preferee` varchar(10) DEFAULT 'fr',
  `remarques` text DEFAULT NULL,
  `statut_verification` enum('NON_VERIFIE','EN_COURS','VERIFIE','REFUSE') DEFAULT 'NON_VERIFIE',
  `date_verification` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `version` int(11) DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  KEY `idx_nom_prenom` (`nom`,`prenom`),
  KEY `idx_date_naissance` (`date_naissance`),
  KEY `idx_type_personne` (`type_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des patients
CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_dossier` varchar(20) NOT NULL,
  `numero_secu` varchar(15) DEFAULT NULL,
  `nir_certifie` tinyint(1) DEFAULT 0,
  `groupe_sanguin` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') DEFAULT NULL,
  `rhesus` enum('+','-') DEFAULT NULL,
  `groupe_sanguin_verifie` tinyint(1) DEFAULT 0,
  `date_verification_gs` date DEFAULT NULL,
  `regime_assurance` varchar(100) DEFAULT NULL,
  `numero_assure` varchar(50) DEFAULT NULL,
  `organisme_complementaire` varchar(100) DEFAULT NULL,
  `numero_complementaire` varchar(50) DEFAULT NULL,
  `ald` tinyint(1) DEFAULT 0 COMMENT 'Affection Longue Durée',
  `numero_ald` varchar(20) DEFAULT NULL,
  `situation_familiale` enum('CELIBATAIRE','MARIE','PACSE','CONCUBINAGE','VEUF','DIVORCE') DEFAULT NULL,
  `profession` varchar(150) DEFAULT NULL,
  `employeur` varchar(200) DEFAULT NULL,
  `contact_urgence_1_nom` varchar(200) DEFAULT NULL,
  `contact_urgence_1_tel` varchar(20) DEFAULT NULL,
  `contact_urgence_1_lien` varchar(50) DEFAULT NULL,
  `contact_urgence_2_nom` varchar(200) DEFAULT NULL,
  `contact_urgence_2_tel` varchar(20) DEFAULT NULL,
  `contact_urgence_2_lien` varchar(50) DEFAULT NULL,
  `directives_anticipees` text DEFAULT NULL,
  `personne_confiance_designee` varchar(200) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `regime_alimentaire` varchar(200) DEFAULT NULL,
  `allergies_alimentaires` text DEFAULT NULL,
  `statut` enum('ACTIF','INACTIF','DECEDE','TRANSFERE') DEFAULT 'ACTIF',
  `date_deces` date DEFAULT NULL,
  `lieu_deces` varchar(200) DEFAULT NULL,
  `medecin_traitant_externe` varchar(200) DEFAULT NULL,
  `date_derniere_visite` date DEFAULT NULL,
  `nombre_hospitalisations` int(11) DEFAULT 0,
  `risque_nosocomial` enum('FAIBLE','MOYEN','ELEVE') DEFAULT 'FAIBLE',
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_numero_dossier` (`etablissement_id`,`numero_dossier`),
  UNIQUE KEY `numero_secu` (`numero_secu`),
  CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Procédure pour générer un numéro de dossier patient unique par établissement
DELIMITER $$
CREATE PROCEDURE `generer_numero_dossier`(
    IN `etablissement_id` SMALLINT(5) UNSIGNED,
    OUT `nouveau_numero` VARCHAR(20)
)
BEGIN
    DECLARE prefixe VARCHAR(2);
    DECLARE annee CHAR(2);
    DECLARE sequence INT;
    -- Sélectionner le préfixe approprié pour l'établissement
SELECT
    CASE
        WHEN type_etablissement = 'CHU' THEN 'CH'
        WHEN type_etablissement = 'CLINIQUE_PRIVEE' THEN 'CP'
        WHEN type_etablissement = 'HOPITAL_PRIVE' THEN 'HP'
        ELSE 'PA'
    END INTO prefixe
FROM etablissements
WHERE id = etablissement_id;

-- Année sur 2 chiffres
SET annee = DATE_FORMAT(CURRENT_DATE, '%y');

-- Trouver la prochaine séquence disponible
SELECT COALESCE(MAX(CAST(SUBSTRING(numero_dossier, 5) AS UNSIGNED)), 0) + 1
INTO sequence
FROM patients
WHERE etablissement_id = etablissement_id
AND numero_dossier LIKE CONCAT(prefixe, annee, '%');

-- Générer le nouveau numéro
SET nouveau_numero = CONCAT(prefixe, annee, LPAD(sequence, 5, '0'));
END$$
DELIMITER ;

-- Table du personnel médical et administratif
CREATE TABLE `personnel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `categorie` enum('MEDICAL','PARAMEDICAL','ADMINISTRATIF','TECHNIQUE','DIRECTION') NOT NULL,
  `specialite_principale` varchar(100) DEFAULT NULL,
  `type_contrat` enum('CDI','CDD','INTERIM','STAGIAIRE','LIBERAL','PRATICIEN_HOSPITALIER') NOT NULL,
  `date_embauche` date NOT NULL,
  `date_fin_contrat` date DEFAULT NULL,
  `date_titularisation` date DEFAULT NULL,
  `numero_rpps` varchar(11) DEFAULT NULL COMMENT 'Répertoire Partagé des Professionnels de Santé',
  `numero_adeli` varchar(9) DEFAULT NULL COMMENT 'Automatisation des Listes',
  `numero_ordre` varchar(20) DEFAULT NULL,
  `numero_agrement` varchar(50) DEFAULT NULL,
  `diplome_principal` varchar(200) DEFAULT NULL,
  `universite_diplome` varchar(200) DEFAULT NULL,
  `annee_diplome` year(4) DEFAULT NULL,
  `formations_complementaires` text DEFAULT NULL,
  `quotite_travail` decimal(5,2) DEFAULT 100.00 COMMENT 'Pourcentage temps plein',
  `temps_travail_hebdo` decimal(4,1) DEFAULT 35.0,
  `service_affectation_principal` smallint(5) UNSIGNED DEFAULT NULL,
  `droit_prescription` tinyint(1) DEFAULT 0,
  `droit_signature_electronique` tinyint(1) DEFAULT 0,
  `niveau_habilitation` enum('BASIQUE','INTERMEDIAIRE','AVANCE','ADMINISTRATEUR') DEFAULT 'BASIQUE',
  `statut` enum('ACTIF','CONGE','MALADIE','FORMATION','DISPONIBILITE','RETRAITE','DEMISSION') DEFAULT 'ACTIF',
  `disponible_garde` tinyint(1) DEFAULT 1,
  `disponible_astreinte` tinyint(1) DEFAULT 1,
  `bureau` varchar(50) DEFAULT NULL,
  `poste_interne` varchar(10) DEFAULT NULL,
  `bip` varchar(20) DEFAULT NULL,
  `salaire_base` decimal(10,2) DEFAULT NULL,
  `coefficient` smallint(5) UNSIGNED DEFAULT NULL,
  `echelon` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_matricule` (`etablissement_id`,`matricule`),
  KEY `service_affectation_principal` (`service_affectation_principal`),
  CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `personnel_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `personnel_ibfk_3` FOREIGN KEY (`service_affectation_principal`) REFERENCES `services` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des contrats de travail
CREATE TABLE `contrats_travail` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personnel_id` bigint(20) UNSIGNED NOT NULL,
  `numero_contrat` varchar(20) NOT NULL,
  `type_contrat` enum('CDI','CDD','INTERIM','STAGIAIRE','LIBERAL','PRATICIEN_HOSPITALIER','CONSULTANT') NOT NULL,
  `statut_contrat` enum('EN_COURS','SUSPENDU','ROMPU','TERMINE','RENOUVELE') DEFAULT 'EN_COURS',
  `date_debut` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `date_signature` date DEFAULT NULL,
  `date_embauche_effective` date DEFAULT NULL,
  `periode_essai_jours` smallint(5) UNSIGNED DEFAULT NULL,
  `salaire_base` decimal(10,2) NOT NULL,
  `coefficient` smallint(5) UNSIGNED DEFAULT NULL,
  `echelon` tinyint(3) UNSIGNED DEFAULT NULL,
  `grille_salaire` varchar(50) DEFAULT NULL,
  `prime_fonction` decimal(8,2) DEFAULT 0.00,
  `prime_risque` decimal(8,2) DEFAULT 0.00,
  `quotite_travail` decimal(5,2) DEFAULT 100.00 COMMENT 'Pourcentage temps plein',
  `heures_hebdomadaires` decimal(4,1) DEFAULT 35.0,
  `amplitude_horaire` varchar(100) DEFAULT NULL,
  `travail_nuit` tinyint(1) DEFAULT 0,
  `travail_weekend` tinyint(1) DEFAULT 0,
  `poste_occupe` varchar(100) NOT NULL,
  `service_affectation` smallint(5) UNSIGNED DEFAULT NULL,
  `lieu_travail_principal` varchar(100) DEFAULT NULL,
  `convention_collective` varchar(100) DEFAULT NULL,
  `classification` varchar(50) DEFAULT NULL,
  `diplome_requis` varchar(200) DEFAULT NULL,
  `contrat_pdf` varchar(255) DEFAULT NULL,
  `annexes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`annexes`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_contrat` (`numero_contrat`),
  KEY `personnel_id` (`personnel_id`),
  KEY `service_affectation` (`service_affectation`),
  CONSTRAINT `contrats_travail_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE CASCADE,
  CONSTRAINT `contrats_travail_ibfk_2` FOREIGN KEY (`service_affectation`) REFERENCES `services` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des spécialités (distincte pour flexibilité)
CREATE TABLE `specialites` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_specialite` varchar(100) NOT NULL UNIQUE,
  `description` text DEFAULT NULL,
  `categorie` enum('MEDICALE','CHIRURGICALE','PARAMEDICALE','ADMINISTRATIVE','TECHNIQUE') DEFAULT 'MEDICALE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertion des spécialités de base
INSERT INTO `specialites` (`nom_specialite`, `description`, `categorie`) VALUES
('Pédiatrie', 'Médecine des enfants', 'MEDICALE'),
('Gynécologie-Obstétrique', 'Santé des femmes et suivi de grossesse', 'MEDICALE'),
('Chirurgie Générale', 'Interventions chirurgicales courantes', 'CHIRURGICALE'),
('Anesthésiologie-Réanimation', 'Anesthésie et soins intensifs', 'MEDICALE'),
('Cardiologie', 'Maladies du cœur', 'MEDICALE'),
('Radiologie', 'Imagerie médicale', 'TECHNIQUE'),
('Biologie Médicale', 'Analyses de laboratoire', 'TECHNIQUE'),
('Pharmacien', 'Dispensation et gestion des médicaments', 'PARAMEDICALE'),
('Infirmier(ère)', 'Soins infirmiers', 'PARAMEDICALE'),
('Aide-Soignant(e)', 'Aide aux soins de base', 'PARAMEDICALE'),
('Administrateur Système', 'Gestion et maintenance des systèmes informatiques', 'TECHNIQUE'),
('Comptabilité', 'Gestion financière', 'ADMINISTRATIVE'),
('Ressources Humaines', 'Gestion du personnel', 'ADMINISTRATIVE');

-- Table de liaison Personnel-Spécialités (pour gérer les multiples spécialités)
CREATE TABLE `personnel_specialites` (
  `personnel_id` bigint(20) UNSIGNED NOT NULL,
  `specialite_id` smallint(5) UNSIGNED NOT NULL,
  `is_principale` tinyint(1) DEFAULT 0 COMMENT 'Si c''est la spécialité principale du personnel',
  `date_debut_pratique` date DEFAULT NULL,
  `date_fin_pratique` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`personnel_id`, `specialite_id`),
  CONSTRAINT `personnel_specialites_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE CASCADE,
  CONSTRAINT `personnel_specialites_ibfk_2` FOREIGN KEY (`specialite_id`) REFERENCES `specialites` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des compétences du personnel
CREATE TABLE `competences_personnel` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personnel_id` bigint(20) UNSIGNED NOT NULL,
  `specialite_id` smallint(5) UNSIGNED NOT NULL,
  `niveau` enum('DEBUTANT','JUNIOR','CONFIRME','SENIOR','EXPERT','REFERENT') NOT NULL,
  `diplome_obtenu` varchar(200) DEFAULT NULL,
  `organisme_formation` varchar(200) DEFAULT NULL,
  `date_obtention` date DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `numero_certification` varchar(100) DEFAULT NULL,
  `valide_par_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_validation` date DEFAULT NULL,
  `date_debut_pratique` date DEFAULT NULL,
  `nombre_actes_realises` int(11) DEFAULT 0,
  `derniere_formation` date DEFAULT NULL,
  `statut` enum('ACTIVE','SUSPENDUE','EXPIREE','RETIREE') DEFAULT 'ACTIVE',
  `note_evaluation` decimal(3,1) DEFAULT NULL COMMENT 'Sur 10',
  `date_derniere_evaluation` date DEFAULT NULL,
  `evaluateur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `observations` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_personnel_specialite` (`personnel_id`,`specialite_id`),
  KEY `specialite_id` (`specialite_id`),
  KEY `valide_par_id` (`valide_par_id`),
  KEY `evaluateur_id` (`evaluateur_id`),
  CONSTRAINT `competences_personnel_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE CASCADE,
  CONSTRAINT `competences_personnel_ibfk_2` FOREIGN KEY (`specialite_id`) REFERENCES `specialites` (`id`),
  CONSTRAINT `competences_personnel_ibfk_3` FOREIGN KEY (`valide_par_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `competences_personnel_ibfk_4` FOREIGN KEY (`evaluateur_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des rôles du système (pour la gestion des accès)
CREATE TABLE `roles` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(100) NOT NULL UNIQUE,
  `description` text DEFAULT NULL,
  `niveau_securite` tinyint(3) UNSIGNED DEFAULT 1 COMMENT '1=Basique, 5=Très élevé (ex: super admin)',
  `est_systeme` tinyint(1) DEFAULT 0 COMMENT 'Rôle système non modifiable',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertion des rôles de base
INSERT INTO `roles` (`nom_role`, `description`, `niveau_securite`, `est_systeme`) VALUES
('Super Admin', 'Administrateur système global', 5, 1),
('Admin Etablissement', 'Administrateur d''un établissement spécifique', 4, 1),
('Médecin', 'Accès aux dossiers patients et prescriptions', 3, 1),
('Infirmier', 'Accès aux dossiers patients et soins', 2, 1),
('Secrétaire Médicale', 'Gestion des rendez-vous et admissions', 2, 1),
('Pharmacien', 'Gestion de la pharmacie et dispensation', 3, 1),
('Laborantin', 'Gestion des examens de laboratoire', 2, 1),
('Agent Facturation', 'Gestion de la facturation', 2, 1),
('RH', 'Gestion des ressources humaines', 3, 1),
('Technicien Maintenance', 'Gestion des équipements et maintenance', 2, 1),
('Patient', 'Accès limité à son propre dossier', 1, 0),
('Visiteur', 'Accès public limité', 1, 0);

-- Table des permissions (granulaires)
CREATE TABLE `permissions` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code_permission` varchar(100) NOT NULL UNIQUE,
  `nom_permission` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `module_code` varchar(50) DEFAULT NULL COMMENT 'Module auquel la permission est associée',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOTS NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `module_code` (`module_code`),
  CONSTRAINT `permissions_ibfk_1` FOREIGN KEY (`module_code`) REFERENCES `system_modules` (`code`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertion d'exemples de permissions
INSERT INTO `permissions` (`code_permission`, `nom_permission`, `description`, `module_code`) VALUES
('PATIENTS_READ', 'Lire les dossiers patients', 'Permet de consulter les informations des patients', 'PATIENTS'),
('PATIENTS_WRITE', 'Modifier les dossiers patients', 'Permet de créer/modifier les informations des patients', 'PATIENTS'),
('PATIENTS_DELETE', 'Supprimer les dossiers patients', 'Permet de supprimer les dossiers patients', 'PATIENTS'),
('CONSULTATIONS_CREATE', 'Créer une consultation', 'Permet d''enregistrer une nouvelle consultation', 'CONSULTATIONS'),
('PHARMACIE_DISPENSE', 'Dispenser des médicaments', 'Permet de délivrer des médicaments de la pharmacie', 'PHARMACIE'),
('RH_CONSULT_SALAIRE', 'Consulter les salaires du personnel', 'Accès aux informations salariales', 'RH'),
('SYSTEM_CONFIG_MANAGE', 'Gérer la configuration système', 'Accès aux paramètres globaux du système', 'ADMINISTRATION'),
('ETABLISSEMENT_MANAGE', 'Gérer les informations d''établissement', 'Permet à l''admin de l''établissement de gérer les détails de son hôpital', 'ADMINISTRATION');


-- Table de liaison Rôles-Permissions
CREATE TABLE `role_permissions` (
  `role_id` smallint(5) UNSIGNED NOT NULL,
  `permission_id` mediumint(8) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`role_id`, `permission_id`),
  CONSTRAINT `role_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Assignation d'exemples de permissions aux rôles
-- Super Admin a toutes les permissions (exemple simplifié)
INSERT INTO `role_permissions` (`role_id`, `permission_id`)
SELECT (SELECT id FROM roles WHERE nom_role = 'Super Admin'), id FROM permissions;

-- Admin Etablissement a des permissions spécifiques
INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
((SELECT id FROM roles WHERE nom_role = 'Admin Etablissement'), (SELECT id FROM permissions WHERE code_permission = 'ETABLISSEMENT_MANAGE')),
((SELECT id FROM roles WHERE nom_role = 'Admin Etablissement'), (SELECT id FROM permissions WHERE code_permission = 'PATIENTS_READ')),
((SELECT id FROM roles WHERE nom_role = 'Admin Etablissement'), (SELECT id FROM permissions WHERE code_permission = 'PATIENTS_WRITE'));

-- Table des utilisateurs du système
CREATE TABLE `utilisateurs_systeme` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personnel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL, -- Hashed password
  `role_id` smallint(5) UNSIGNED DEFAULT NULL, -- Rôle principal
  `roles_secondaires` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`roles_secondaires`)),
  `permissions_specifiques` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions_specifiques`)),
  `date_derniere_connexion` datetime DEFAULT NULL,
  `adresse_ip_derniere_connexion` varchar(45) DEFAULT NULL,
  `date_expiration_mdp` date DEFAULT NULL,
  `doit_changer_mdp` tinyint(1) DEFAULT 1,
  `compte_verrouille` tinyint(1) DEFAULT 0,
  `nombre_tentatives_echec` tinyint(3) UNSIGNED DEFAULT 0,
  `auth_2fa_activee` tinyint(1) DEFAULT 0,
  `methode_2fa` enum('SMS','EMAIL','APPLI','JETON') DEFAULT 'APPLI',
  `telephone_2fa` varchar(20) DEFAULT NULL,
  `statut` enum('ACTIF','INACTIF','SUSPENDU') DEFAULT 'ACTIF',
  `date_activation` date DEFAULT NULL,
  `date_desactivation` date DEFAULT NULL,
  `app_version` smallint(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifiant` (`identifiant`),
  UNIQUE KEY `email` (`email`),
  KEY `personnel_id` (`personnel_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `utilisateurs_systeme_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `utilisateurs_systeme_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `utilisateurs_systeme_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL,
  CONSTRAINT `utilisateurs_systeme_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `utilisateurs_systeme_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des journaux d'activité des utilisateurs (logs)
CREATE TABLE `user_activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `etablissement_id` smallint(5) UNSIGNED DEFAULT NULL,
  `action_type` varchar(100) NOT NULL COMMENT 'e.g., LOGIN, LOGOUT, CREATE_PATIENT, UPDATE_DRUG_STOCK',
  `description` text DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `ressource_id` varchar(255) DEFAULT NULL COMMENT 'ID de la ressource affectée (patient_id, med_id, etc.)',
  `ressource_type` varchar(100) DEFAULT NULL COMMENT 'Type de la ressource (PATIENT, MEDICAMENT, PERSONNEL)',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `user_activity_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `user_activity_logs_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des antécédents médicaux des patients (plus structurée)
CREATE TABLE `antecedents_medicaux` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `type_antecedent` enum('MALADIE_CHRONIQUE','ALLERGIE','CHIRURGIE','HOSPITALISATION_ANTERIEURE','HISTORIQUE_FAMILIAL','AUTRE') NOT NULL,
  `libelle` varchar(255) NOT NULL COMMENT 'Nom de la maladie, allergie, chirurgie, etc.',
  `description` text DEFAULT NULL,
  `date_diagnostic_ou_evenement` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL COMMENT 'Pour les maladies résolues',
  `gravite` enum('LEGERE','MODEREE','SEVERE','URGENCE_VITALE') DEFAULT NULL,
  `statut` enum('ACTIF','INACTIF','RESOLU') DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `antecedents_medicaux_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `antecedents_medicaux_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `antecedents_medicaux_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `antecedents_medicaux_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des signes vitaux
CREATE TABLE `signes_vitaux` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `temperature_celsius` decimal(4,2) DEFAULT NULL,
  `tension_arterielle_systolique` smallint(5) UNSIGNED DEFAULT NULL,
  `tension_arterielle_diastolique` smallint(5) UNSIGNED DEFAULT NULL,
  `frequence_cardiaque_bpm` smallint(5) UNSIGNED DEFAULT NULL,
  `frequence_respiratoire_rpm` smallint(5) UNSIGNED DEFAULT NULL,
  `saturation_oxygene_pourcentage` decimal(4,2) DEFAULT NULL,
  `glycemie_mgdl` decimal(6,2) DEFAULT NULL,
  `poids_kg` decimal(6,2) DEFAULT NULL,
  `taille_cm` decimal(5,2) DEFAULT NULL,
  `imc` decimal(4,2) AS (CASE WHEN `poids_kg` IS NOT NULL AND `taille_cm` IS NOT NULL THEN `poids_kg` / ( (`taille_cm` / 100) * (`taille_cm` / 100) ) ELSE NULL END) STORED,
  `douleur_echelle` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'Echelle de douleur 0-10',
  `observations` text DEFAULT NULL,
  `recorded_at` datetime NOT NULL DEFAULT current_timestamp(),
  `recorded_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `recorded_by` (`recorded_by`),
  CONSTRAINT `signes_vitaux_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `signes_vitaux_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `signes_vitaux_ibfk_3` FOREIGN KEY (`recorded_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des consultations (existante, mais ajout de champs)
CREATE TABLE `consultations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `medecin_id` bigint(20) UNSIGNED NOT NULL,
  `date_heure_debut` datetime NOT NULL,
  `date_heure_fin` datetime DEFAULT NULL,
  `type_consultation` enum('PREMIERE_CONSULTATION','SUIVI','URGENCE','TELECONSULTATION','CONTROLE') NOT NULL,
  `motif_consultation` text NOT NULL,
  `historique_maladie` text DEFAULT NULL,
  `examen_clinique` text DEFAULT NULL,
  `diagnostics_cims10` varchar(255) DEFAULT NULL COMMENT 'Codes CIM-10 (JSON array ou comma separated)',
  `plan_traitement` text DEFAULT NULL,
  `observations` text DEFAULT NULL,
  `statut` enum('PLANIFIEE','EN_COURS','TERMINEE','ANNULEE','REPORTEE') DEFAULT 'PLANIFIEE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `medecin_id` (`medecin_id`),
  CONSTRAINT `consultations_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `consultations_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `consultations_ibfk_3` FOREIGN KEY (`medecin_id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `consultations_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `consultations_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des rendez-vous
CREATE TABLE `rendez_vous` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `personnel_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Professionnel de santé ou personnel concerné',
  `service_id` smallint(5) UNSIGNED DEFAULT NULL,
  `date_heure_rv` datetime NOT NULL,
  `duree_minutes` smallint(5) UNSIGNED DEFAULT 30,
  `motif` varchar(255) NOT NULL,
  `type_rv` enum('CONSULTATION','EXAMEN','SOIN','VISITE','TELECONSULTATION','AUTRE') NOT NULL,
  `lieu` varchar(255) DEFAULT NULL COMMENT 'Cabinet, Salle d''examen, etc.',
  `statut` enum('CONFIRME','ANNULE','REPORTE','EN_ATTENTE','TERMINE') DEFAULT 'CONFIRME',
  `observations` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `personnel_id` (`personnel_id`),
  KEY `service_id` (`service_id`),
  CONSTRAINT `rendez_vous_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rendez_vous_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `rendez_vous_ibfk_3` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `rendez_vous_ibfk_4` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL,
  CONSTRAINT `rendez_vous_ibfk_5` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `rendez_vous_ibfk_6` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Table des types d'examens de laboratoire (déjà présente dans le snippet fourni)
CREATE TABLE `types_examens_labo` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `code_examen` varchar(20) NOT NULL,
  `nom_examen` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `categorie` varchar(100) DEFAULT NULL COMMENT 'Hématologie, Biochimie,...',
  `unite_mesure` varchar(50) DEFAULT NULL,
  `valeur_min_ref` decimal(10,4) DEFAULT NULL,
  `valeur_max_ref` decimal(10,4) DEFAULT NULL,
  `conditions_pre_analytiques` text DEFAULT NULL,
  `delai_resultat_heures` smallint(5) UNSIGNED DEFAULT NULL,
  `cout_examen` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_code_examen` (`etablissement_id`,`code_examen`),
  CONSTRAINT `types_examens_labo_ibfk_1` FOREIGN FKEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `types_examens_labo_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `types_examens_labo_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des demandes d'examens de laboratoire (déjà présente, ajout de `etablissement_id`)
CREATE TABLE `demandes_examens_labo` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `prescripteur_id` bigint(20) UNSIGNED NOT NULL COMMENT 'ID du médecin ou personnel qui prescrit',
  `consultation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sejour_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Si la demande est faite pendant un séjour',
  `type_examen_id` mediumint(8) UNSIGNED NOT NULL,
  `date_demande` datetime NOT NULL DEFAULT current_timestamp(),
  `date_prelevement` datetime DEFAULT NULL,
  `date_resultat_attendu` datetime DEFAULT NULL,
  `priorite` enum('ROUTINE','URGENT','TRES_URGENT') DEFAULT 'ROUTINE',
  `statut_demande` enum('EN_ATTENTE','PRELEVEE','EN_ANALYSE','TERMINEE','ANNULEE') DEFAULT 'EN_ATTENTE',
  `observations_demande` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `prescripteur_id` (`prescripteur_id`),
  KEY `consultation_id` (`consultation_id`),
  KEY `sejour_id` (`sejour_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `type_examen_id` (`type_examen_id`),
  CONSTRAINT `demandes_examens_labo_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `demandes_examens_labo_ibfk_2` FOREIGN KEY (`prescripteur_id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `demandes_examens_labo_ibfk_3` FOREIGN KEY (`consultation_id`) REFERENCES `consultations` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_examens_labo_ibfk_4` FOREIGN KEY (`sejour_id`) REFERENCES `sejours` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_examens_labo_ibfk_5` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `demandes_examens_labo_ibfk_6` FOREIGN KEY (`type_examen_id`) REFERENCES `types_examens_labo` (`id`),
  CONSTRAINT `demandes_examens_labo_ibfk_7` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_examens_labo_ibfk_8` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des résultats d'examens de laboratoire
CREATE TABLE `resultats_examens_labo` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `demande_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `type_examen_id` mediumint(8) UNSIGNED NOT NULL,
  `valeur_resultat` varchar(255) NOT NULL COMMENT 'Peut être numérique ou textuel',
  `unite_mesure_resultat` varchar(50) DEFAULT NULL,
  `valeur_numerique` decimal(12,4) DEFAULT NULL,
  `interpretation` text DEFAULT NULL,
  `est_anormal` tinyint(1) DEFAULT 0,
  `date_analyse` datetime DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `technicien_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Technicien ayant effectué l''analyse',
  `biologiste_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Biologiste ayant validé le résultat',
  `fichier_resultat_url` varchar(500) DEFAULT NULL COMMENT 'Lien vers le fichier PDF du résultat',
  `statut_resultat` enum('EN_ATTENTE','VALIDE','CORRIGE','ANNULE') DEFAULT 'EN_ATTENTE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demande_id` (`demande_id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `type_examen_id` (`type_examen_id`),
  KEY `technicien_id` (`technicien_id`),
  KEY `biologiste_id` (`biologiste_id`),
  CONSTRAINT `resultats_examens_labo_ibfk_1` FOREIGN KEY (`demande_id`) REFERENCES `demandes_examens_labo` (`id`) ON DELETE CASCADE,
  CONSTRAINT `resultats_examens_labo_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  CONSTRAINT `resultats_examens_labo_ibfk_3` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `resultats_examens_labo_ibfk_4` FOREIGN KEY (`type_examen_id`) REFERENCES `types_examens_labo` (`id`),
  CONSTRAINT `resultats_examens_labo_ibfk_5` FOREIGN KEY (`technicien_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `resultats_examens_labo_ibfk_6` FOREIGN KEY (`biologiste_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `resultats_examens_labo_ibfk_7` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `resultats_examens_labo_ibfk_8` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des types d'examens de radiologie/imagerie
CREATE TABLE `types_examens_radios` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `code_examen` varchar(20) NOT NULL UNIQUE,
  `nom_examen` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `modalite` enum('RADIO','IRM','SCANNER','ECHOGRAPHIE','MAMMOGRAPHIE','PET_SCAN','AUTRE') NOT NULL,
  `preparation_requise` text DEFAULT NULL,
  `delai_resultat_heures` smallint(5) UNSIGNED DEFAULT NULL,
  `cout_examen` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `types_examens_radios_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `types_examens_radios_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `types_examens_radios_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des demandes d'examens de radiologie
CREATE TABLE `demandes_examens_radios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `prescripteur_id` bigint(20) UNSIGNED NOT NULL,
  `consultation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sejour_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_examen_id` mediumint(8) UNSIGNED NOT NULL,
  `date_demande` datetime NOT NULL DEFAULT current_timestamp(),
  `date_realisation_prevue` datetime DEFAULT NULL,
  `priorite` enum('ROUTINE','URGENT','TRES_URGENT') DEFAULT 'ROUTINE',
  `statut_demande` enum('EN_ATTENTE','PLANIFIEE','REALISEE','ANNULEE') DEFAULT 'EN_ATTENTE',
  `observations_demande` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `prescripteur_id` (`prescripteur_id`),
  KEY `consultation_id` (`consultation_id`),
  KEY `sejour_id` (`sejour_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `type_examen_id` (`type_examen_id`),
  CONSTRAINT `demandes_examens_radios_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `demandes_examens_radios_ibfk_2` FOREIGN KEY (`prescripteur_id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `demandes_examens_radios_ibfk_3` FOREIGN KEY (`consultation_id`) REFERENCES `consultations` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_examens_radios_ibfk_4` FOREIGN KEY (`sejour_id`) REFERENCES `sejours` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_examens_radios_ibfk_5` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `demandes_examens_radios_ibfk_6` FOREIGN KEY (`type_examen_id`) REFERENCES `types_examens_radios` (`id`),
  CONSTRAINT `demandes_examens_radios_ibfk_7` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_examens_radios_ibfk_8` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des résultats d'examens de radiologie
CREATE TABLE `resultats_examens_radios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `demande_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `type_examen_id` mediumint(8) UNSIGNED NOT NULL,
  `date_realisation` datetime DEFAULT NULL,
  `date_compte_rendu` datetime DEFAULT NULL,
  `radiologue_id` bigint(20) UNSIGNED DEFAULT NULL,
  `manipulateur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `compte_rendu` text NOT NULL,
  `conclusion` text DEFAULT NULL,
  `image_url` varchar(500) DEFAULT NULL COMMENT 'Lien vers les images DICOM ou aperçus',
  `fichier_resultat_url` varchar(500) DEFAULT NULL COMMENT 'Lien vers le fichier PDF du CR',
  `statut_resultat` enum('EN_REDACTION','VALIDE','CORRIGE','ANNULE') DEFAULT 'EN_REDACTION',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `demande_id` (`demande_id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `type_examen_id` (`type_examen_id`),
  KEY `radiologue_id` (`radiologue_id`),
  KEY `manipulateur_id` (`manipulateur_id`),
  CONSTRAINT `resultats_examens_radios_ibfk_1` FOREIGN KEY (`demande_id`) REFERENCES `demandes_examens_radios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `resultats_examens_radios_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  CONSTRAINT `resultats_examens_radios_ibfk_3` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `resultats_examens_radios_ibfk_4` FOREIGN KEY (`type_examen_id`) REFERENCES `types_examens_radios` (`id`),
  CONSTRAINT `resultats_examens_radios_ibfk_5` FOREIGN KEY (`radiologue_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `resultats_examens_radios_ibfk_6` FOREIGN KEY (`manipulateur_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `resultats_examens_radios_ibfk_7` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `resultats_examens_radios_ibfk_8` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des opérations chirurgicales
CREATE TABLE `operations_chirurgicales` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `chirurgien_principal_id` bigint(20) UNSIGNED NOT NULL,
  `salle_operation_id` smallint(5) UNSIGNED DEFAULT NULL,
  `date_heure_debut` datetime NOT NULL,
  `date_heure_fin` datetime DEFAULT NULL,
  `type_operation` varchar(200) NOT NULL COMMENT 'Ex: Appendicectomie, Césarienne, ...',
  `code_ccam` varchar(10) DEFAULT NULL COMMENT 'Code CCAM de l''acte',
  `diagnostic_preop` text DEFAULT NULL,
  `compte_rendu_operatoire` text DEFAULT NULL,
  `complications` text DEFAULT NULL,
  `anesthesiste_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_anesthesie` enum('GENERALE','LOCALE','LOCO_REGIONALE','RACHI_EPIDURALE') DEFAULT NULL,
  `statut` enum('PLANIFIEE','EN_COURS','TERMINEE','ANNULEE','REPORTEE') DEFAULT 'PLANIFIEE',
  `observations` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `chirurgien_principal_id` (`chirurgien_principal_id`),
  KEY `salle_operation_id` (`salle_operation_id`),
  KEY `anesthesiste_id` (`anesthesiste_id`),
  CONSTRAINT `operations_chirurgicales_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `operations_chirurgicales_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `operations_chirurgicales_ibfk_3` FOREIGN KEY (`chirurgien_principal_id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `operations_chirurgicales_ibfk_4` FOREIGN KEY (`salle_operation_id`) REFERENCES `salles_operation` (`id`) ON DELETE SET NULL,
  CONSTRAINT `operations_chirurgicales_ibfk_5` FOREIGN KEY (`anesthesiste_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `operations_chirurgicales_ibfk_6` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `operations_chirurgicales_ibfk_7` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des salles d'opération
CREATE TABLE `salles_operation` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `service_id` smallint(5) UNSIGNED DEFAULT NULL COMMENT 'Service gérant la salle (ex: Bloc Opératoire)',
  `numero_salle` varchar(20) NOT NULL UNIQUE,
  `nom_salle` varchar(100) DEFAULT NULL,
  `capacite_equipe` tinyint(3) UNSIGNED DEFAULT NULL,
  `type_salle` enum('CHIRURGIE_GENERALE','CHIRURGIE_SPECIALE','CHIRURGIE_AMBULATOIRE','GYN_OBSTETRIQUE','PEDIATRIE') DEFAULT 'CHIRURGIE_GENERALE',
  `equipements_specifiques` text DEFAULT NULL,
  `statut` enum('DISPONIBLE','OCCUPEE','NETTOYAGE','MAINTENANCE','HORS_SERVICE') DEFAULT 'DISPONIBLE',
  `date_derniere_maintenance` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `service_id` (`service_id`),
  CONSTRAINT `salles_operation_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `salles_operation_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL,
  CONSTRAINT `salles_operation_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `salles_operation_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table de liaison Equipe Chirurgicale
CREATE TABLE `equipe_chirurgicale` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `operation_id` bigint(20) UNSIGNED NOT NULL,
  `personnel_id` bigint(20) UNSIGNED NOT NULL,
  `role_equipe` enum('CHIRURGIEN_PRINCIPAL','CHIRURGIEN_ASSISTANT','ANESTHESISTE','INFIRMIER_BLOC','AIDE_BLOC','INSTRUMENTISTE','CIRCULANTE') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_operation_personnel` (`operation_id`,`personnel_id`),
  KEY `personnel_id` (`personnel_id`),
  CONSTRAINT `equipe_chirurgicale_ibfk_1` FOREIGN KEY (`operation_id`) REFERENCES `operations_chirurgicales` (`id`) ON DELETE CASCADE,
  CONSTRAINT `equipe_chirurgicale_ibfk_2` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des fournisseurs
CREATE TABLE `fournisseurs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `nom_fournisseur` varchar(255) NOT NULL,
  `contact_personne` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `code_postal` varchar(10) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `type_produit_fourni` varchar(255) DEFAULT NULL COMMENT 'Médicaments, équipements, services...',
  `numero_siret` varchar(14) DEFAULT NULL,
  `statut` enum('ACTIF','INACTIF','EN_NEGOCIATION') DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_nom_fournisseur` (`etablissement_id`,`nom_fournisseur`),
  CONSTRAINT `fournisseurs_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `fournisseurs_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fournisseurs_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des catégories de produits (pharmacie et stocks)
CREATE TABLE `categories_produits` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `nom_categorie` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `type_stock` enum('MEDICAMENT','CONSOMMABLE_MEDICAL','EQUIPEMENT','FOURNITURE_BUREAU','AUTRE') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_nom_categorie` (`etablissement_id`,`nom_categorie`),
  CONSTRAINT `categories_produits_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `categories_produits_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `categories_produits_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des produits de la pharmacie et autres stocks
CREATE TABLE `produits_stock` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `categorie_id` smallint(5) UNSIGNED DEFAULT NULL,
  `fournisseur_id` int(10) UNSIGNED DEFAULT NULL,
  `code_produit` varchar(50) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `type_produit` enum('MEDICAMENT','DISPOSITIF_MEDICAL','MATERIEL_CHIRURGICAL','REACTIF','FOURNITURE','EQUIPEMENT') NOT NULL,
  `forme_pharmaceutique` varchar(100) DEFAULT NULL COMMENT 'Comprimé, Solution injectable, etc. (pour médicaments)',
  `dosage` varchar(100) DEFAULT NULL,
  `unite_conditionnement` varchar(50) DEFAULT NULL COMMENT 'Boîte, Flacon, Poche',
  `quantite_par_unite` smallint(5) UNSIGNED DEFAULT NULL,
  `stock_actuel` int(11) DEFAULT 0,
  `stock_min_alerte` int(11) DEFAULT NULL,
  `stock_max_recommandation` int(11) DEFAULT NULL,
  `emplacement_stockage` varchar(100) DEFAULT NULL,
  `prix_achat_unitaire` decimal(10,2) DEFAULT NULL,
  `prix_vente_unitaire` decimal(10,2) DEFAULT NULL,
  `code_barre` varchar(100) DEFAULT NULL,
  `numero_lot` varchar(100) DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `statut_produit` enum('DISPONIBLE','RUPTURE','PERIME','RETIRE') DEFAULT 'DISPONIBLE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_code_produit` (`etablissement_id`,`code_produit`),
  KEY `categorie_id` (`categorie_id`),
  KEY `fournisseur_id` (`fournisseur_id`),
  CONSTRAINT `produits_stock_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `produits_stock_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `categories_produits` (`id`) ON DELETE SET NULL,
  CONSTRAINT `produits_stock_ibfk_3` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseurs` (`id`) ON DELETE SET NULL,
  CONSTRAINT `produits_stock_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `produits_stock_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des mouvements de stock
CREATE TABLE `mouvements_stock` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `type_mouvement` enum('ENTREE','SORTIE','AJUSTEMENT','TRANSFERT_INTERNE','INVENTAIRE') NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_mouvement` datetime NOT NULL DEFAULT current_timestamp(),
  `motif_mouvement` text DEFAULT NULL,
  `numero_lot` varchar(100) DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `source_destination` varchar(255) DEFAULT NULL COMMENT 'Ex: Nom du patient, Service, Fournisseur',
  `mouvement_par` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produit_id` (`produit_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `mouvement_par` (`mouvement_par`),
  CONSTRAINT `mouvements_stock_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produits_stock` (`id`) ON DELETE CASCADE,
  CONSTRAINT `mouvements_stock_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `mouvements_stock_ibfk_3` FOREIGN KEY (`mouvement_par`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des prescriptions de médicaments (ordo)
CREATE TABLE `prescriptions_medicaments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `prescripteur_id` bigint(20) UNSIGNED NOT NULL,
  `consultation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_prescription` datetime NOT NULL DEFAULT current_timestamp(),
  `date_debut_traitement` date DEFAULT NULL,
  `date_fin_traitement` date DEFAULT NULL,
  `duree_traitement_jours` smallint(5) UNSIGNED DEFAULT NULL,
  `observations_generales` text DEFAULT NULL,
  `statut` enum('ACTIVE','TERMINEE','ANNULEE','SUSPENDUE') DEFAULT 'ACTIVE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `prescripteur_id` (`prescripteur_id`),
  KEY `consultation_id` (`consultation_id`),
  CONSTRAINT `prescriptions_medicaments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `prescriptions_medicaments_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `prescriptions_medicaments_ibfk_3` FOREIGN KEY (`prescripteur_id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `prescriptions_medicaments_ibfk_4` FOREIGN KEY (`consultation_id`) REFERENCES `consultations` (`id`) ON DELETE SET NULL,
  CONSTRAINT `prescriptions_medicaments_ibfk_5` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `prescriptions_medicaments_ibfk_6` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des lignes de prescription de médicaments (détail de l'ordonnance)
CREATE TABLE `lignes_prescription_medicament` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prescription_id` bigint(20) UNSIGNED NOT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL COMMENT 'ID du médicament ou produit du stock',
  `quantite_par_prise` decimal(8,2) DEFAULT NULL,
  `unite_prise` varchar(50) DEFAULT NULL COMMENT 'mg, ml, cp, etc.',
  `frequence` varchar(100) NOT NULL COMMENT 'Ex: 1x/jour, toutes les 8h',
  `voie_administration` enum('ORALE','IV','IM','SC','TOPICALE','RECTALE','VAGINALE','INHALEE','AUTRE') NOT NULL,
  `instructions_speciales` text DEFAULT NULL,
  `duree_jours` smallint(5) UNSIGNED DEFAULT NULL,
  `quantite_totale_prescrite` int(11) DEFAULT NULL,
  `statut_ligne` enum('ACTIVE','TERMINEE','SUSPENDUE') DEFAULT 'ACTIVE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `prescription_id` (`prescription_id`),
  KEY `produit_id` (`produit_id`),
  CONSTRAINT `lignes_prescription_medicament_ibfk_1` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions_medicaments` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lignes_prescription_medicament_ibfk_2` FOREIGN KEY (`produit_id`) REFERENCES `produits_stock` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des dispensations de médicaments (qui a reçu quoi)
CREATE TABLE `dispensations_medicaments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `ligne_prescription_id` bigint(20) UNSIGNED DEFAULT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `quantite_dispensee` int(11) NOT NULL,
  `date_dispensation` datetime NOT NULL DEFAULT current_timestamp(),
  `dispense_par` bigint(20) UNSIGNED NOT NULL COMMENT 'ID du pharmacien ou infirmier',
  `numero_lot_dispense` varchar(100) DEFAULT NULL,
  `date_expiration_dispense` date DEFAULT NULL,
  `observations` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ligne_prescription_id` (`ligne_prescription_id`),
  KEY `produit_id` (`produit_id`),
  KEY `patient_id` (`patient_id`),
  KEY `dispense_par` (`dispense_par`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `dispensations_medicaments_ibfk_1` FOREIGN KEY (`ligne_prescription_id`) REFERENCES `lignes_prescription_medicament` (`id`) ON DELETE SET NULL,
  CONSTRAINT `dispensations_medicaments_ibfk_2` FOREIGN KEY (`produit_id`) REFERENCES `produits_stock` (`id`),
  CONSTRAINT `dispensations_medicaments_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  CONSTRAINT `dispensations_medicaments_ibfk_4` FOREIGN KEY (`dispense_par`) REFERENCES `personnel` (`id`),
  CONSTRAINT `dispensations_medicaments_ibfk_5` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des types de prestations/tarifs
CREATE TABLE `tarifs_prestations` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `code_prestation` varchar(50) NOT NULL,
  `nom_prestation` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `categorie_prestation` enum('CONSULTATION','ACTE_MEDICAL','ACTE_CHIRURGICAL','EXAMEN_LABO','EXAMEN_RADIO','MEDICAMENT','SEJOUR_HOSPITALISATION','FORFAIT','MATERIEL_MEDICAL','AUTRE') NOT NULL,
  `prix_unitaire_ht` decimal(10,2) NOT NULL,
  `taux_tva` decimal(5,2) DEFAULT 0.00,
  `prix_unitaire_ttc` decimal(10,2) AS (`prix_unitaire_ht` * (1 + `taux_tva` / 100)) STORED,
  `code_nps` varchar(20) DEFAULT NULL COMMENT 'Code Nomenclature des Prestations de Santé',
  `date_debut_validite` date NOT NULL,
  `date_fin_validite` date DEFAULT NULL,
  `statut` enum('ACTIF','INACTIF','EXPIRE') DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_code_prestation_validite` (`etablissement_id`,`code_prestation`,`date_debut_validite`),
  CONSTRAINT `tarifs_prestations_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `tarifs_prestations_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `tarifs_prestations_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des factures
CREATE TABLE `factures` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `numero_facture` varchar(50) NOT NULL UNIQUE,
  `date_facture` date NOT NULL DEFAULT current_timestamp(),
  `date_echeance` date DEFAULT NULL,
  `montant_total_ht` decimal(12,2) NOT NULL,
  `montant_tva` decimal(10,2) DEFAULT 0.00,
  `montant_total_ttc` decimal(12,2) NOT NULL,
  `montant_paye` decimal(12,2) DEFAULT 0.00,
  `solde_restant` decimal(12,2) AS (`montant_total_ttc` - `montant_paye`) STORED,
  `statut_facture` enum('BROUILLON','EMISE','PARTIELLEMENT_PAYEE','PAYEE','ANNULEE','IMPAYEE','REMISEE') DEFAULT 'EMISE',
  `type_facture` enum('HONORAIRES_MEDICAUX','HOSPITALISATION','PHARMACIE','LABORATOIRE','RADIOLOGIE','AUTRE') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  CONSTRAINT `factures_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `factures_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `factures_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des lignes de facture (détail des prestations facturées)
CREATE TABLE `lignes_facture` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `facture_id` bigint(20) UNSIGNED NOT NULL,
  `prestation_id` mediumint(8) UNSIGNED DEFAULT NULL COMMENT 'Lien vers tarifs_prestations',
  `produit_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Lien vers produits_stock (si c''est un produit)',
  `designation` varchar(255) NOT NULL,
  `quantite` decimal(8,2) NOT NULL DEFAULT 1.00,
  `prix_unitaire_ht` decimal(10,2) NOT NULL,
  `montant_total_ht_ligne` decimal(10,2) AS (`quantite` * `prix_unitaire_ht`) STORED,
  `taux_tva` decimal(5,2) DEFAULT 0.00,
  `montant_total_ttc_ligne` decimal(10,2) AS (`quantite` * `prix_unitaire_ht` * (1 + `taux_tva` / 100)) STORED,
  `date_prestation` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `facture_id` (`facture_id`),
  KEY `prestation_id` (`prestation_id`),
  KEY `produit_id` (`produit_id`),
  CONSTRAINT `lignes_facture_ibfk_1` FOREIGN KEY (`facture_id`) REFERENCES `factures` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lignes_facture_ibfk_2` FOREIGN KEY (`prestation_id`) REFERENCES `tarifs_prestations` (`id`) ON DELETE SET NULL,
  CONSTRAINT `lignes_facture_ibfk_3` FOREIGN KEY (`produit_id`) REFERENCES `produits_stock` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des paiements
CREATE TABLE `paiements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `facture_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `montant_paye` decimal(12,2) NOT NULL,
  `date_paiement` datetime NOT NULL DEFAULT current_timestamp(),
  `mode_paiement` enum('ESPECES','CARTE_BANCAIRE','VIREMENT','CHEQUE','ASSURANCE') NOT NULL,
  `reference_paiement` varchar(100) DEFAULT NULL COMMENT 'Numéro de transaction, de chèque, etc.',
  `enregistre_par` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facture_id` (`facture_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `patient_id` (`patient_id`),
  KEY `enregistre_par` (`enregistre_par`),
  CONSTRAINT `paiements_ibfk_1` FOREIGN KEY (`facture_id`) REFERENCES `factures` (`id`) ON DELETE CASCADE,
  CONSTRAINT `paiements_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `paiements_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  CONSTRAINT `paiements_ibfk_4` FOREIGN KEY (`enregistre_par`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des assurances (organisme)
CREATE TABLE `organismes_assurance` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_organisme` varchar(255) NOT NULL UNIQUE,
  `contact_personne` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `code_postal` varchar(10) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `statut` enum('ACTIF','INACTIF') DEFAULT 'ACTIF',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table de liaison Patient-Assurance (gestion des couvertures)
CREATE TABLE `patient_assurances` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `organisme_id` int(10) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `numero_police` varchar(100) NOT NULL UNIQUE,
  `type_couverture` enum('BASE','COMPLEMENTAIRE','MUTUELLE','TIERS_PAYANT','AUTRE') NOT NULL,
  `date_debut_couverture` date NOT NULL,
  `date_fin_couverture` date DEFAULT NULL,
  `pourcentage_prise_en_charge` decimal(5,2) DEFAULT 0.00,
  `montant_plafond_annuel` decimal(12,2) DEFAULT NULL,
  `statut_couverture` enum('ACTIVE','EXPIREE','SUSPENDUE') DEFAULT 'ACTIVE',
  `observations` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `organisme_id` (`organisme_id`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `patient_assurances_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `patient_assurances_ibfk_2` FOREIGN KEY (`organisme_id`) REFERENCES `organismes_assurance` (`id`),
  CONSTRAINT `patient_assurances_ibfk_3` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `patient_assurances_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `patient_assurances_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des remboursements d'assurance
CREATE TABLE `remboursements_assurance` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `facture_id` bigint(20) UNSIGNED NOT NULL,
  `patient_assurance_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `montant_rembourse` decimal(12,2) NOT NULL,
  `date_remboursement` date NOT NULL DEFAULT current_timestamp(),
  `reference_remboursement` varchar(100) DEFAULT NULL,
  `statut` enum('EN_ATTENTE','PAYE','REFUSE','PARTIELLEMENT_PAYE') DEFAULT 'EN_ATTENTE',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `facture_id` (`facture_id`),
  KEY `patient_assurance_id` (`patient_assurance_id`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `remboursements_assurance_ibfk_1` FOREIGN KEY (`facture_id`) REFERENCES `factures` (`id`) ON DELETE CASCADE,
  CONSTRAINT `remboursements_assurance_ibfk_2` FOREIGN KEY (`patient_assurance_id`) REFERENCES `patient_assurances` (`id`),
  CONSTRAINT `remboursements_assurance_ibfk_3` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des congés et absences
CREATE TABLE `conges_absences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personnel_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `type_conge` enum('CONGE_PAYE','MALADIE','MATERNITE_PATERNITE','FORMATION','RECUPERATION','ABSENCE_INJUSTIFIEE','AUTRE') NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `duree_jours_ouvres` decimal(4,1) DEFAULT NULL,
  `motif` text DEFAULT NULL,
  `document_justificatif_url` varchar(500) DEFAULT NULL,
  `statut_demande` enum('EN_ATTENTE','APPROUVEE','REFUSEE','ANNULEE') DEFAULT 'EN_ATTENTE',
  `valide_par_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personnel_id` (`personnel_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `valide_par_id` (`valide_par_id`),
  CONSTRAINT `conges_absences_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE CASCADE,
  CONSTRAINT `conges_absences_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `conges_absences_ibfk_3` FOREIGN KEY (`valide_par_id`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `conges_absences_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `conges_absences_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des plannings du personnel
CREATE TABLE `plannings_personnel` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personnel_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `date_planning` date NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `service_affectation_id` smallint(5) UNSIGNED DEFAULT NULL,
  `unite_affectation_id` smallint(5) UNSIGNED DEFAULT NULL,
  `type_quart` enum('JOUR','NUIT','MATIN','APRES_MIDI','GARDE','ASTREINTE') NOT NULL,
  `statut` enum('PLANIFIE','REMPLACE','CONFIRME','ANNULE') DEFAULT 'PLANIFIE',
  `observations` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_personnel_date_heure` (`personnel_id`,`date_planning`,`heure_debut`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `service_affectation_id` (`service_affectation_id`),
  KEY `unite_affectation_id` (`unite_affectation_id`),
  CONSTRAINT `plannings_personnel_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`id`) ON DELETE CASCADE,
  CONSTRAINT `plannings_personnel_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `plannings_personnel_ibfk_3` FOREIGN KEY (`service_affectation_id`) REFERENCES `services` (`id`) ON DELETE SET NULL,
  CONSTRAINT `plannings_personnel_ibfk_4` FOREIGN KEY (`unite_affectation_id`) REFERENCES `unites_fonctionnelles` (`id`) ON DELETE SET NULL,
  CONSTRAINT `plannings_personnel_ibfk_5` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `plannings_personnel_ibfk_6` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Table des équipements médicaux
CREATE TABLE `equipements_medicaux` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `service_id` smallint(5) UNSIGNED DEFAULT NULL,
  `unite_id` smallint(5) UNSIGNED DEFAULT NULL,
  `nom_equipement` varchar(255) NOT NULL,
  `numero_serie` varchar(100) NOT NULL UNIQUE,
  `modele` varchar(100) DEFAULT NULL,
  `fabricant` varchar(100) DEFAULT NULL,
  `date_acquisition` date DEFAULT NULL,
  `date_mise_en_service` date DEFAULT NULL,
  `date_derniere_maintenance` date DEFAULT NULL,
  `prochaine_maintenance_due` date DEFAULT NULL,
  `statut` enum('OPERATIONNEL','EN_PANNE','EN_MAINTENANCE','RETIRE','OBSOLETE') DEFAULT 'OPERATIONNEL',
  `emplacement_actuel` varchar(255) DEFAULT NULL COMMENT 'Ex: Salle X, Chambre Y',
  `type_equipement` enum('DIAGNOSTIC','THERAPEUTIQUE','SUPPORT_VIE','CHIRURGICAL','LABORATOIRE','IMAGERIE','AUTRE') NOT NULL,
  `description_technique` text DEFAULT NULL,
  `manuel_url` varchar(500) DEFAULT NULL,
  `duree_vie_estimee_annees` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_etablissement_numero_serie` (`etablissement_id`,`numero_serie`),
  KEY `service_id` (`service_id`),
  KEY `unite_id` (`unite_id`),
  CONSTRAINT `equipements_medicaux_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `equipements_medicaux_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL,
  CONSTRAINT `equipements_medicaux_ibfk_3` FOREIGN KEY (`unite_id`) REFERENCES `unites_fonctionnelles` (`id`) ON DELETE SET NULL,
  CONSTRAINT `equipements_medicaux_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `equipements_medicaux_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des demandes de maintenance
CREATE TABLE `demandes_maintenance` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `equipement_id` bigint(20) UNSIGNED DEFAULT NULL,
  `demandeur_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Personnel ayant fait la demande',
  `date_demande` datetime NOT NULL DEFAULT current_timestamp(),
  `type_maintenance` enum('CORRECTIVE','PREVENTIVE','PREDICTIVE','INSTALLATION','AUTRE') NOT NULL,
  `urgence` enum('BASSE','MOYENNE','HAUTE','CRITIQUE') DEFAULT 'MOYENNE',
  `description_probleme` text NOT NULL,
  `localisation` varchar(255) DEFAULT NULL COMMENT 'Bâtiment, étage, salle, etc.',
  `statut_demande` enum('OUVERTE','EN_COURS','RESOLUE','FERMEE','ANNULEE') DEFAULT 'OUVERTE',
  `date_resolution_prevue` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `equipement_id` (`equipement_id`),
  KEY `demandeur_id` (`demandeur_id`),
  CONSTRAINT `demandes_maintenance_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `demandes_maintenance_ibfk_2` FOREIGN KEY (`equipement_id`) REFERENCES `equipements_medicaux` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_maintenance_ibfk_3` FOREIGN KEY (`demandeur_id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `demandes_maintenance_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `demandes_maintenance_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des interventions de maintenance
CREATE TABLE `interventions_maintenance` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `demande_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `technicien_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_heure_debut` datetime NOT NULL DEFAULT current_timestamp(),
  `date_heure_fin` datetime DEFAULT NULL,
  `description_intervention` text NOT NULL,
  `pieces_remplacees` text DEFAULT NULL COMMENT 'Liste JSON des pièces/produits utilisés',
  `cout_main_oeuvre` decimal(10,2) DEFAULT NULL,
  `cout_pieces` decimal(10,2) DEFAULT NULL,
  `cout_total` decimal(10,2) AS (`cout_main_oeuvre` + `cout_pieces`) STORED,
  `statut_intervention` enum('EN_COURS','TERMINEE','EN_ATTENTE_PIECES','ANNULEE') DEFAULT 'EN_COURS',
  `observations_technicien` text DEFAULT NULL,
  `rapport_url` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demande_id` (`demande_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `technicien_id` (`technicien_id`),
  CONSTRAINT `interventions_maintenance_ibfk_1` FOREIGN KEY (`demande_id`) REFERENCES `demandes_maintenance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `interventions_maintenance_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `interventions_maintenance_ibfk_3` FOREIGN KEY (`technicien_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `interventions_maintenance_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `interventions_maintenance_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des incidents qualité
CREATE TABLE `incidents_qualite` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `personnel_implique_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_incident` datetime NOT NULL DEFAULT current_timestamp(),
  `type_incident` enum('EVENEMENT_INDESIRABLE','ERREUR_MEDICALE','ERREUR_MEDICAMENT','INFECTION_NOSOCOMIALE','CHUTE_PATIENT','DEFECTUOSITE_MATERIEL','AUTRE') NOT NULL,
  `gravite` enum('MINEUR','MODERE','MAJEUR','CRITIQUE') NOT NULL,
  `description_incident` text NOT NULL,
  `actions_immediates` text DEFAULT NULL,
  `rapporteur_id` bigint(20) UNSIGNED NOT NULL,
  `date_declaration` datetime NOT NULL DEFAULT current_timestamp(),
  `investigation_url` varchar(500) DEFAULT NULL,
  `plan_actions_correctives` text DEFAULT NULL,
  `statut_incident` enum('DECLARE','EN_INVESTIGATION','RESOLU','FERME') DEFAULT 'DECLARE',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `patient_id` (`patient_id`),
  KEY `personnel_implique_id` (`personnel_implique_id`),
  KEY `rapporteur_id` (`rapporteur_id`),
  CONSTRAINT `incidents_qualite_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `incidents_qualite_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE SET NULL,
  CONSTRAINT `incidents_qualite_ibfk_3` FOREIGN KEY (`personnel_implique_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `incidents_qualite_ibfk_4` FOREIGN KEY (`rapporteur_id`) REFERENCES `utilisateurs_systeme` (`id`),
  CONSTRAINT `incidents_qualite_ibfk_5` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `incidents_qualite_ibfk_6` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des audits et certifications
CREATE TABLE `audits_certifications` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `nom_audit_certif` varchar(255) NOT NULL,
  `organisme_auditeur` varchar(255) DEFAULT NULL,
  `date_audit` date NOT NULL,
  `date_prochain_audit` date DEFAULT NULL,
  `resultat_audit` enum('CONFORME','NON_CONFORME_MINEUR','NON_CONFORME_MAJEUR') DEFAULT NULL,
  `statut_certif` enum('OBTENUE','EN_COURS','RENOUVELLEE','SUSPENDUE','PERDUE') DEFAULT NULL,
  `date_obtention_certif` date DEFAULT NULL,
  `date_expiration_certif` date DEFAULT NULL,
  `domaine_audit` varchar(200) DEFAULT NULL COMMENT 'Qualité, Sécurité SI, Environnement, etc.',
  `rapport_audit_url` varchar(500) DEFAULT NULL,
  `observations` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `audits_certifications_ibfk_1` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `audits_certifications_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `audits_certifications_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des messages internes
CREATE TABLE `messages_internes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `expediteur_id` bigint(20) UNSIGNED NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_envoi` datetime NOT NULL DEFAULT current_timestamp(),
  `est_lu` tinyint(1) DEFAULT 0,
  `date_lecture` datetime DEFAULT NULL,
  `est_important` tinyint(1) DEFAULT 0,
  `repond_a_message_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_message` enum('GENERAL','URGENT','INFO_SERVICE','RAPPEL','QUESTION','AUTRE') DEFAULT 'GENERAL',
  PRIMARY KEY (`id`),
  KEY `expediteur_id` (`expediteur_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `repond_a_message_id` (`repond_a_message_id`),
  CONSTRAINT `messages_internes_ibfk_1` FOREIGN KEY (`expediteur_id`) REFERENCES `utilisateurs_systeme` (`id`),
  CONSTRAINT `messages_internes_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `messages_internes_ibfk_3` FOREIGN KEY (`repond_a_message_id`) REFERENCES `messages_internes` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des destinataires des messages internes
CREATE TABLE `message_destinataires` (
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `destinataire_id` bigint(20) UNSIGNED NOT NULL,
  `est_lu` tinyint(1) DEFAULT 0,
  `date_lecture` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`message_id`, `destinataire_id`),
  KEY `destinataire_id` (`destinataire_id`),
  CONSTRAINT `message_destinataires_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `messages_internes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `message_destinataires_ibfk_2` FOREIGN KEY (`destinataire_id`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des notifications système
CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `destinataire_id` bigint(20) UNSIGNED NOT NULL,
  `type_notification` enum('ALERTE_STOCK','RENDEZ_VOUS_PROCHE','RESULTAT_URGENT','DEMANDE_MAINTENANCE','MESSAGE_INTERNE','ANNONCE','AUTRE') NOT NULL,
  `titre` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `lien_action` varchar(500) DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `est_lue` tinyint(1) DEFAULT 0,
  `date_lecture` datetime DEFAULT NULL,
  `priorite` enum('BASSE','MOYENNE','HAUTE','CRITIQUE') DEFAULT 'MOYENNE',
  `expediteur_systeme` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `destinataire_id` (`destinataire_id`),
  KEY `etablissement_id` (`etablissement_id`),
  CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`destinataire_id`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE CASCADE,
  CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des tâches
CREATE TABLE `taches` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `assignee_par_id` bigint(20) UNSIGNED NOT NULL,
  `assignee_a_id` bigint(20) UNSIGNED DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_echeance` datetime DEFAULT NULL,
  `priorite` enum('BASSE','MOYENNE','HAUTE','URGENTE') DEFAULT 'MOYENNE',
  `statut` enum('EN_ATTENTE','EN_COURS','TERMINEE','ANNULEE','REPORTEE') DEFAULT 'EN_ATTENTE',
  `date_achevement` datetime DEFAULT NULL,
  `module_lie` varchar(50) DEFAULT NULL COMMENT 'Module du système lié à la tâche (ex: PHARMACIE, MAINTENANCE)',
  `ressource_liee_id` varchar(255) DEFAULT NULL COMMENT 'ID de la ressource (patient_id, equipement_id, etc.)',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `assignee_par_id` (`assignee_par_id`),
  KEY `assignee_a_id` (`assignee_a_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `module_lie` (`module_lie`),
  CONSTRAINT `taches_ibfk_1` FOREIGN KEY (`assignee_par_id`) REFERENCES `utilisateurs_systeme` (`id`),
  CONSTRAINT `taches_ibfk_2` FOREIGN KEY (`assignee_a_id`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `taches_ibfk_3` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `taches_ibfk_4` FOREIGN KEY (`module_lie`) REFERENCES `system_modules` (`code`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table des séjours hospitaliers (déjà présente, mais ajout de `etablissement_id`)
CREATE TABLE `sejours` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `date_admission` datetime NOT NULL DEFAULT current_timestamp(),
  `date_sortie_prevue` datetime DEFAULT NULL,
  `date_sortie_reelle` datetime DEFAULT NULL,
  `motif_admission` text NOT NULL,
  `diagnostic_admission` varchar(255) DEFAULT NULL COMMENT 'Code CIM-10',
  `medecin_referent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_admission_id` smallint(5) UNSIGNED DEFAULT NULL,
  `unite_admission_id` smallint(5) UNSIGNED DEFAULT NULL,
  `lit_actuel_id` mediumint(8) UNSIGNED DEFAULT NULL,
  `statut` enum('EN_COURS','TERMINE','ANNULE') DEFAULT 'EN_COURS',
  `type_sejour` enum('HOSPITALISATION_COMPLETE','HOSPITALISATION_JOUR','URGENCE','SOINS_AMBULATOIRES') NOT NULL,
  `mode_sortie` enum('DOMICILE','TRANSFERT_ETABLISSEMENT','DECES','FUITE','AUTRE') DEFAULT NULL,
  `destination_sortie` varchar(255) DEFAULT NULL,
  `resume_medical_sortie` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `medecin_referent_id` (`medecin_referent_id`),
  KEY `service_admission_id` (`service_admission_id`),
  KEY `unite_admission_id` (`unite_admission_id`),
  KEY `lit_actuel_id` (`lit_actuel_id`),
  CONSTRAINT `sejours_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sejours_ibfk_2` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `sejours_ibfk_3` FOREIGN KEY (`medecin_referent_id`) REFERENCES `personnel` (`id`) ON DELETE SET NULL,
  CONSTRAINT `sejours_ibfk_4` FOREIGN KEY (`service_admission_id`) REFERENCES `services` (`id`) ON DELETE SET NULL,
  CONSTRAINT `sejours_ibfk_5` FOREIGN KEY (`unite_admission_id`) REFERENCES `unites_fonctionnelles` (`id`) ON DELETE SET NULL,
  CONSTRAINT `sejours_ibfk_6` FOREIGN KEY (`lit_actuel_id`) REFERENCES `lits` (`id`) ON DELETE SET NULL,
  CONSTRAINT `sejours_ibfk_7` FOREIGN KEY (`created_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL,
  CONSTRAINT `sejours_ibfk_8` FOREIGN KEY (`updated_by`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Triggers pour gérer l'occupation des lits
DELIMITER $$
CREATE TRIGGER `after_sejour_insert` AFTER INSERT ON `sejours` FOR EACH ROW 
BEGIN
    IF NEW.lit_id IS NOT NULL THEN
        UPDATE lits 
        SET statut = 'OCCUPE',
            reserve_pour_patient_id = NULL,
            date_reservation = NULL
        WHERE id = NEW.lit_id;
    END IF;
END$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `after_sejour_update` AFTER UPDATE ON `sejours` FOR EACH ROW 
BEGIN
    IF NEW.statut = 'TERMINE' AND OLD.statut != 'TERMINE' AND NEW.lit_id IS NOT NULL THEN
        UPDATE lits 
        SET statut = 'LIBRE',
            date_derniere_desinfection = CURRENT_TIMESTAMP
        WHERE id = NEW.lit_id;
    END IF;
END$$
DELIMITER ;
-- Table des transferts de lits/chambres pendant un séjour
CREATE TABLE `transferts_lits` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sejour_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `etablissement_id` smallint(5) UNSIGNED NOT NULL,
  `lit_precedent_id` mediumint(8) UNSIGNED DEFAULT NULL,
  `lit_nouveau_id` mediumint(8) UNSIGNED NOT NULL,
  `date_heure_transfert` datetime NOT NULL DEFAULT current_timestamp(),
  `motif_transfert` text DEFAULT NULL,
  `transfert_par_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `sejour_id` (`sejour_id`),
  KEY `patient_id` (`patient_id`),
  KEY `etablissement_id` (`etablissement_id`),
  KEY `lit_precedent_id` (`lit_precedent_id`),
  KEY `lit_nouveau_id` (`lit_nouveau_id`),
  KEY `transfert_par_id` (`transfert_par_id`),
  CONSTRAINT `transferts_lits_ibfk_1` FOREIGN KEY (`sejour_id`) REFERENCES `sejours` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transferts_lits_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  CONSTRAINT `transferts_lits_ibfk_3` FOREIGN KEY (`etablissement_id`) REFERENCES `etablissements` (`id`),
  CONSTRAINT `transferts_lits_ibfk_4` FOREIGN KEY (`lit_precedent_id`) REFERENCES `lits` (`id`) ON DELETE SET NULL,
  CONSTRAINT `transferts_lits_ibfk_5` FOREIGN KEY (`lit_nouveau_id`) REFERENCES `lits` (`id`),
  CONSTRAINT `transferts_lits_ibfk_6` FOREIGN KEY (`transfert_par_id`) REFERENCES `utilisateurs_systeme` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;