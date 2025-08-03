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
                Staff Leaves
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
                  <div class="card-header">

                    <!-- Row starts -->
                    <div class="row gx-3 justify-content-end">

                      <div class="col-xl-2">
                        <select name="Year" class="form-select" id="selYear">
                          <option value="0">2024</option>
                          <option value="1">2024</option>
                          <option value="2">2023</option>
                          <option value="3">2022</option>
                          <option value="4">2021</option>
                          <option value="5">2020</option>
                        </select>
                      </div>
                    </div>
                    <!-- Row ends -->

                  </div>
                  <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-responsive">
                      <table id="staffLeaves" class="table truncate m-0 align-middle">
                        <thead>
                          <tr>
                            <th>Emp ID</th>
                            <th>Emp Name</th>
                            <th>Position</th>
                            <th>Jan</th>
                            <th>Feb</th>
                            <th>Mar</th>
                            <th>Apr</th>
                            <th>May</th>
                            <th>Jun</th>
                            <th>Jul</th>
                            <th>Aug</th>
                            <th>Sep</th>
                            <th>Oct</th>
                            <th>Nov</th>
                            <th>Dec</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>MES-896</td>
                            <td><img src="assets/images/user.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Deena Cooley</td>
                            <td>Surgeon</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                            <td>5</td>
                            <td>18</td>
                          </tr>
                          <tr>
                            <td>MES-345</td>
                            <td><img src="assets/images/user4.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Bennett Lucero</td>
                            <td>Cardiologist</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>3</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <td>MES-762</td>
                            <td>
                              <img src="assets/images/user2.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Alison Estrada
                            </td>
                            <td>Urologist</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>3</td>
                            <td>1</td>
                            <td>2</td>
                            <td>4</td>
                            <td>1</td>
                            <td>17</td>
                          </tr>
                          <tr>
                            <td>MES-324</td>
                            <td>
                              <img src="assets/images/user3.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">Hector
                              Banks
                            </td>
                            <td>Physical Therapy</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td>MES-560</td>
                            <td>
                              <img src="assets/images/user5.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Owen Scott
                            </td>
                            <td>Rheumatologist</td>
                            <td>2</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>8</td>
                            <td>22</td>
                          </tr>
                          <tr>
                            <td>MES-223</td>
                            <td>
                              <img src="assets/images/user2.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Erica Vaughn
                            </td>
                            <td>Gynecologist</td>
                            <td>2</td>
                            <td>1</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td>MES-980</td>
                            <td>
                              <img src="assets/images/user1.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">Cody
                              Bruce
                            </td>
                            <td>Orthopeadic</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>MES-665</td>
                            <td>
                              <img src="assets/images/user5.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Lael Greer
                            </td>
                            <td>Audiologists</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td>MES-453</td>
                            <td>
                              <img src="assets/images/user4.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Naomi Wolfe
                            </td>
                            <td>Psychiatrists</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                            <td>5</td>
                            <td>19</td>
                          </tr>
                          <tr>
                            <td>MES-224</td>
                            <td>
                              <img src="assets/images/user3.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Helena Frazier
                            </td>
                            <td>Regional Director</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>MES-167</td>
                            <td>
                              <img src="assets/images/user2.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Mitchel Alvarez
                            </td>
                            <td>Paediatrician</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <td>MES-008</td>
                            <td>
                              <img src="assets/images/user.png" class="img-shadow img-2x rounded-5 me-1"
                                alt="Doctors Admin Template">
                              Dirk Meadows
                            </td>
                            <td>Cardiologists</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td>0</td>
                            <td>5</td>
                            <td>19</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- Table ends -->

                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer bg-white">
            <span>© Medflex admin 2024</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Data Tables -->
    <script src="assets/vendor/datatables/dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables/custom/custom-datatables.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>

</html>