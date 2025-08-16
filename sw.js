const CACHE_NAME = 'kira-pwa-v2';
const urlsToCache = [
  // Pages principales
  '/KIRA/',
  '/KIRA/home/dashboard.php',
  '/KIRA/home/page-not-found.php',
  '/KIRA/home/patients-list.php',
  '/KIRA/home/add-patient.php',
  '/KIRA/home/edit-patient.php',
  '/KIRA/home/patient-dashboard.php',
  '/KIRA/home/doctors-list.php',
  '/KIRA/home/appointments.php',
  '/KIRA/home/available-rooms.php',
  '/KIRA/home/payments.php',
  '/KIRA/home/income.php',
  '/KIRA/home/parametre.php',


  
  // Composants PHP
  '/KIRA/home/header.php',
  '/KIRA/home/footer.php',
  
  // CSS
  '/KIRA/assets/css/bootstrap.min.css',
  '/KIRA/assets/css/app.min.css',
  '/KIRA/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.css',
  '/KIRA/assets/vendor/datatables/dataTables.bootstrap.min.css',
  
  // JavaScript
  '/KIRA/assets/js/jquery.min.js',
  '/KIRA/assets/js/bootstrap.bundle.min.js',
  '/KIRA/assets/js/moment.min.js',
  '/KIRA/assets/js/custom.js',
  
  // Vendor JS
  '/KIRA/assets/vendor/owlcarousel/owl.carousel.js',
  '/KIRA/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js',
  '/KIRA/assets/vendor/overlay-scroll/custom-scrollbar.js',
  '/KIRA/assets/vendor/apex/apexcharts.min.js',
  '/KIRA/assets/vendor/datatables/dataTables.min.js',
  '/KIRA/assets/vendor/datatables/dataTables.bootstrap.min.js',
  '/KIRA/assets/vendor/datatables/custom/custom-datatables.js',
  '/KIRA/assets/vendor/datatables/buttons/dataTables.buttons.min.js',
  '/KIRA/assets/vendor/datatables/buttons/jszip.min.js',
  '/KIRA/assets/vendor/datatables/buttons/pdfmake.min.js',
  '/KIRA/assets/vendor/datatables/buttons/vfs_fonts.js',
  '/KIRA/assets/vendor/datatables/buttons/buttons.html5.min.js',
  '/KIRA/assets/vendor/datatables/buttons/buttons.print.min.js',
  '/KIRA/assets/vendor/datatables/buttons/buttons.colVis.min.js',
  '/KIRA/assets/vendor/calendar/js/main.min.js',
  '/KIRA/assets/vendor/calendar/custom/appointments-calendar.js',
  '/KIRA/assets/vendor/calendar/custom/planing-hospitalisation.js',
  '/KIRA/assets/vendor/dropzone/dropzone.min.js',
  
  // Graphiques et données
  '/KIRA/assets/vendor/apex/custom/home/patients.js',
  '/KIRA/assets/vendor/apex/custom/home/treatment.js',
  '/KIRA/assets/vendor/apex/custom/home/available-beds.js',
  '/KIRA/assets/vendor/apex/custom/home/earnings.js',
  '/KIRA/assets/vendor/apex/custom/home/gender-age.js',
  '/KIRA/assets/vendor/apex/custom/home/claims.js',
  '/KIRA/assets/vendor/apex/custom/patients/healthActivity.js',
  '/KIRA/assets/vendor/apex/custom/patients/insuranceClaims.js',
  '/KIRA/assets/vendor/apex/custom/patients/medicalExpenses.js',
  '/KIRA/assets/vendor/apex/custom/patients/sparklines.js',
  '/KIRA/assets/vendor/apex/custom/payments/payments.js',
  '/KIRA/assets/vendor/apex/custom/income/income.js',
  
  // Icônes et images
  '/KIRA/favicons/icon-192.png',
  '/KIRA/favicons/icon-512.png',
  '/KIRA/favicons/android-launchericon-192-192.png',
  '/KIRA/favicons/android-launchericon-512-512.png',
  '/KIRA/favicons/16.png',
  '/KIRA/favicons/32.png',
  '/KIRA/favicons/57.png',
  '/KIRA/favicons/72.png',
  '/KIRA/favicons/114.png',
  '/KIRA/favicons/144.png',
  '/KIRA/favicons/180.png',
   // bg images 
   '/KIRA/assets/images/banner.svg',
   '/KIRA/assets/images/banner2.svg',
   '/KIRA/assets/images/banner3.svg',
   '/KIRA/assets/images/bg.jpg',
   '/KIRA/assets/images/doctor.svg',
   '/KIRA/assets/images/logo.png',
   '/KIRA/assets/images/favi.png',
   '/KIRA/assets/images/login-bg.png',
  
  // Fonts
  '/KIRA/assets/fonts/remixicon/remixicon.css',
  '/KIRA/assets/fonts/remixicon/remixicon.woff2',
  
  // Fichiers de configuration
  '/KIRA/manifest.json',
  '/KIRA/pwa-register.js'
];

// Installation du Service Worker
self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        console.log('Ouverture du cache complet');
        return cache.addAll(urlsToCache);
      })
      .catch((error) => {
        console.log('Erreur lors du cache:', error);
      })
  );
});

// Stratégie de cache avec mise à jour
self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((response) => {
        // Cache hit - return response
        if (response) {
          return response;
        }
        
        // Clone the request
        const fetchRequest = event.request.clone();
        
        return fetch(fetchRequest).then((response) => {
          // Check if valid response
          if (!response || response.status !== 200 || response.type !== 'basic') {
            return response;
          }
          
          // Clone the response
          const responseToCache = response.clone();
          
          caches.open(CACHE_NAME)
            .then((cache) => {
              cache.put(event.request, responseToCache);
            });
          
          return response;
        }).catch(() => {
          // Fallback pour les requêtes hors ligne
          return caches.match('/KIRA/home/page-not-found.php');
        });
      })
  );
});

// Activation et nettoyage des anciens caches
self.addEventListener('activate', (event) => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Gestion des messages
self.addEventListener('message', (event) => {
  if (event.data && event.data.type === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});
