<?php include 'header.php'; ?>


          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-body">

                    <!-- Custom tabs starts -->
                    <div class="custom-tabs-container">

                      <!-- Nav tabs starts -->
                      <ul class="nav nav-tabs" id="customTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="tab-oneA" data-bs-toggle="tab" href="#oneA" role="tab"
                            aria-controls="oneA" aria-selected="true"><i class="ri-profile-line"></i> Personal
                            Details</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="tab-twoA" data-bs-toggle="tab" href="#twoA" role="tab"
                            aria-controls="twoA" aria-selected="false"><i class="ri-alert-line"></i> Notifications</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="tab-threeA" data-bs-toggle="tab" href="#threeA" role="tab"
                            aria-controls="threeA" aria-selected="false"><i class="ri-bank-card-line"></i> Credit
                            Cards</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="tab-fourA" data-bs-toggle="tab" href="#fourA" role="tab"
                            aria-controls="fourA" aria-selected="false"><i class="ri-lock-password-line"></i> Reset
                            Password</a>
                        </li>
                      </ul>
                      <!-- Nav tabs ends -->

                      <!-- Tab content starts -->
                      <div class="tab-content h-350">
                        <div class="tab-pane fade show active" id="oneA" role="tabpanel">

                          <!-- Row starts -->
                          <div class="row gx-3">
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="a1">First Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="ri-account-circle-line"></i>
                                  </span>
                                  <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
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
                                  <input type="text" class="form-control" id="a2" placeholder="Enter Last Name">
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
                                  <select class="form-select" id="a3">
                                    <option value="0">Select Age</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="selectGender1">Gender<span
                                    class="text-danger">*</span></label>
                                <div class="m-0">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="selectGenderOptions"
                                      id="selectGender1" value="male">
                                    <label class="form-check-label" for="selectGender1">Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="selectGenderOptions"
                                      id="selectGender2" value="female">
                                    <label class="form-check-label" for="selectGender2">Female</label>
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
                                  <input type="text" class="form-control" id="a4" placeholder="Create Unique ID">
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
                                  <input type="email" class="form-control" id="a5" placeholder="Enter Email ID">
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
                                  <input type="text" class="form-control" id="a6" placeholder="Enter Mobile Number">
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
                                  <select class="form-select" id="a7">
                                    <option value="0">Select</option>
                                    <option value="1">Married</option>
                                    <option value="2">Un Married</option>
                                  </select>
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
                                  <select class="form-select" id="a8">
                                    <option value="0">Select</option>
                                    <option value="1">MBBS, MD</option>
                                    <option value="2">MBBS, MS</option>
                                    <option value="3">MBBS</option>
                                  </select>
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
                                  <select class="form-select" id="a9">
                                    <option value="0">Select</option>
                                    <option value="1">Doctor</option>
                                    <option value="2">Head of the Dept</option>
                                  </select>
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
                                  <select class="form-select" id="a10">
                                    <option value="0">Select</option>
                                    <option value="1">A+</option>
                                    <option value="2">A-</option>
                                    <option value="3">B+</option>
                                    <option value="4">B-</option>
                                    <option value="5">O+</option>
                                    <option value="6">O-</option>
                                    <option value="7">AB+</option>
                                    <option value="8">AB-</option>
                                  </select>
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
                                  <input type="text" class="form-control" id="a11" placeholder="Enter Address">
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
                                  <select class="form-select" id="a12">
                                    <option value="0">Select</option>
                                    <option value="1">USA</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Brazil</option>
                                    <option value="4">India</option>
                                    <option value="5">China</option>
                                  </select>
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
                                  <select class="form-select" id="a13">
                                    <option value="0">Select</option>
                                    <option value="1">Alabama</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">Arizona</option>
                                    <option value="4">California</option>
                                    <option value="5">Florida</option>
                                  </select>
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
                                  <input type="text" class="form-control" id="a14" placeholder="Enter City">
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
                                  <input type="text" class="form-control" id="a15" placeholder="Enter Postal Code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Row ends -->

                        </div>
                        <div class="tab-pane fade" id="twoA" role="tabpanel">

                          <!-- Row starts -->
                          <div class="row gx-3 justify-content-center">
                            <div class="col-sm-8 col-12">
                              <div>
                                <h5>Notification Preferences</h5>
                                <p>While you are not around, check your emails to see what is happening. You can disable
                                  these. Update your notifications here.</p>
                              </div>
                              <div class="list-group w-auto mb-5">
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-phone-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>New Appointment</h6>
                                    <p class="m-0">
                                      You can update new appointment notifications here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n1" checked="">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-mail-send-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>New Messages</h6>
                                    <p class="m-0">
                                      You can update your messages notifications here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n2" checked="">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-star-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>New Review</h6>
                                    <p class="m-0">
                                      You can update review notifications here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n3" checked="">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-radio-2-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>News & Updates</h6>
                                    <p class="m-0">
                                      You can update your news and updates notifications here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n4">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-macbook-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>Desktop Notifications</h6>
                                    <p class="m-0">
                                      Enable desktop notifications here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n5">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-mail-send-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>Email Notifications</h6>
                                    <p class="m-0">
                                      Enable email notifications here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n6" checked="">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-chat-1-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>Chat Notifications</h6>
                                    <p class="m-0">
                                      Enable chat notification here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n7" checked="">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-emoji-sticker-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>New Follower</h6>
                                    <p class="m-0">
                                      Enable or disable for new followers.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n8" checked="">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-time-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>Reminders</h6>
                                    <p class="m-0">
                                      Set your reminders here.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n9">
                                  </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center gap-3 py-3">
                                  <div class="icon-box lg bg-secondary rounded-3">
                                    <i class="ri-message-3-line text-dark fs-5"></i>
                                  </div>
                                  <div>
                                    <h6>Comments</h6>
                                    <p class="m-0">
                                      Comment on your post and replies to comments.
                                    </p>
                                  </div>
                                  <div class="form-check form-switch m-0 ms-auto">
                                    <input class="form-check-input" type="checkbox" role="switch" id="n10" checked="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Row ends -->

                        </div>
                        <div class="tab-pane fade" id="threeA" role="tabpanel">

                          <!-- Row starts -->
                          <div class="row gx-3">
                            <div class="col-12">
                              <div class="table-outer mb-3">
                                <div class="table-responsive">
                                  <table class="table truncate align-middle m-0">
                                    <thead>
                                      <tr>
                                        <th>Bank Name</th>
                                        <th>Card Number</th>
                                        <th>Card type</th>
                                        <th>Expiry Date</th>
                                        <th>Credit Balance</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Discover It Cash Back</td>
                                        <td>
                                          <span class="badge bg-primary text-white">0000 0000 0000 0000</span>
                                        </td>
                                        <td>Visa</td>
                                        <td>20/10/2026</td>
                                        <td>$100000</td>
                                        <td>
                                          <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                              id="cardActive" checked />
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Capital One Quicksilver Card</td>
                                        <td>
                                          <span class="badge bg-success text-white">0000 0000 0000 0000</span>
                                        </td>
                                        <td>Master</td>
                                        <td>02/24/2028</td>
                                        <td>$150000</td>
                                        <td>
                                          <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                              id="cardActive2" checked />
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Bank of America Rewards Card</td>
                                        <td>
                                          <span class="badge bg-warning text-white">0000 0000 0000 0000</span>
                                        </td>
                                        <td>Visa</td>
                                        <td>05/09/2028</td>
                                        <td>$50000</td>
                                        <td>
                                          <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                              id="cardActive3" checked />
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Chase Freedom Unlimited</td>
                                        <td>
                                          <span class="badge bg-danger text-white">0000 0000 0000 0000</span>
                                        </td>
                                        <td>Discover</td>
                                        <td>08/20/2027</td>
                                        <td>$100000</td>
                                        <td>
                                          <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                              id="cardActive4" checked />
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Blue Cash Everyday Card</td>
                                        <td>
                                          <span class="badge bg-dark text-white">0000 0000 0000 0000</span>
                                        </td>
                                        <td>Visa</td>
                                        <td>24/10/2029</td>
                                        <td>$90000</td>
                                        <td>
                                          <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                              id="cardActive5">
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Wells Fargo Active Card</td>
                                        <td>
                                          <span class="badge bg-info text-white">0000 0000 0000 0000</span>
                                        </td>
                                        <td>Visa</td>
                                        <td>25/05/2030</td>
                                        <td>$75000</td>
                                        <td>
                                          <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                              id="cardActive6">
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Row ends -->

                        </div>
                        <div class="tab-pane fade" id="fourA" role="tabpanel">

                          <!-- Row starts -->
                          <div class="row justify-content-center">
                            <div class="col-sm-6 col-12">
                              <div class="card border mb-3">
                                <div class="card-body">
                                  <div class="mb-3">
                                    <label class="form-label" for="currentPwd">Current password <span
                                        class="text-danger">*</span></label>
                                    <div class="input-group">
                                      <input type="password" id="currentPwd" placeholder="Enter Current password"
                                        class="form-control">
                                      <button class="btn btn-outline-secondary" type="button">
                                        <i class="ri-eye-line text-black"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="newPwd">New password <span
                                        class="text-danger">*</span></label>
                                    <div class="input-group">
                                      <input type="password" id="newPwd" class="form-control"
                                        placeholder="Your password must be 8-20 characters long.">
                                      <button class="btn btn-outline-secondary" type="button">
                                        <i class="ri-eye-line text-black"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="confNewPwd">Confirm new password <span
                                        class="text-danger">*</span></label>
                                    <div class="input-group">
                                      <input type="password" id="confNewPwd" placeholder="Confirm new password"
                                        class="form-control">
                                      <button class="btn btn-outline-secondary" type="button">
                                        <i class="ri-eye-off-line text-black"></i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Row ends -->

                        </div>
                      </div>
                      <!-- Tab content ends -->

                    </div>
                    <!-- Custom tabs ends -->

                    <!-- Buttons starts -->
                    <div class="d-flex gap-2 justify-content-end">
                      <button type="button" class="btn btn-secondary">
                        Cancel
                      </button>
                      <button type="button" class="btn btn-primary">
                        Update
                      </button>
                    </div>
                    <!-- Buttons ends -->

                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

<?php include 'footer.php'; ?>