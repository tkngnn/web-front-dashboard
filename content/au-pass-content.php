<div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <!-- Card -->
            <div class="card card-lg mb-5">
              <div class="card-body">
                <!-- Form -->
                <form class="js-validate">
                  <div class="text-center">
                    <div class="mb-5">
                      <h1 class="display-4">Forgot password?</h1>
                      <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
                    </div>
                  </div>

                  <!-- Form Group -->
                  <div class="js-form-message form-group">
                    <label class="input-label" for="resetPasswordSrEmail" tabindex="0">Your email</label>

                    <input type="email" class="form-control form-control-lg" name="email" id="resetPasswordSrEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required="" data-msg="Please enter a valid email address.">
                  </div>
                  <!-- End Form Group -->

                  <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>

                  <div class="text-center mt-2">
                    <a class="btn btn-link" href="<?php echo($level);?>pages/authentication-signin.php">
                      <i class="tio-chevron-left"></i> Back to Sign in
                    </a>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
            <!-- End Card -->

          </div>
        </div>