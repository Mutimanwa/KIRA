<?php 
include 'header.php';
?>
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12 col-12">
                <div class="card">
                  <div class="card-header bg-primary bg-opacity-10 d-flex align-items-center justify-content-between">
                    <h5 class="card-title text-primary">
                      <i class="ri-calendar-line"></i>
                      Applointments</h5>
                    <a href="book-appointment.php" class="btn btn-primary ms-auto">
                      <i class="ri-add-line"></i>
                      Prendre rendez-vous</a>
                  </div>
                  <div class="card-body">

                    <div id="appointmentsCal"></div>

                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

<?php  include 'footer.php'; ?>