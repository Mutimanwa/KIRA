<?php include 'header.php'; ?>
<!-- App body starts -->
<div class="app-body">
  <!-- Row starts -->
  <div class="row g-3">
    <!--  -->
    <!-- Header avec statistiques -->
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-header bg-primary bg-opacity-10 border-0">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0 text-primary">
              <i class="ri-folder-2-line me-2"></i> Gestion utilisateur
            </h5>
            <div>
              <a href="add-utilisateur.php" class="btn btn-sm btn-primary">
                <i class="ri-add-line me-1"></i> Nouvel utilisateur
              </a>
            </div>
          </div>
        </div>
        <div class="card-body pt-3">
          <div class="row g-3">
            <div class="col-sm-6 col-md-6 col-xl-3">
              <div class="d-flex align-items-center p-3 border rounded-3">
                <div class="icon-box lg bg-primary bg-opacity-10 text-primary rounded-4 me-3">
                  <i class="ri-user-line fs-3"></i>
                </div>
                <div>
                  <h3 class="mb-0">1,248</h3>
                  <span class="text-muted">Utilisateur systeme</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-3">
              <div class="d-flex align-items-center p-3 border rounded-3">
                <div class="icon-box lg bg-success bg-opacity-10 text-success rounded-4 me-3">
                  <i class="ri-checkbox-circle-line fs-3"></i>
                </div>
                <div>
                  <h3 class="mb-0">842</h3>
                  <span class="text-muted">Actifs</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-3">
              <div class="d-flex align-items-center p-3 border rounded-3">
                <div class="icon-box lg bg-warning bg-opacity-10 text-warning rounded-4 me-3">
                  <i class="ri-alert-line fs-3"></i>
                </div>
                <div>
                  <h3 class="mb-0">127</h3>
                  <span class="text-muted">En attente</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-3">
              <div class="d-flex align-items-center p-3 border rounded-3">
                <div class="icon-box lg bg-danger bg-opacity-10 text-danger rounded-4 me-3">
                  <i class="ri-prohibited-line fs-3"></i>
                </div>
                <div>
                  <h3 class="mb-0">279</h3>
                  <span class="text-muted">Bloqués</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">

          <!-- Table starts -->
          <div class="table-responsive ">
            <table id="basicExample" class="table table-hover truncate m-0 align-middle">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nom d'utilisteur</th>
                  <th>email</th>
                  <th>Role</th>
                  <th>Methode 2fa</th>
                  <th>Telephone 2fa</th>
                  <th>date_activation</th>
                  <th>Date derniere connexion</th>
                  <th>statut</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="py-4">
                  <td>#89990</td>
                  <td>
                    <img src="../assets/images/patient.png" class="img-shadow img-2x rounded-5 me-1"
                      alt="Medical Admin Template">
                    Allan Stuart
                  </td>
                  <td>test@testing.com</td>
                  <td>Admin</td>
                  <td>EMAIL</td>
                  <td>
                    Bwiza 1er AV n° 30
                  </td>
                  <td>02/23/2024</td>
                  <td>05/23/2024 9:30</td>
                  <td><span class="badge bg-success p-2 h4">Actif</span></td>
                  <td>
                    <div class="d-inline-flex gap-1">
                      <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delRow">
                        <i class="ri-delete-bin-line"></i>
                      </button>
                      <a href="edit-utilisateur.php" class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="Editer l'utilisateur">
                        <i class="ri-edit-box-line"></i>
                      </a>
                      <a href="details-utilisateur.php" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="Voir les details">
                        <i class="ri-eye-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- Table ends -->

          <!-- Modal Delete Row -->
          <div class="modal fade" id="delRow" tabindex="-1" aria-labelledby="delRowLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="delRowLabel">
                    Confirm
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Are you sure you want to delete the patient?
                </div>
                <div class="modal-footer">
                  <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">No</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Row ends -->

</div>
<!-- App body ends -->

<?php include 'footer.php' ?>