<?php include 'header.php'; ?>

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Add New Room</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-3">
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a1">Room Number</label>
                          <input type="text" class="form-control" id="a1" placeholder="Enter Room Number">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a2">Floor No</label>
                          <input type="email" class="form-control" id="a2" placeholder="Enter Floor Number">
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a3">Room Type</label>
                          <select class="form-select" id="a3">
                            <option value="0">Select</option>
                            <option value="1">Standard</option>
                            <option value="2">Deluxe</option>
                            <option value="3">Suite</option>
                            <option value="4">Private</option>
                            <option value="5">Ward</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label" for="a4">Department</label>
                          <select class="form-select" id="a4">
                            <option value="0">Select</option>
                            <option value="1">Surgeon</option>
                            <option value="2">Gynecologist</option>
                            <option value="3">Psychiatrists</option>
                            <option value="4">Urologist</option>
                            <option value="5">Paediatrician</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="mb-3">
                          <label class="form-label" for="a5">Enter Message</label>
                          <textarea class="form-control" id="a5" placeholder="Enter message" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="d-flex gap-2 justify-content-end">
                          <a href="available-rooms.html" class="btn btn-outline-secondary">
                            Cancel
                          </a>
                          <a href="available-rooms.html" class="btn btn-primary">
                            Add New Room
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