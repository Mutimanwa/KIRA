<?php include 'header.php'; ?>

<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Nouvelle conversation</h5>
      <a href="messagerie.php" class="btn btn-sm btn-outline-secondary"><i class="ri-arrow-left-line"></i> Retour</a>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label class="form-label">Rechercher un contact ou un service</label>
        <input type="text" class="form-control" placeholder="Ex: Radiologie, Dr. John...">
      </div>
      <div class="contact-list">
        <div class="d-flex align-items-center mb-2">
          <img src="../assets/images/user2.png" class="rounded-circle me-2" width="40">
          <span>Infirmière Alice</span>
          <button class="btn btn-sm btn-primary ms-auto">Démarrer</button>
        </div>
        <div class="d-flex align-items-center mb-2">
          <img src="../assets/images/service.png" class="rounded-circle me-2" width="40">
          <span>Service Radiologie</span>
          <button class="btn btn-sm btn-primary ms-auto">Démarrer</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
