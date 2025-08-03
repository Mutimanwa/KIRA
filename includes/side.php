<?php
require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../config/security.php';

// Structure du menu avec les icônes et les sous-menus
$menu = [
    'dashboard' => [
        'title' => 'Tableau de bord',
        'icon' => 'bi bi-speedometer2',
        'url' => '/dashboard.php'
    ],
    'patients' => [
        'title' => 'Patients',
        'icon' => 'bi bi-people',
        'submenu' => [
            'dossiers_medicaux' => [
                'title' => 'Dossiers médicaux',
                'url' => '/modules/patients/dossiers_medicaux/'
            ]
        ]
    ],
    'consultations' => [
        'title' => 'Consultations',
        'icon' => 'bi bi-journal-medical',
        'submenu' => [
            'consultations' => [
                'title' => 'Liste des consultations',
                'url' => '/modules/consultations/consultations/'
            ],
            'ordonnances' => [
                'title' => 'Ordonnances',
                'url' => '/modules/consultations/ordonnances/'
            ],
            'rendezvous' => [
                'title' => 'Rendez-vous',
                'url' => '/modules/consultations/rendezvous/'
            ]
        ]
    ],
    'pharmacie' => [
        'title' => 'Pharmacie',
        'icon' => 'bi bi-capsule',
        'submenu' => [
            'stock' => [
                'title' => 'Gestion du stock',
                'url' => '/modules/pharmacie/stock/'
            ],
            'mouvements' => [
                'title' => 'Mouvements',
                'url' => '/modules/pharmacie/mouvements/'
            ]
        ]
    ],
    'laboratoire' => [
        'title' => 'Laboratoire',
        'icon' => 'bi bi-microscope',
        'url' => '/modules/laboratoire/'
    ],
    'radiologie' => [
        'title' => 'Radiologie',
        'icon' => 'bi bi-radioactive',
        'url' => '/modules/radiologie/'
    ],
    'hospitalisation' => [
        'title' => 'Hospitalisation',
        'icon' => 'bi bi-hospital',
        'url' => '/modules/hospitalisation/'
    ],
    'bloc_operatoire' => [
        'title' => 'Bloc opératoire',
        'icon' => 'bi bi-scissors',
        'url' => '/modules/bloc_operatoire/'
    ],
    'maternite' => [
        'title' => 'Maternité',
        'icon' => 'bi bi-heart',
        'submenu' => [
            'grossesses' => [
                'title' => 'Suivi grossesses',
                'url' => '/modules/maternite/grossesses/'
            ],
            'accouchements' => [
                'title' => 'Accouchements',
                'url' => '/modules/maternite/accouchements/'
            ],
            'nouveau_nes' => [
                'title' => 'Nouveau-nés',
                'url' => '/modules/maternite/nouveau_nes/'
            ]
        ]
    ],
    'facturation' => [
        'title' => 'Facturation',
        'icon' => 'bi bi-cash-coin',
        'url' => '/modules/facturation/'
    ],
    'rh' => [
        'title' => 'Ressources Humaines',
        'icon' => 'bi bi-person-badge',
        'submenu' => [
            'personnel' => [
                'title' => 'Personnel',
                'url' => '/modules/rh/personnel/'
            ],
            'contrats' => [
                'title' => 'Contrats',
                'url' => '/modules/rh/contrats/'
            ],
            'presence' => [
                'title' => 'Présence',
                'url' => '/modules/rh/presence/'
            ]
        ]
    ],
    'parametres' => [
        'title' => 'Paramètres',
        'icon' => 'bi bi-gear',
        'submenu' => [
            'informations_hopital' => [
                'title' => 'Informations hôpital',
                'url' => '/modules/parametres/informations_hopital/'
            ],
            'gestion_services' => [
                'title' => 'Services',
                'url' => '/modules/parametres/gestion_services/'
            ],
            'gestion_batiments' => [
                'title' => 'Bâtiments',
                'url' => '/modules/parametres/gestion_batiments/'
            ]
        ]
    ]
];

function renderMenuItem($key, $item) {
    $hasSubmenu = isset($item['submenu']);
    $active = strpos($_SERVER['REQUEST_URI'], $item['url'] ?? '') !== false ? 'active' : '';
    $expanded = $active && $hasSubmenu ? 'true' : 'false';
    
    $html = '<li class="nav-item">';
    
    if ($hasSubmenu) {
        $html .= sprintf(
            '<a class="nav-link %s" data-bs-toggle="collapse" href="#%s" aria-expanded="%s">
                <i class="%s"></i>
                <span>%s</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>',
            $active,
            $key,
            $expanded,
            $item['icon'],
            $item['title']
        );
        
        $html .= sprintf(
            '<ul id="%s" class="nav-content collapse %s" data-bs-parent="#sidebar-nav">',
            $key,
            $active ? 'show' : ''
        );
        
        foreach ($item['submenu'] as $subKey => $subItem) {
            if (hasAccess($key . '/' . $subKey)) {
                $subActive = strpos($_SERVER['REQUEST_URI'], $subItem['url']) !== false ? 'active' : '';
                $html .= sprintf(
                    '<li>
                        <a href="%s" class="%s">
                            <i class="bi bi-circle"></i>
                            <span>%s</span>
                        </a>
                    </li>',
                    $subItem['url'],
                    $subActive,
                    $subItem['title']
                );
            }
        }
        
        $html .= '</ul>';
    } else {
        $html .= sprintf(
            '<a class="nav-link %s" href="%s">
                <i class="%s"></i>
                <span>%s</span>
            </a>',
            $active,
            $item['url'],
            $item['icon'],
            $item['title']
        );
    }
    
    $html .= '</li>';
    return $html;
}
?>

<!-- Sidebar -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <?php foreach ($menu as $key => $item): ?>
            <?php echo renderMenuItem($key, $item); ?>
        <?php endforeach; ?>
    </ul>
</aside>
