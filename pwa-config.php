<?php
// PWA Configuration
function addPWAHeaders() {
    ?>
    <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#0d6efd">
    <meta name="description" content="Système complet de gestion hospitalière KIRA">
    <link rel="manifest" href="/KIRA/manifest.json">
    <link rel="apple-touch-icon" href="/KIRA/assets/images/icon-192.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="KIRA">
    <?php
}

function addPWAScripts() {
    ?>
    <!-- PWA Scripts -->
    <script src="/KIRA/pwa-register.js"></script>
    <?php
}
?>
