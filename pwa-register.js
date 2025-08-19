// Register Service Worker
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/KIRA/sw.js')
      .then((registration) => {
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      })
      .catch((error) => {
        console.log('ServiceWorker registration failed: ', error);
      });
  });
}

// Install prompt
// let deferredPrompt;
// const addBtn = document.createElement('button');
// addBtn.style.display = 'none';
// addBtn.textContent = 'Installer TUNZA';

// window.addEventListener('beforeinstallprompt', (e) => {
//   e.preventDefault();
//   deferredPrompt = e;
//   addBtn.style.display = 'block';
  
//   addBtn.addEventListener('click', () => {
//     addBtn.style.display = 'none';
//     deferredPrompt.prompt();
//     deferredPrompt.userChoice.then((choiceResult) => {
//       if (choiceResult.outcome === 'accepted') {
//         console.log('User accepted the install prompt');
//       } else {
//         console.log('User dismissed the install prompt');
//       }
//       deferredPrompt = null;
//     });
//   });
// });

// Initialize deferredPrompt for use later to show browser install prompt.
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent the mini-infobar from appearing on mobile
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI notify the user they can install the PWA
  showInstallPromotion();
  // Optionally, send analytics event that PWA install promo was shown.
  console.log(`'beforeinstallprompt' event was fired.`);
});

// Online/Offline status
window.addEventListener('online', () => {
  console.log('Application is online');
});

window.addEventListener('offline', () => {
  console.log('Application is offline');
});
