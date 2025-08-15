<?php include 'header.php'; ?>

<div class="app-body">

    <div class="row g-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-light-primary border-0 py-3">
                    <h5 class="mb-0 fw-bold">
                        <i class="ri-team-line me-2"></i> Médecins disponibles et leur specialite
                    </h5>
                    <small class="text-muted">Disponible maintenant (<?= date('H:i') ?>)</small>
                </div>
                <div class="card-body pt-0">
                    <!-- Carrousel amélioré -->
                    <div class="doctors-carousel owl-carousel" id="availableDoctors">
                        <div class="doctor-card">
                            <div class="position-relative">
                                <img src="../assets/images/user3.png"  alt="doctor">
                            </div>
                            <h6 class="mb-1">Charlotte</h6>
                            <small class="text-muted d-block">Pediatre</small>
                            <button class="btn btn-sm btn-primary mt-2 select-doctor" >
                                <i class="ri-user-add-line me-1"></i> Choisir
                            </button>
                        </div>
                        <div class="doctor-card">
                            <div class="position-relative">
                                <img src="../assets/images/user1.png"  alt="doctor">
                                
                            </div>
                            <h6 class="mb-1">Charlotte</h6>
                            <small class="text-muted d-block">Pediatre</small>
                            <button class="btn btn-sm btn-primary mt-2 select-doctor" >
                                <i class="ri-user-add-line me-1"></i> Choisir
                            </button>
                        </div>
                        <div class="doctor-card">
                            <div class="position-relative">
                                <img src="../assets/images/user2.png"  alt="doctor">
                                
                            </div>
                            <h6 class="mb-1">Charlotte</h6>
                            <small class="text-muted d-block">Pediatre</small>
                            <button class="btn btn-sm btn-primary mt-2 select-doctor" >
                                <i class="ri-user-add-line me-1"></i> Choisir
                            </button>
                        </div>
                        <div class="doctor-card">
                            <div class="position-relative">
                                <img src="../assets/images/user5.png"  alt="doctor">
                                
                            </div>
                            <h6 class="mb-1">Charlotte</h6>
                            <small class="text-muted d-block">Pediatre</small>
                            <button class="btn btn-sm btn-primary mt-2 select-doctor" >
                                <i class="ri-user-add-line me-1"></i> Choisir
                            </button>
                        </div>
                        <div class="doctor-card">
                            <div class="position-relative">
                                <img src="../assets/images/user6.png"  alt="doctor">
                                
                            </div>
                            <h6 class="mb-1">Charlotte</h6>
                            <small class="text-muted d-block">Pediatre</small>
                            <button class="btn btn-sm btn-primary mt-2 select-doctor" >
                                <i class="ri-user-add-line me-1"></i> Choisir
                            </button>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-sm btn-outline-primary" id="refreshDoctors">
                            <i class="ri-refresh-line me-1"></i> Actualiser la liste
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>