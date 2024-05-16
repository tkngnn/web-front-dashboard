<div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <!-- Card -->
            <div class="card card-lg mb-5">
              <div class="card-body">
                <!-- Form -->
                <form class="js-validate">
                  <div class="text-center">
                    <div class="mb-5">
                      <h1 class="display-4">Create your account</h1>
                      <p>Already have an account? <a href="<?php echo($level);?>pages/authentication-signin.php">Sign in here</a></p>
                    </div>

                    <a class="btn btn-lg btn-block btn-white mb-4" href="#">
                      <span class="d-flex justify-content-center align-items-center">
                        <img class="avatar avatar-xss mr-2" src="<?php echo($level);?>assets\svg\brands\google.svg" alt="Image Description">
                        Sign up with Google
                      </span>
                    </a>

                    <span class="divider text-muted mb-4">OR</span>
                  </div>

                  <label class="input-label" for="fullNameSrEmail">Full name</label>

                  <!-- Form Group -->
                  <div class="form-row">
                    <div class="col-sm-6">
                      <div class="js-form-message form-group">
                        <input type="text" class="form-control form-control-lg" name="fullName" id="fullNameSrEmail" placeholder="Mark" aria-label="Mark" required="" data-msg="Please enter your first name.">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="js-form-message form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Williams" aria-label="Williams" required="" data-msg="Please enter your last name.">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="js-form-message form-group">
                    <label class="input-label" for="signupSrEmail">Your email</label>

                    <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Markwilliams@example.com" aria-label="Markwilliams@example.com" required="" data-msg="Please enter a valid email address.">
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="js-form-message form-group">
                    <label class="input-label" for="signupSrPassword">Password</label>

                    <div class="input-group input-group-merge">
                      <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" data-msg="Your password is invalid. Please try again." data-hs-toggle-password-options='{
                               "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                               "defaultClass": "tio-hidden-outlined",
                               "showClass": "tio-visible-outlined",
                               "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                             }'>
                      <div class="js-toggle-password-target-1 input-group-append">
                        <a class="input-group-text" href="javascript:;">
                          <i class="js-toggle-passowrd-show-icon-1 tio-visible-outlined"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="js-form-message form-group">
                    <label class="input-label" for="signupSrConfirmPassword">Confirm password</label>

                    <div class="input-group input-group-merge">
                      <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" data-msg="Password does not match the confirm password." data-hs-toggle-password-options='{
                               "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                               "defaultClass": "tio-hidden-outlined",
                               "showClass": "tio-visible-outlined",
                               "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                             }'>
                      <div class="js-toggle-password-target-2 input-group-append">
                        <a class="input-group-text" href="javascript:;">
                          <i class="js-toggle-passowrd-show-icon-2 tio-visible-outlined"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Checkbox -->
                  <div class="js-form-message form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required="" data-msg="Please accept our Terms and Conditions.">
                      <label class="custom-control-label text-muted" for="termsCheckbox"> I accept the <a href="#">Terms and Conditions</a></label>
                    </div>
                  </div>
                  <!-- End Checkbox -->

                  <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Create an account</button>

                  <button type="submit" class="btn btn-block btn-link">
                    or Start your 30-day trial <i class="tio-chevron-right"></i>
                  </button>
                </form>
                <!-- End Form -->
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>