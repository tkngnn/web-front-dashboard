
<div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <!-- Card -->
              <div class="card card-lg mb-5">
                <div class="card-body">
                  <!-- Form -->
                  <form class="js-validate" method="Post" action="<?=$level?>component/signin-process.php">
                    <div class="text-center">
                      <div class="mb-5">
                        <h1 class="display-4">Sign in</h1>
                        <p>Don't have an account yet? <a href="<?php echo($level);?>pages/authentication-signup.php">Sign up here</a></p>
                      </div>

                      <a class="btn btn-lg btn-block btn-white mb-4" href="#">
                        <span class="d-flex justify-content-center align-items-center">
                          <img class="avatar avatar-xss mr-2" src="<?php echo($level);?>assets\svg\brands\google.svg" alt="Image Description">
                          Sign in with Google
                        </span>
                      </a>

                      <span class="divider text-muted mb-4">OR</span>
                    </div>

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signinSrEmail">Your email</label>

                      <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required="" data-msg="Please enter a valid email address.">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signupSrPassword" tabindex="0">
                        <span class="d-flex justify-content-between align-items-center">
                          Password
                          <a class="input-label-secondary" href="<?php echo($level);?>pages/authentication-reset-password.php">Forgot Password?</a>
                        </span>
                      </label>

                      <div class="input-group input-group-merge">
                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" data-msg="Your password is invalid. Please try again." data-hs-toggle-password-options='{
                                 "target": "#changePassTarget",
                                 "defaultClass": "tio-hidden-outlined",
                                 "showClass": "tio-visible-outlined",
                                 "classChangeTarget": "#changePassIcon"
                               }'>
                        <div id="changePassTarget" class="input-group-append">
                          <a class="input-group-text" href="javascript:;">
                            <i id="changePassIcon" class="tio-visible-outlined"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Checkbox -->
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                        <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                      </div>
                    </div>
                    <!-- End Checkbox -->
                    <button type="submit" name="signin" class="btn btn-lg btn-block btn-primary">Sign in</button>
                    <!-- 
                    if(isset($txt_error)&&($txt_error !=""))
                    {
                      echo "<font color ='red'>".$txt_error."</font>";
                    }
                    -->
                  </form>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>