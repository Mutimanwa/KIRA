<?php
// Menu hiérarchique de l'hôpital KIRA organisé par départements et fonctions

function generateHospitalMenu() {
    $menu = [
        // Dashboard Principal
        'dashboard' => [
            'title' => 'Tableau de Bord',
            'icon' => 'ri-dashboard-line',
            'url' => 'dashboard.php',
            'submenu' => []
        ],
        
        // Administration Générale
        'administration' => [
            'title' => 'Administration',
            'icon' => 'ri-settings-2-line',
            'submenu' => [
                'utilisateurs' => [
                    'title' => 'Gestion Utilisateurs',
                    'url' => 'gestion-utilisateurs.php',
                    'icon' => 'ri-user-settings-line'
                ],
                'droits-acces' => [
                    'title' => 'Droits d\'Accès',
                    'url' => 'droits-acces.php',
                    'icon' => 'ri-shield-keyhole-line'
                ],
                'audits' => [
                    'title' => 'Audits & Logs',
                    'url' => 'audits.php',
                    'icon' => 'ri-file-list-3-line'
                ],
                'backup' => [
                    'title' => 'Sauvegarde',
                    'url' => 'backup.php',
                    'icon' => 'ri-database-2-line'
                ]
            ]
        ],
        
        // Direction des Soins
        'soins' => [
            'title' => 'Direction des Soins',
            'icon' => 'ri-nurse-line',
            'submenu' => [
                'patients' => [
                    'title' => 'Patients',
                    'icon' => 'ri-user-heart-line',
                    'submenu' => [
                        'liste-patients' => [
                            'title' => 'Liste des Patients',
                            'url' => 'patients-list.php',
                            'icon' => 'ri-list-check-2'
                        ],
                        'ajouter-patient' => [
                            'title' => 'Ajouter Patient',
                            'url' => 'add-patient.php',
                            'icon' => 'ri-user-add-line'
                        ],
                        'dossiers-medicaux' => [
                            'title' => 'Dossiers Médicaux',
                            'url' => 'dossier-medical.php',
                            'icon' => 'ri-file-text-line'
                        ]
                    ]
                ],
                'consultations' => [
                    'title' => 'Consultations',
                    'icon' => 'ri-stethoscope-line',
                    'submenu' => [
                        'consultations-generales' => [
                            'title' => 'Consultations Générales',
                            'url' => 'consultations-generales.php',
                            'icon' => 'ri-heart-pulse-line'
                        ],
                        'consultations-specialistes' => [
                            'title' => 'Consultations Spécialistes',
                            'url' => 'consultations-specialistes.php',
                            'icon' => 'ri-brain-line'
                        ],
                        'nouvelle-consultation' => [
                            'title' => 'Nouvelle Consultation',
                            'url' => 'nouvel-consultation-specialiste.php',
                            'icon' => 'ri-add-circle-line'
                        ]
                    ]
                ],
                'rendez-vous' => [
                    'title' => 'Rendez-vous',
                    'icon' => 'ri-calendar-schedule-line',
                    'submenu' => [
                        'liste-rdv' => [
                            'title' => 'Liste des RDV',
                            'url' => 'appointments-list.php',
                            'icon' => 'ri-calendar-check-line'
                        ],
                        'prendre-rdv' => [
                            'title' => 'Prendre RDV',
                            'url' => 'book-appointment.php',
                            'icon' => 'ri-calendar-add-line'
                        ]
                    ]
                ]
            ]
        ],
        
        // Direction Médicale
        'medicale' => [
            'title' => 'Direction Médicale',
            'icon' => 'ri-microscope-line',
            'submenu' => [
                'medecins' => [
                    'title' => 'Médecins',
                    'icon' => 'ri-user-star-line',
                    'submenu' => [
                        'liste-medecins' => [
                            'title' => 'Liste des Médecins',
                            'url' => 'doctors-list.php',
                            'icon' => 'ri-list-check-2'
                        ],
                        'ajouter-medecin' => [
                            'title' => 'Ajouter Médecin',
                            'url' => 'add-doctors.php',
                            'icon' => 'ri-user-add-line'
                        ],
                        'specialites' => [
                            'title' => 'Spécialités',
                            'url' => 'doctors-cards.php',
                            'icon' => 'ri-award-line'
                        ]
                    ]
                ],
                'departements' => [
                    'title' => 'Départements',
                    'icon' => 'ri-building-2-line',
                    'submenu' => [
                        'liste-departements' => [
                            'title' => 'Liste Départements',
                            'url' => 'departments-list.php',
                            'icon' => 'ri-list-check-2'
                        ],
                        'ajouter-departement' => [
                            'title' => 'Ajouter Département',
                            'url' => 'add-department.php',
                            'icon' => 'ri-add-circle-line'
                        ]
                    ]
                ],
                'laboratoire' => [
                    'title' => 'Laboratoire',
                    'icon' => 'ri-test-tube-line',
                    'submenu' => [
                        'biologie' => [
                            'title' => 'Biologie',
                            'url' => 'biologie.php',
                            'icon' => 'ri-flask-line'
                        ],
                        'microbiologie' => [
                            'title' => 'Microbiologie',
                            'url' => 'microbiologie.php',
                            'icon' => 'ri-virus-line'
                        ],
                        'demandes-examens' => [
                            'title' => 'Demandes d\'Examens',
                            'url' => 'demandes-examens.php',
                            'icon' => 'ri-file-list-3-line'
                        ]
                    ]
                ],
                'imagerie' => [
                    'title' => 'Imagerie Médicale',
                    'icon' => 'ri-x-ray-line',
                    'submenu' => [
                        'echographie' => [
                            'title' => 'Échographie',
                            'url' => 'echographie.php',
                            'icon' => 'ri-heart-add-line'
                        ],
                        'irm-scanner' => [
                            'title' => 'IRM/Scanner',
                            'url' => 'irm-scanner.php',
                            'icon' => 'ri-brain-line'
                        ],
                        'pacs' => [
                            'title' => 'PACS',
                            'url' => 'pacs.php',
                            'icon' => 'ri-image-line'
                        ],
                        'demandes-imagerie' => [
                            'title' => 'Demandes Imagerie',
                            'url' => 'demandes-imagerie.php',
                            'icon' => 'ri-file-image-line'
                        ]
                    ]
                ]
            ]
        ],
        
        // Pharmacie
        'pharmacie' => [
            'title' => 'Pharmacie',
            'icon' => 'ri-medicine-bottle-line',
            'submenu' => [
                'medicaments' => [
                    'title' => 'Médicaments',
                    'url' => 'medicaments.php',
                    'icon' => 'ri-pills-line'
                ],
                'dispensation' => [
                    'title' => 'Dispensation',
                    'url' => 'dispensation.php',
                    'icon' => 'ri-hand-heart-line'
                ]
            ]
        ],
        
        // Bloc Opératoire
        'bloc-operatoire' => [
            'title' => 'Bloc Opératoire',
            'icon' => 'ri-scissors-cut-line',
            'submenu' => [
                'planning' => [
                    'title' => 'Planning Opérations',
                    'url' => 'bloc-operatoire.php',
                    'icon' => 'ri-calendar-todo-line'
                ]
            ]
        ],
        
        // Gestion des Lits
        'lits' => [
            'title' => 'Gestion des Lits',
            'icon' => 'ri-hotel-bed-line',
            'submenu' => [
                'chambres' => [
                    'title' => 'Chambres',
                    'submenu' => [
                        'liste-chambres' => [
                            'title' => 'Liste des Chambres',
                            'url' => 'available-rooms.php',
                            'icon' => 'ri-list-check-2'
                        ],
                        'ajouter-chambre' => [
                            'title' => 'Ajouter Chambre',
                            'url' => 'add-chambre.php',
                            'icon' => 'ri-add-circle-line'
                        ],
                        'gestion-chambres' => [
                            'title' => 'Gestion Chambres',
                            'url' => 'gestion-chambres.php',
                            'icon' => 'ri-settings-2-line'
                        ]
                    ]
                ],
                'lits' => [
                    'title' => 'Lits',
                    'submenu' => [
                        'liste-lits' => [
                            'title' => 'Liste des Lits',
                            'url' => 'gestion-lits.php',
                            'icon' => 'ri-list-check-2'
                        ],
                        'ajouter-lit' => [
                            'title' => 'Ajouter Lit',
                            'url' => 'add-lits.php',
                            'icon' => 'ri-add-circle-line'
                        ],
                        'affectation-lits' => [
                            'title' => 'Affectation des Lits',
                            'url' => 'affectation-lits.php',
                            'icon' => 'ri-exchange-line'
                        ],
                        'disponibilite-lits' => [
                            'title' => 'Disponibilité des Lits',
                            'url' => 'disponibilite-lits.php',
                            'icon' => 'ri-calendar-check-line'
                        ],
                        'occupation-lits' => [
                            'title' => 'Occupation des Lits',
                            'url' => 'occupation-lits.php',
                            'icon' => 'ri-pie-chart-line'
                        ]
                    ]
                ]
            ]
        ],
        
        // Ambulances
        'ambulances' => [
            'title' => 'Ambulances',
            'icon' => 'ri-ambulance-line',
            'submenu' => [
                'liste-ambulances' => [
                    'title' => 'Liste des Ambulances',
                    'url' => 'ambulance-list.php',
                    'icon' => 'ri-list-check-2'
                ],
                'ajouter-ambulance' => [
                    'title' => 'Ajouter Ambulance',
                    'url' => 'add-ambulance.php',
                    'icon' => 'ri-add-circle-line'
                ],
                'appels-ambulance' => [
                    'title' => 'Appels Ambulance',
                    'url' => 'ambulance-call-list.php',
                    'icon' => 'ri-phone-line'
                ],
                'gestion-ambulances' => [
                    'title' => 'Gestion Ambulances',
                    'url' => 'gestion-ambulances.php',
                    'icon' => 'ri-settings-2-line'
                ]
            ]
        ],
        
        // Personnel
        'personnel' => [
            'title' => 'Personnel',
            'icon' => 'ri-team-line',
            'submenu' => [
                'staff' => [
                    'title' => 'Staff',
                    'url' => 'staff.html',
                    'icon' => 'ri-user-line'
                ],
                'ajouter-staff' => [
                    'title' => 'Ajouter Staff',
                    'url' => 'add-staff.php',
                    'icon' => 'ri-user-add-line'
                ],
                'gestion-personnel' => [
                    'title' => 'Gestion Personnel',
                    'url' => 'gestion-personnel.php',
                    'icon' => 'ri-settings-2-line'
                ],
                'conges' => [
                    'title' => 'Congés',
                    'url' => 'conges.php',
                    'icon' => 'ri-calendar-event-line'
                ],
                'formations' => [
                    'title' => 'Formations',
                    'url' => 'formations.php',
                    'icon' => 'ri-graduation-cap-line'
                ]
            ]
        ],
        
        // Finances
        'finances' => [
            'title' => 'Finances',
            'icon' => 'ri-money-dollar-circle-line',
            'submenu' => [
                'facturation' => [
                    'title' => 'Facturation',
                    'url' => 'facturation.php',
                    'icon' => 'ri-file-list-3-line'
                ],
                'encaissements' => [
                    'title' => 'Encaissements',
                    'url' => 'encaissements.php',
                    'icon' => 'ri-hand-coin-line'
                ],
                'devis' => [
                    'title' => 'Devis',
                    'url' => 'devis.php',
                    'icon' => 'ri-file-text-line'
                ],
                'comptabilite' => [
                    'title' => 'Comptabilité',
                    'url' => 'comptabilite.php',
                    'icon' => 'ri-calculator-line'
                ],
                'indicateurs-financiers' => [
                    'title' => 'Indicateurs Financiers',
                    'url' => 'indicateurs-financiers.php',
                    'icon' => 'ri-bar-chart-line'
                ]
            ]
        ],
        
        // Communication
        'communication' => [
            'title' => 'Communication',
            'icon' => 'ri-message-2-line',
            'submenu' => [
                'chat' => [
                    'title' => 'Chat',
                    'url' => 'chat.php',
                    'icon' => 'ri-chat-1-line'
                ],
                'messagerie' => [
                    'title' => 'Messagerie',
                    'url' => 'messagerie.php',
                    'icon' => 'ri-mail-line'
                ],
                'annonces' => [
                    'title' => 'Annonces',
                    'url' => 'annonces.php',
                    'icon' => 'ri-megaphone-line'
                ]
            ]
        ]
    ];
    
    return $menu;
}

function renderMenu($menu, $level = 0) {
    $html = '';
    foreach ($menu as $key => $item) {
        $hasSubmenu = isset($item['submenu']) && !empty($item['submenu']);
        $html .= '<li class="menu-item level-' . $level . '">';
        
        if (isset($item['url'])) {
            $html .= '<a href="' . $item['url'] . '" class="menu-link">';
            if (isset($item['icon'])) {
                $html .= '<i class="' . $item['icon'] . '"></i>';
            }
            $html .= '<span>' . $item['title'] . '</span>';
            $html .= '</a>';
        } else {
            $html .= '<a href="#" class="menu-link menu-toggle">';
            if (isset($item['icon'])) {
                $html .= '<i class="' . $item['icon'] . '"></i>';
            }
            $html .= '<span>' . $item['title'] . '</span>';
            if ($hasSubmenu) {
                $html .= '<i class="ri-arrow-down-s-line"></i>';
            }
            $html .= '</a>';
        }
        
        if ($hasSubmenu) {
            $html .= '<ul class="submenu level-' . ($level + 1) . '">';
            $html .= renderMenu($item['submenu'], $level + 1);
            $html .= '</ul>';
        }
        
        $html .= '</li>';
    }
    return $html;
}

