<?php include 'header.php' ;?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">List des fournisseurs</h5>
                    <a href="add-patient.php" class="btn btn-primary ms-auto">Nouveau</a>
                  </div>
                  <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-responsive ">
                      <table id="basicExample" class="table table-hover truncate m-0 align-middle">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nom fournisseur</th>
                            
                            <th>telephone</th>
                            <th>email</th>
                            <th>Ville</th>
                            <th>adresse</th>
                            <th>type de produit</th>
                            <th>Numero siret</th>
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
                            <td>0987654321</td>
                            <td>test@testing.com</td>
                            <td>Bujumbura</td>
                            <td>
                              Bwiza 1er AV n° 30
                            </td>
                            <td>Medicament</td>
                            <td>099</td>
                            <td><span class="badge bg-success p-2 h4">Actif</span></td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-patient.php" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editer le fournisseur">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                                <a href="patient-dashboard.php" class="btn btn-outline-info btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Voir les details">
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
                      <div class="modal-dialog modal-sm">
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
                              <button class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                aria-label="Close">No</button>
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
