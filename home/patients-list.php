<?php include 'header.php'; ?>

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header bg-primary bg-opacity-10 d-flex align-items-center justify-content-between">
                    <h5 class="card-title text-primary">
                        <i class="ri-user-line"></i>
                        Patients List</h5>
                    <a href="add-patient.php" class="btn btn-primary ms-auto">
                        <i class="ri-add-line"></i>
                        Nouveau patient</a>
                  </div>
                  <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-responsive">
                      <table id="basicExample" class="table truncate m-0 align-middle">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Patient Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Blood Group</th>
                            <th>Treatment</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#89990</td>
                            <td>
                              <img src="../assets/images/patient.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Medical Admin Template">
                              Allan Stuart
                            </td>
                            <td><span class="badge bg-info-subtle text-info">Male</span></td>
                            <td>67</td>
                            <td>O+</td>
                            <td>
                              Diabetes
                            </td>
                            <td>0987654321</td>
                            <td>test@testing.com</td>
                            <td>377 McGlynn, Orchard</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-patient.php" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier le patient">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                                <a href="add-admission.php" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Effectuer une admission">
                                  <i class="ri-hotel-bed-line"></i>
                                </a>
                                <a href="patient-dashboard.php" class="btn btn-outline-info btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Voir le dossier medicale">
                                  <i class="ri-eye-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>#89992</td>
                            <td>
                              <img src="../assets/images/patient1.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Medical Admin Template">
                              Katie Robinson
                            </td>
                            <td><span class="badge bg-warning-subtle text-warning">Female</span></td>
                            <td>33</td>
                            <td>B+</td>
                            <td>
                              Pediatric
                            </td>
                            <td>0987654321</td>
                            <td>test@testing.com</td>
                            <td>229 Hills Courts, Doyleland</td>
                            <td>
                            <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-patient.php" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier le patient">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                                <a href="add-admission.php" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Effectuer une admission">
                                  <i class="ri-hotel-bed-line"></i>
                                </a>
                                <a href="patient-dashboard.php" class="btn btn-outline-info btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Voir le dossier medicale">
                                  <i class="ri-eye-line"></i>
                                </a>
                              </div>
                            </td>
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
<?php include 'footer.php'; ?>