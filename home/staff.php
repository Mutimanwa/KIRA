<?php ?>
        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
          <div class="app-hero-header d-flex align-items-center">

            <!-- Breadcrumb starts -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item text-primary" aria-current="page">
                Staff List
              </li>
            </ol>
            <!-- Breadcrumb ends -->

            <!-- Sales stats starts -->
            <div class="ms-auto d-lg-flex d-none flex-row">
              <div class="d-flex flex-row gap-1 day-sorting">
                <button class="btn btn-sm btn-primary">Today</button>
                <button class="btn btn-sm">7d</button>
                <button class="btn btn-sm">2w</button>
                <button class="btn btn-sm">1m</button>
                <button class="btn btn-sm">3m</button>
                <button class="btn btn-sm">6m</button>
                <button class="btn btn-sm">1y</button>
              </div>
            </div>
            <!-- Sales stats ends -->

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Staff List</h5>
                    <a href="add-staff.html" class="btn btn-primary ms-auto">Add Staff Member</a>
                  </div>
                  <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-responsive">
                      <table id="basicExample" class="table m-0 align-middle">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>DOJ</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>001</td>
                            <td>
                              <img src="assets/images/user.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Willian Mathews
                            </td>
                            <td>Supervisor</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>20/10/2020</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>002</td>
                            <td>
                              <img src="assets/images/user1.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Adam Bradley
                            </td>
                            <td>Nurse</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>12/03/2018</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>003</td>
                            <td>
                              <img src="assets/images/user2.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Merle Daniel
                            </td>
                            <td>Receptionist</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>03/09/2022</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>004</td>
                            <td>
                              <img src="assets/images/user3.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Nicole Sellers
                            </td>
                            <td>Pharmacist</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>18/12/2013</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>005</td>
                            <td>
                              <img src="assets/images/user4.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Kathy Atkinson
                            </td>
                            <td>Admin</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>23/10/2016</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>006</td>
                            <td>
                              <img src="assets/images/user5.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Roger Briggs
                            </td>
                            <td>Helper</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>17/02/2019</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>007</td>
                            <td>
                              <img src="assets/images/user.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Mervin Elliott
                            </td>
                            <td>Pharmacist</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>15/06/2023</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>008</td>
                            <td>
                              <img src="assets/images/user3.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Fermin George
                            </td>
                            <td>Nurse</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>29/08/2017</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>009</td>
                            <td>
                              <img src="assets/images/user4.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Olen Frye
                            </td>
                            <td>Nurse</td>
                            <td>
                              0987654321
                            </td>
                            <td>test@testing.com</td>
                            <td>02/09/2014</td>
                            <td>
                              <div class="d-inline-flex gap-1">
                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                  data-bs-target="#delRow">
                                  <i class="ri-delete-bin-line"></i>
                                </button>
                                <a href="edit-staff.html" class="btn btn-outline-success btn-sm"
                                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Staff Member">
                                  <i class="ri-edit-box-line"></i>
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
                            Are you sure you want to delete the staff member?
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

<?php ?>