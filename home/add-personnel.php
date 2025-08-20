<?php include 'header.php' ; ?>

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Add Staff Member</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-3">
                      <div class="col-sm-12">
                        <div class="bg-light rounded-2 px-3 py-2 mb-3">
                          <h6 class="m-0">Personal Details</h6>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a1">First Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a2">Last Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="a2" placeholder="Enter Last Name">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a3">Mobile Number<span class="text-danger">*</span></label>
                          <input type="email" class="form-control" id="a3" placeholder="Enter Mobile Number">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="selectGender1">Gender <span
                              class="text-danger">*</span></label>
                          <div class="m-0">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="selectGenderOptions" id="selectGender1"
                                value="male">
                              <label class="form-check-label" for="selectGender1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="selectGenderOptions" id="selectGender2"
                                value="female">
                              <label class="form-check-label" for="selectGender2">Female</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a4">Date of Birth <span class="text-danger">*</span></label>
                          <input type="date" class="form-control" id="a4" placeholder="Enter DOB">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a5">Qualification <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="a5" placeholder="Enter Qualification">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a6">Department <span class="text-danger">*</span></label>
                          <select class="form-select" id="a6">
                            <option value="0">Select</option>
                            <option value="1">Surgeon</option>
                            <option value="2">Gynecologist</option>
                            <option value="3">Psychiatrists</option>
                            <option value="4">Urologist</option>
                            <option value="5">Paediatrician</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a7">Designation <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="a7" placeholder="Enter Designation">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="mb-3">
                          <label class="form-label" for="a8">Address <span class="text-danger">*</span></label>
                          <textarea class="form-control" id="a8" placeholder="Enter Address" rows="2"></textarea>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a9">City <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="a9" placeholder="Enter City">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a10">Country <span class="text-danger">*</span></label>
                          <select class="form-select" id="a10">
                            <option value="0">Select</option>
                            <option value="1">USA</option>
                            <option value="2">Switzerland</option>
                            <option value="3">Australia</option>
                            <option value="4">Japan</option>
                            <option value="5">New Zealand</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a11">State <span class="text-danger">*</span></label>
                          <select class="form-select" id="a11">
                            <option value="0">Select</option>
                            <option value="1">Alabama</option>
                            <option value="2">Alaska</option>
                            <option value="3">Arizona</option>
                            <option value="4">California</option>
                            <option value="5">Florida</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a12">Postal Code <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="a12" placeholder="Enter Postal Code">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="d-flex gap-2 justify-content-end">
                          <a href="gestion-personnel.php" class="btn btn-outline-secondary">
                            Cancel
                          </a>
                          <a href="gestion-personnel.php" class="btn btn-primary">
                            Add Staff Member
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- Row ends -->

                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->
<?php include 'footer.php' ; ?>