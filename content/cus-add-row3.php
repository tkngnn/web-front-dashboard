<div class="row">
          <div class="col-lg-4 mb-3 mb-lg-0">
            <h4>Billing address</h4>
            <p>The primary billing address of this customer.</p>
          </div>

          <div class="col-lg-8">
            <!-- Card -->
            <div class="card">
              <!-- Body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="firstNameBillingAddressLabel" class="input-label">First name</label>
                      <input type="text" class="form-control" name="firstNameBillingAddress" id="firstNameBillingAddressLabel" placeholder="Clarice" aria-label="Clarice">
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm-6">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="lastNameBillingAddressLabel" class="input-label">Last name</label>
                      <input type="text" class="form-control" name="lastNameBillingAddress" id="lastNameBillingAddressLabel" placeholder="Boone" aria-label="Boone">
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>
                <!-- End Row -->

                <!-- Form Group -->
                <div class="form-group">
                  <label for="billingLocationLabel" class="input-label">Location</label>

                  <!-- Select -->
                  <div class="mb-3">
                    <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="billingLocationLabel" data-hs-select2-options='{
                              "placeholder": "Select country",
                              "searchInputPlaceholder": "Search a country"
                            }'>
                      <option label="empty"></option>
                      <option value="CN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>China</option>
                      
                      <option value="DK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>Denmark</option>
                      
                      <option value="FR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>France</option>
                      
                      <option value="DE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>Germany</option>
                    </select>
                  </div>
                  <!-- End Select -->

                  <div class="mb-3">
                    <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City">
                  </div>

                  <input type="text" class="form-control" name="state" id="stateLabel" placeholder="State" aria-label="State">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="form-group">
                  <label for="billingAddressLine1Label" class="input-label">Address line 1</label>
                  <input type="text" class="form-control" name="billingAddressLine1" id="billingAddressLine1Label" placeholder="Your address" aria-label="Your address">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="form-group">
                  <label for="billingAddressLine2Label" class="input-label">Address line 2 <span class="input-label-secondary">(Optional)</span></label>
                  <input type="text" class="form-control" name="billingAddressLine2" id="billingAddressLine2Label" placeholder="Your address" aria-label="Your address">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="form-group">
                  <label for="billingZipCodeLabel" class="input-label">Zip code <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="You can find your code in a postal address."></i></label>

                  <input type="text" class="js-masked-input form-control" name="billingZipCode" id="billingZipCodeLabel" placeholder="Your zip code" aria-label="Your zip code" data-hs-mask-options='{
                           "template": "AA0 0AA"
                         }'>
                </div>
                <!-- End Form Group -->

                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-white mr-2">Discard</button>
                  <button type="button" class="btn btn-primary">Save</button>
                </div>
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>