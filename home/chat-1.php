<?php include 'header.php'; ?>

<div class="container-fluid p-0 chat-wrapper">
  <div class="row g-0 h-100">
    <!-- Panneau des conversations (mobile visible avec retour) -->
    <div class="col-12 col-md-4 conversation-panel d-none d-md-flex flex-column bg-white border-end">
      <div class="conversation-header d-flex justify-content-between align-items-center p-3 border-bottom">
        <h5 class="m-0">Messages</h5>
        <a href="messagerie.php" class="btn btn-sm btn-outline-secondary d-md-none">
          <i class="ri-arrow-left-line"></i>
        </a>
      </div>
      <div class="conversation-list flex-grow-1 p-2">
        <!-- Liste des conversations -->
      </div>
    </div>
    
    <!-- Zone de chat -->
    <div class="col-12 col-md-8 chat-panel d-flex flex-column">
      <!-- Header du chat -->
      <div class="chat-header d-flex justify-content-between align-items-center p-3 border-bottom bg-white">
        <div class="d-flex align-items-center">
          <a href="messagerie.php" class="btn btn-sm btn-outline-secondary me-2 d-md-none">
            <i class="ri-arrow-left-line"></i>
          </a>
          <img src="../assets/images/user1.png" class="rounded-circle me-3" width="48" height="48">
          <div>
            <h6 class="mb-0">Service Urgences</h6>
            <small class="text-muted">En ligne</small>
          </div>
        </div>
        <div>
          <button class="btn btn-sm btn-outline-secondary">
            <i class="ri-information-line"></i>
          </button>
        </div>
      </div>

      <!-- Messages -->
      <div class="chat-body flex-grow-1 p-3" style="overflow-y:auto; background:#f5f6f7;">
        <div class="text-center my-3">
          <span class="badge bg-light text-dark">Aujourd'hui</span>
        </div>
        
        <!-- Message reçu -->
        <div class="message received mb-3">
          <div class="message-bubble">Bonjour, comment puis-je vous aider ?</div>
        </div>
        
        <!-- Message envoyé -->
        <div class="message sent mb-3">
          <div class="message-bubble">Je voudrais savoir si les analyses sont prêtes.</div>
        </div>
      </div>

      <!-- Zone de saisie -->
      <div class="chat-footer p-3 border-top bg-white">
        <form class="d-flex">
          <input type="text" class="form-control" placeholder="Écrire un message...">
          <button class="btn btn-primary ms-2"><i class="ri-send-plane-2-fill"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
