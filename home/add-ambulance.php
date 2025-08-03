<?php 
include 'header.php';
?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Add Ambulance</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-3">
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a1">Vehicle Number</label>
                          <input type="text" class="form-control" id="a1" placeholder="Enter Vehicle Number">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a2">Vehicle Name</label>
                          <input type="email" class="form-control" id="a2" placeholder="Enter Vehicle Name">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a3">Year Made</label>
                          <select class="form-select" id="a3">
                            <option value="0">Select</option>
                            <option value="1">2020</option>
                            <option value="2">2021</option>
                            <option value="3">2022</option>
                            <option value="4">2023</option>
                            <option value="5">2024</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a4">Driver Name</label>
                          <input type="text" class="form-control" id="a4" placeholder="Enter Driver Name">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a5">Driver License</label>
                          <input type="text" class="form-control" id="a5" placeholder="Enter Driver License">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a6">Driver Contact</label>
                          <input type="text" class="form-control" id="a6" placeholder="Enter Phone Number">
                        </div>
                      </div>
                      <div class="col-xxl-6 col-sm-12">
                        <div class="mb-3">
                          <label class="form-label" for="a7">Driver Address</label>
                          <input type="text" class="form-control" id="a7" placeholder="Enter Driver Address">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="d-flex gap-2 justify-content-end">
                          <a href="ambulance-list.html" class="btn btn-outline-secondary">
                            Cancel
                          </a>
                          <a href="ambulance-list.html" class="btn btn-primary">
                            Add New Ambulance
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

<?php include 'footer.php'; ?>