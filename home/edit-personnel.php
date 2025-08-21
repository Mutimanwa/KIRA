<?php ?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Edit Staff Member</h5>
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
                          <label class="form-label" for="a1">First Name</label>
                          <input type="text" class="form-control" id="a1" value="David">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a2">Last Name</label>
                          <input type="text" class="form-control" id="a2" value="Schultz">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a3">Mobile Number</label>
                          <input type="email" class="form-control" id="a3" value="0987654321">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="selectGender1">Gender</label>
                          <div class="m-0">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="selectGenderOptions" id="selectGender1"
                                value="male" checked>
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
                          <label class="form-label" for="a4">Date of Birth</label>
                          <input type="date" class="form-control" id="a4" value="">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a5">Qualification</label>
                          <input type="text" class="form-control" id="a5" value="MBBS">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a6">Department</label>
                          <select class="form-select" id="a6">
                            <option value="0">Surgeon</option>
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
                          <label class="form-label" for="a7">Designation</label>
                          <input type="text" class="form-control" id="a7" value="Head of the Dept">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="mb-3">
                          <label class="form-label" for="a8">Address</label>
                          <textarea class="form-control" id="a8" value="Enter Address"
                            rows="2">(415) 921-0472, 8999 Fillmore St #4RX GTA Drive</textarea>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a9">City</label>
                          <input type="text" class="form-control" id="a9" value="San Francisco">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a10">Country</label>
                          <select class="form-select" id="a10">
                            <option value="0">USA</option>
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
                          <label class="form-label" for="a11">State</label>
                          <select class="form-select" id="a11">
                            <option value="0">California</option>
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
                          <label class="form-label" for="a12">Postal Code</label>
                          <input type="text" class="form-control" id="a12" value="94016">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="d-flex gap-2 justify-content-end">
                          <a href="staff.html" class="btn btn-outline-secondary">
                            Cancel
                          </a>
                          <a href="staff.html" class="btn btn-primary">
                            Update Staff Member
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

<?php ?>