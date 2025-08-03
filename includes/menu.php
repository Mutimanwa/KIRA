<?php 

$menu = [
    'dashboard' => [
        'titre' => 'Tableau de bord',
        'icon'=> 'ri-home-6-line',
        'url' => 'dashboard.php'
    ],
    // 1. Gestion des Patients
    'gestionPatient' => [
        'titre' => 'Dossier Patient',
        'icon' => 'ri-user-line',
        'sous-menu' => [
            'admission' =>[
                'titre' => 'Admission',
                'url' => 'GestionDePatients/DossierPatient/admission/admission.php'
            ],
            'liste-patient' => [
                'titre' => 'Liste des patients',
                'url' => 'GestionDePatients/DossierPatient/patients-list.php'
            ],
            'DossierMedicale' => [
                'titre' => 'Dossier médical complet',
                'url' => 'GestionDePatients/DossierPatient/dossier-medical.php'

            ],
            'Historique' => [
                'titre'=> 'Historique',
                'url'=> 'GestionDePatients/DossierPatient/historique-patient.php'
            ],
            'Recherche' => [
                'titre'=> 'Recherche avancée',
                'url'=> 'GestionDePatients/DossierPatient/recherche-patient.php'
            ]

        ]
    ],
    'Hospitalisation' => [
        'titre' => 'Hospitalisation',
        'icon' => 'ri-hotel-bed-line',
        'sous-menu' => [
            'Planning' => [
                'titre' => 'Planning',
                'url' => 'GestionDePatients/hospitalisation/planing-hospitalisation.php'
            ],
            'Suivi-quotidien' => [
                'titre' => 'Suivi quotidien',
                'url' => 'GestionDePatients/hospitalisation/suivi-hospitalisation.php'
            ],
            'gestionSortie' => [
                'titre' => 'Gestion des sorties',
                'url' => 'GestionDePatients/hospitalisation/sortie-patient.php'
            ]
        ]
    ],
    'Rendez-vous' => [
        'titre' => 'Rendez-vous',
        'icon'=> 'ri-calendar-event-line',
        'url' => 'GestionDePatients/rendez-vous/appointments.php'
    ],
    // 2. Services Cliniques
    'Consultations' => [
        'titre' => 'Consultations',
        'icon' => 'ri-stethoscope-line',
        'sous-menu' => [
            'Consultations-Generales' => [
                'titre' => 'Générales',
                'url' => 'ServiceClinique/consultations/consultations-generales.php'
            ],
            'Specialistes' => [
                'titre' => 'Spécialistes',
                'url' => 'ServiceClinique/consultations/consultations-specialistes.php'
            ],
            'Teleconsultations' =>[
                'titre' => 'Téléconsultations',
                'url' => 'ServiceClinique/consultations/teleconsultations.php'
            ]
            
        ]
    ],
    'maternite' => [
        'titre' => 'Maternité',
        'icon' => 'ri-hearts-line',
        'sous-menu' => [
            'suivi-prenatal' => [
                'titre' => 'Suivi prénatal',
                'url' => 'ServiceClinique/maternite/suivi-prenatal.php'
            ],
            'accouchement' => [
                'titre' => 'Accouchement',
                'url' => 'ServiceClinique/maternite/post-partum.php'
            ],
            'nouveau-nes' => [
                'titre' => 'Nouveau nes',
                'url' => 'ServiceClinique/maternite/nouveau-nes'
            ],
            'Post-parum' => [
                'titre' => 'Post-partum',
                'url' => 'ServiceClinique/maternite/post-parfum.php'
            ],
            'planningFamilial' => [
                'titre' => 'Planning familial',
                'url' => 'ServiceClinique/maternite/planning-familial.php'
            ]
        ]
    ], 
    'Pediatrie' => [
        'titre' => 'Pédiatrie',
        'icon' => 'ri-heart-pulse-line',
        'sous-menu' => [
            'nouveau-nes' => [
                'titre' => 'Soins nouveau-nés',
                'url' => 'ServiceClinique/maternite/nouveau-nes.php'
            ],
            'vaccinations' => [
                'titre' => 'Vaccinations',
                'url' => 'ServiceClinique/maternite/vaccinations.php'
            ],
            'croissance' => [
                'titre' => 'Suivi croissance',
                'url' => 'ServiceClinique/maternite/croissance.php'
            ]
        ]
    ],
    'Chirurgie' => [
        'titre'=> 'Chirurgie',
        'icon' => 'ri-scissors-line',
        'sous-menu' => [
            'PlanningChurirgie' => [
                'titre' => 'Planning opératoire',
                'url' => 'ServiceClinique/chirurgie/planning-chirurgie.php'
            ],
            'BlocOperatoire' => [
                'titre' => 'Bloc opératoire',
                'url' => 'ServiceClinique/chirurgie/bloc-operatoire'
            ],
            'Intervation' => [
                'titre' => 'Interventions',
                'url' => 'ServiceClinique/chirurgie/interventions.php'
            ],
            'suivi-postop' => [
                'titre' => 'Suivi post-op',
                'url' => 'ServiceClinique/chirurgie/suivi-postop.php'
            ]
        ]
    ],
    'Urgences' =>[
        'titre' => 'Urgences',
        'icon' => 'ri-first-aid-kit-line',
        'sous-menu' => [
            'Triage' => [
                'titre' => 'Triage',
                'url' => 'ServiceClinique/urgences/tri.php'
            ],
            'admission-rapide' =>[
                'titre' => 'Admission rapide',
                'url' => 'ServiceClinique/urgences/admission-rapide.php'
            ],
            'SoinsImmediats' => [
                'titre' => 'Soins immédiats',
                'url' => 'ServiceClinique/urgences/soins-immediats.php'
            ],
            'RegistreUrgence' => [
                'titre' => 'Registre des urgences',
                'url' => 'ServiceClinique/urgences/registre-urgences.php'
            ]
        ]
    ],
    'Psychiatrie' => [
        'titre' => 'Psychiatrie',
        'icon' => 'ri-mental-health-line',
        'sous-menu' => [
            'Evaluation' =>[
                'titre' => 'Évaluations',
                'url' => 'ServiceClinique/psychiatrie/evaluations-psy.php'
            ],
            'Therapies' => [
                'titre' => 'Thérapies' ,
                'url' => 'ServiceClinique/psychiatrie/therapies.php'
            ]
        ]
    ],
    'Nutrition' => [
        'titre' => 'Nutrition',
        'icon' => 'ri-restaurant-line',
        'sous-menu' => [
            'bilan' => [
                'titre' => 'Bilans',
                'url' => 'ServiceClinique/nutrition/bilans-nutrition.php'
            ],
            'regimes' => [
                'titre' => 'Régimes spécifiques',
                'url' => 'ServiceClinique/nutrition/regimes.php'
            ]

        ]
    ],
    // 3. Prescriptions & Examens
    'Prescriptions' => [
        'titre' => 'Prescriptions',
        'icon' => 'ri-capsule-line' ,
        'sous-menu' => [
            'Nouvelleprescription' => [
                'titre' => 'Nouvelle prescription',
                'url' => 'PrescriptionEtExamens/prescription/prescriptions.php'
            ],
            'Validation' => [
                'titre' => 'Validation',
                'url' => 'PrescriptionEtExamens/prescription/validation-prescription.php'
            ],
            'Historique' => [
                'titre' => 'Historique',
                'url' => 'PrescriptionEtExamens/prescription/historique-prescriptions.php'
            ],
            'Interactions' => [
                'titre' => 'Interactions',
                'url' => 'PrescriptionEtExamens/prescription/interactions-medicamenteuses.php'
            ] 
        ]
    ],
    'Laboratoire' => [
        'titre' => 'Laboratoire',
        'icon' => 'ri-test-tube-line' ,
        'sous-menu' => [
            'Demandes' => [
                'titre' => 'Demandes',
                'url' => 'PrescriptionEtExamens/laboratoire/demandes-examens.php'
            ],
            'Résultats' => [
                'titre' => 'Résultats',
                'url' => 'PrescriptionEtExamens/laboratoire/resultats-lab.php'
            ],
            'Biologie' => [
                'titre' => 'Biologie',
                'url' => 'PrescriptionEtExamens/laboratoire/biologie.php'
            ],
            'Microbiologie' => [
                'titre' => 'Microbiologie',
                'url' => 'PrescriptionEtExamens/laboratoire/microbiologie.php'
            ]    
        ]
    ],
    'ImagerieMedicale' => [
        'titre' => 'Imagerie Médicale',
        'icon' => 'ri-image-line' ,
        'sous-menu' => [
            'Demandes' => [
                'titre' => 'Demandes',
                'url' => 'PrescriptionEtExamens/imagerie/demandes-imagerie.php'
            ],
            'Radiologie' => [
                'titre' => 'Radiologie',
                'url' => 'PrescriptionEtExamens/imagerie/radiologie.php'
            ],
            'y' => [
                'titre' => '',
                'url' => ''
            ],
            'x' => [
                'titre' => '',
                'url' => ''
            ],
            '' => [
                'titre' => '',
                'url' => ''
            ] 
        ]
    ],
    '' => [
        'titre' => '',
        'icon' => '' ,
        'sous-menu' => [
            '' => [
                'titre' => '',
                'url' => ''
            ] 
        ]
    ],

];


function trieMenu($key ,$item){
    $hasSous_menu = isset($menu['sous-menu']);
    $Pageactive = strpos($_SERVER['REQUEST_URI'] ,$item['url'] ?? '' ) !==  false ? 'active' : '';
    $expanded = $Pageactive && $hasSous_menu ? 'true' : 'false';

    $html = "<li>";

    if($hasSous_menu){
        $html .= sprintf(
            '
            <li></li>
            '
        );
    }
}
// foreach ($menu as $key => $value) {
//     echo "<pre>";
//     print_r($value  );
//     echo"</pre>";
    
// }

// echo "<pre>";
// print_r($menu);
// echo"</pre>";