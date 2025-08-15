// Gestionnaire d'installation PWA avec invitation automatique
let deferredPrompt = null;

// Enregistrer le Service Worker
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/KIRA/sw.js');
  });
}

// Gestion de l'invitation d'installation
window.addEventListener('beforeinstallprompt', (e) => {
  e.preventDefault();
  deferredPrompt = e;
  
  // Afficher l'invitation après 2 secondes si c'est la première visite
  // Afficher l'invitation après 2 secondes si c'est la première visite
  if (!localStorage.getItem('pwa-prompt-seen')) {
    setTimeout(showInstallPrompt, 2000);
  }
});

function showInstallPrompt() {
  if (!deferredPrompt) return;
  
  // Créer la bannière d'installation
  const banner = document.createElement('div');
  banner.id = 'install-banner';
  banner.innerHTML = `
    <div class="install-content">
      <img src="/KIRA/favicons/icon-192.png" alt="KIRA" class="install-icon">
      <div class="install-text">
        <h3>Installer KIRA</h3>
        <p>Ajoutez l'application à votre écran d'accueil pour un accès rapide</p>
      </div>
      <button class="install-btn" onclick="installApp()">Installer</button>
      <button class="later-btn" onclick="dismissInstall()">Plus tard</button>
      <button class="close-btn" onclick="closeInstall()">×</button>
    </div>
  `;
  
  // Ajouter les styles
  const style = document.createElement('style');
  style.textContent = `
    #install-banner {
      position: fixed;
      top: 20px;
      right: 20px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
      z-index: 9999;
      max-width: 350px;
      animation: slideIn 0.3s ease-out;
    }
    .install-content { display: flex; align-items: center; gap: 15px; }
    .install-icon { width: 48px; height: 48px; border-radius: 8px; }
    .install-text h3 { margin: 0 0 5px 0; font-size: 18px; }
    .install-text p { margin: 0; font-size: 14px; opacity: 0.9; }
    .install-btn, .later-btn {
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }
    .install-btn {
      background: white;
      color: #667eea;
      font-weight: bold;
    }
    .later-btn {
      background: transparent;
      color: white;
      border: 1px solid white;
    }
    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background: none;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
    }
    @keyframes slideIn {
      from { transform: translateX(100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
  `;
  
  document.head.appendChild(style);
  document.body.appendChild(banner);
  installBanner = banner;
}

function installApp() {
  if (deferredPrompt) {
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('Installation acceptée');
      }
      deferredPrompt = null;
      closeInstall();
    });
  }
}

function dismissInstall() {
  localStorage.setItem('pwa-prompt-seen', 'true');
  closeInstall();
}

function closeInstall() {
  if (installBanner) {
    installBanner.remove();
  }
}

// Nettoyage automatique après 10 secondes
setTimeout(() => {
  if (installBanner) {
    closeInstall();
  }
}, 10000);
