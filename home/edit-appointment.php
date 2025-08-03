<?php include 'header.php'; ?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Edit Appointment</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-3">
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a1">Patient Name</label>
                          <input type="text" class="form-control" id="a1" value="Jason Compton">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a2">Patient Email</label>
                          <input type="email" class="form-control" id="a2" value="test@test.com">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a3">Gender</label>
                          <select class="form-select" id="a3">
                            <option value="0">Male</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a4">Age</label>
                          <input type="number" class="form-control" id="a4" value="68">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a5">Patient Phone</label>
                          <input type="text" class="form-control" id="a5" value="09876543421">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a6">Select Date</label>
                          <input type="date" class="form-control" id="a6" placeholder="28/05/2024">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a7">Select Time</label>
                          <input type="time" class="form-control" id="a7" value="Select time">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a8">Speacilist Doctor</label>
                          <select class="form-select" id="a8">
                            <option value="0">Surgeon</option>
                            <option value="1">Gynecologist</option>
                            <option value="2">Psychiatrists</option>
                            <option value="3">Surgeon</option>
                            <option value="4">Urologist</option>
                            <option value="5">Paediatrician</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="mb-3">
                          <label class="form-label" for="a9">Problem</label>
                          <textarea class="form-control" id="a9" placeholder="Medical Issue health problem"
                            rows="3"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="d-flex gap-2 justify-content-end">
                          <a href="appointments-list.php" class="btn btn-outline-secondary">
                            Cancel
                          </a>
                          <a href="appointments-list.php" class="btn btn-primary">
                            Update Appointment
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

    <script>
      document.getElementById('a6').valueAsDate = new Date();
    </script>
<?php include 'footer.php';  ?>