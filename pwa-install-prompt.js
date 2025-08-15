// Gestionnaire d'installation PWA avec invitation automatique
class PWAInstaller {
  constructor() {
    this.deferredPrompt = null;
    this.installButton = null;
    this.installBanner = null;
    this.hasSeenPrompt = localStorage.getItem('pwa-prompt-seen') === 'true';
    
    this.init();
  }

  init() {
    if ('serviceWorker' in navigator) {
      this.registerServiceWorker();
    }
    
    this.setupInstallPrompt();
    this.createInstallBanner();
  }

  registerServiceWorker() {
    navigator.serviceWorker.register('/KIRA/sw.js')
      .then((registration) => {
        console.log('ServiceWorker enregistré:', registration.scope);
      })
      .catch((error) => {
        console.log('Erreur ServiceWorker:', error);
      });
  }

  setupInstallPrompt() {
    window.addEventListener('beforeinstallprompt', (e) => {
      e.preventDefault();
      this.deferredPrompt = e;
      
      // Afficher l'invitation seulement si pas déjà vue
      if (!this.hasSeenPrompt) {
        setTimeout(() => {
          this.showInstallBanner();
        }, 2000); // Afficher après 2 secondes
      }
    });
  }

  createInstallBanner() {
    // Créer la bannière d'installation
    this.installBanner = document.createElement('div');
    this.installBanner.id = 'pwa-install-banner';
    this.installBanner.innerHTML = `
      <div class="pwa-banner-content bg-primary">
        <div class="pwa-header">
          <img src="/KIRA/favicons/192.png" alt="KIRA" class="pwa-icon">
          <div class="pwa-text">
            <h4>Installer KIRA</h4>
            <p>Ajoutez l'application à votre écran d'accueil</p>
          </div>
        </div>
        <p class="pwa-description">
          Accédez rapidement à votre système de gestion hospitalière même hors ligne
        </p>
        <div class="pwa-actions">
          <button id="pwa-install-btn" class="pwa-btn-install">Installer</button>
          <button id="pwa-dismiss-btn" class="pwa-btn-dismiss">Plus tard</button>
        </div>
        <button id="pwa-close-btn" class="pwa-btn-close">×</button>
      </div>
    `;
    
    // Ajouter les styles CSS
    const style = document.createElement('style');
    style.textContent = `
      #pwa-install-banner {
        position: fixed;
        top: 20px;
        right: 37%;
        color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        z-index: 9999;
        max-width: 350px;
        animation: slideIn 0.3s ease-out;
      }
      
      .pwa-banner-content {
        position: relative;
      }
      
      .pwa-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
      }
      
      .pwa-icon {
        width: 48px;
        height: 48px;
        margin-right: 15px;
        border-radius: 8px;
      }
      
      .pwa-text h4 {
        margin: 0;
        font-size: 18px;
      }
      
      .pwa-text p {
        margin: 5px 0 0 0;
        font-size: 14px;
        opacity: 0.9;
      }
      
      .pwa-description {
        margin: 0 0 15px 0;
        font-size: 13px;
        opacity: 0.8;
      }
      
      .pwa-actions {
        display: flex;
        gap: 10px;
      }
      
      .pwa-btn-install {
        background: white;
        color: #667eea;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        flex: 1;
      }
      
      .pwa-btn-dismiss {
        background: transparent;
        color: white;
        border: 1px solid white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        flex: 1;
      }
      
      .pwa-btn-close {
        position: absolute;
        top: -10px;
        right: -10px;
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        width: 30px;
        height: 30px;
        border-radius: 50%;
      }
      
      @keyframes slideIn {
        from {
          transform: translateX(100%);
          opacity: 0;
        }
        to {
          transform: translateX(0);
          opacity: 1;
        }
      }
      
      @keyframes slideOut {
        from {
          transform: translateX(0);
          opacity: 1;
        }
        to {
          transform: translateX(100%);
          opacity: 0;
        }
      }
      
      @media (max-width: 480px) {
        #pwa-install-banner {
          top: 10px;
          right: 10px;
          left: 10px;
          max-width: none;
        }
      }
    `;
    
    document.head.appendChild(style);
    document.body.appendChild(this.installBanner);
    
    this.bindEvents();
  }

  bindEvents() {
    // Bouton installer
    document.getElementById('pwa-install-btn').addEventListener('click', () => {
      this.installApp();
    });
    
    // Bouton plus tard
    document.getElementById('pwa-dismiss-btn').addEventListener('click', () => {
      this.dismissBanner();
    });
    
    // Bouton fermer
    document.getElementById('pwa-close-btn').addEventListener('click', () => {
      this.closeBanner();
    });
  }

  showInstallBanner() {
    if (this.installBanner && this.deferredPrompt) {
      this.installBanner.style.display = 'block';
    }
  }

  hideInstallBanner() {
    if (this.installBanner) {
      this.installBanner.style.animation = 'slideOut 0.3s ease-out';
      setTimeout(() => {
        this.installBanner.style.display = 'none';
      }, 300);
    }
  }

  installApp() {
    if (this.deferredPrompt) {
      this.deferredPrompt.prompt();
      this.deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
          console.log('Utilisateur a accepté l\'installation');
          this.hideInstallBanner();
          localStorage.setItem('pwa-prompt-seen', 'true');
        } else {
          console.log('Utilisateur a refusé l\'installation');
          this.hideInstallBanner();
        }
        this.deferredPrompt = null;
      });
    }
  }

  dismissBanner() {
    this.hideInstallBanner();
    localStorage.setItem('pwa-prompt-seen', 'true');
  }

  closeBanner() {
    this.hideInstallBanner();
    localStorage.setItem('pwa-prompt-seen', 'true');
  }
}

// Initialiser l'installateur PWA
document.addEventListener('DOMContentLoaded', () => {
  new PWAInstaller();
});
