<?php include 'header.php' ;?>

<div class="app-body">
    <div class="row">
        <div class="col-12">
            <!-- profil menu -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header mb-0">
                            <div class=" d-flex justify-content-center">
                                <div class="border border-3 border-primary rounded-circle overflow-hidden" style="width:150px" >
                                    <!-- <div class=""></div> -->
                                     <img src="../assets/images/user5.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <h5 class=" text-center mt-3">
                                Dr Marie jeane
                            </h5>
                        </div>
                        <div class="card-body">
                            <nav>
                            <ul class="nav nav-pills d-block px-2" id="customTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="tab-oneA" data-bs-toggle="tab" href="#oneA" role="tab"
                            aria-controls="oneA" aria-selected="true"><i class="ri-briefcase-4-line"></i> Personal
                            Details</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="tab-twoA" data-bs-toggle="tab" href="#twoA" role="tab"
                            aria-controls="twoA" aria-selected="false"><i class="ri-account-pin-circle-line"></i>
                            Profile and Bio</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="tab-fourA" data-bs-toggle="tab" href="#fourA" role="tab"
                            aria-controls="fourA" aria-selected="false"><i class="ri-lock-password-line"></i> Account
                            Details</a>
                        </li>
                      </ul>
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                   <!-- les information personnel de l'utilisateur -->
                    <div class="card tab-pane fade show active" id="oneA" role="tabpanel"> 
                        <div class="card-header text-primary">
                            <h4 class="card-title">Information personnel</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a1">First Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-account-circle-line"></i>
                                  </span>
                                  <input type="text" class="form-control" disabled="" id="a1" placeholder="Enter First Name">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a2">Last Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-account-circle-line"></i>
                                  </span>
                                  <input type="text" disabled="" class="form-control" id="a2" placeholder="Enter Last Name">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a3">Age <span class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-flower-line"></i>
                                  </span>
                                  <input type="text" disabled="" class="form-select" value="80" id="a3">
                                
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="selectGender1">Gender<span
                                    class="text-danger">*</span></label>
                                <div class="m-0">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="selectGenderOptions" disabled=""
                                      id="selectGender1" value="male">
                                    <label class="form-check-label" for="selectGender1" >Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="selectGenderOptions" checked disabled
                                      id="selectGender2" value="female">
                                    <label class="form-check-label" for="selectGender2" >Female</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a4">Create ID <span class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-secure-payment-line"></i>
                                  </span>
                                  <input type="text" disabled="" class="form-control" id="a4" placeholder="Create Unique ID">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a5">Email ID <span class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-mail-open-line"></i>
                                  </span>
                                  <input type="email" class="form-control" disabled id="a5" placeholder="Enter Email ID">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a6">Mobile Number <span
                                    class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-phone-line"></i>
                                  </span>
                                  <input type="text" disabled="" class="form-control" id="a6" placeholder="Enter Mobile Number">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a7">Marital Status</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-vip-crown-2-line"></i>
                                  </span>
                                  <input type="text" value="Marie" disabled="" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a8">Qualification</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-copper-diamond-line"></i>
                                  </span>
                                  <input type="text" value="MBBS" disabled="" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a9">Designation</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-nft-line"></i>
                                  </span>
                                  <input type="text" value="Doctor" disabled="" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a10">Blood Group<span
                                    class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-drop-line"></i>
                                  </span>
                                  <input type="text" value="A" disabled="" class="form-control">>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a11">Address</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-projector-line"></i>
                                  </span>
                                  <input type="text" disabled="" class="form-control" id="a11" placeholder="Enter Address">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a12">Country</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-flag-line"></i>
                                  </span>
                                  <input type="text" value="xxxx" disabled="" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a13">State</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-instance-line"></i>
                                  </span>
                                  <input type="text" value="xxxx" disabled="" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a14">City</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-scan-line"></i>
                                  </span>
                                  <input type="text" disabled="" class="form-control" id="a14" placeholder="Enter City">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a15">Postal Code</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-qr-scan-line"></i>
                                  </span>
                                  <input type="text" disabled="" class="form-control" id="a15" placeholder="Enter Postal Code">
                                </div>
                              </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!--  -->

                        <div class="tab-pane fade" id="twoA" role="tabpanel">
                         <div class="card">
                            <div class="card-header bg-primary bg-opacity-10">
                                <h5 class="card-title text-primary" >Profile</h5>
                            </div>
                            <div class="card-body">
                                                 <!-- Row starts -->
                          <div class="row gx-3">
                            <div class="col-sm-12">
                              <div id="dropzone" class="mb-3">
                                <label class="form-label">Upload Profile</label>
                                <div action="/upload" class="dropzone dz-clickable" id="demo-upload">
                                  <div class="dz-message">
                                    <button type="button" class="dz-button">
                                      Click here to upload your photo.</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <label class="form-label">Write Bio</label>
                              <div id="fullEditor">
                                <h1>Hello,</h1>
                                <br>
                                <p>My name is <strong>Dr. David Kemrin</strong>. Write your bio here.</p>
                              </div>
                            </div>
                          </div>
                          <!-- Row ends -->
                            </div>
                         </div>
                          

                        </div>

                        <div class="tab-pane fade" id="fourA" role="tabpanel">

                          <!-- Row starts -->
                          
                                <div class="card">
                                    <div class="card-header bg-primary bg-opacity-10">
                                        <h5 class="card-title text-primary">Securite</h5>
                                    </div>
                                    <div class="card-body">
                                    <div class="row gx-3">
                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="u1">User Name</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-account-pin-circle-line"></i>
                                  </span>
                                  <input type="text" id="u1" placeholder="Enter username" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="u2">Password</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-lock-password-line"></i>
                                  </span>
                                  <input type="password" id="u2" class="form-control"
                                    placeholder="Password must be 8-20 characters long.">
                                  <button class="btn btn-outline-secondary" type="button">
                                    <i class="ri-eye-line"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="u3">Confirm Password</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-lock-password-line"></i>
                                  </span>
                                  <input type="password" id="u3" placeholder="Confirm new password"
                                    class="form-control">
                                  <button class="btn btn-outline-secondary" type="button">
                                    <i class="ri-eye-off-line"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Row ends -->
                                    </div>
                                </div>
                       

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php  include 'footer.php'?>