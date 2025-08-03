<?php include 'header.php'?>
           <!-- App body starts -->
           <div class="app-body">

<!-- Row starts -->
<div class="row gx-3">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Allotted Rooms</h5>
      </div>
      <div class="card-body">

        <!-- Table starts -->
        <div class="table-outer">
          <div class="table-responsive">
            <table class="table truncate align-middle m-0">
              <thead>
                <tr>
                  <th width="100px">Department</th>
                  <th width="60px">Room No</th>
                  <th width="60px">Bed No</th>
                  <th width="100px">Patient</th>
                  <th width="100px">Admit Date</th>
                  <th width="100px">Age</th>
                  <th width="100px">Gender</th>
                  <th width="100px">Room Type</th>
                  <th width="100px">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Endocrinology</td>
                  <td>3010</td>
                  <td>3</td>
                  <td>James Macias</td>
                  <td>12/07/2024</td>
                  <td>65</td>
                  <td>Male</td>
                  <td><span class="badge border border-success text-success">Delux</span></td>
                  <td>
                    <button class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#dischargeNow">Discharge</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Table ends -->

        <!-- Modal Delete Row -->
        <div class="modal fade" id="dischargeNow" tabindex="-1" aria-labelledby="dischargeNowLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="dischargeNowLabel">
                  Confirm
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to discharge?
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

<?php include 'footer.php' ;?>