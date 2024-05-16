<div class="row">
          <div class="col-lg-4 mb-3 mb-lg-0">
            <h4>Account information</h4>
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
                      <label for="firstNameLabel" class="input-label">First name</label>
                      <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice">
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm-6">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="lastNameLabel" class="input-label">Last name</label>
                      <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone" aria-label="Boone">
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>
                <!-- End Row -->

                <!-- Form Group -->
                <div class="form-group">
                  <label for="emailLabel" class="input-label">Email</label>
                  <input type="email" class="form-control" name="email" id="emailLabel" placeholder="clarice@example.com" aria-label="clarice@example.com">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-add-field form-group" data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
                  <label for="phoneLabel" class="input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                  <div class="input-group input-group-sm-down-break align-items-center">
                    <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                             "template": "+0(000)000-00-00"
                           }'>

                    <div class="input-group-append">
                      <!-- Select -->
                      <div class="select2-custom">
                        <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" name="phoneSelect" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "dropdownAutoWidth": true,
                                "width": "6rem"
                              }'>
                          <option value="Mobile" selected="">Mobile</option>
                          <option value="Home">Home</option>
                          <option value="Work">Work</option>
                          <option value="Fax">Fax</option>
                          <option value="Direct">Direct</option>
                        </select>
                        <!-- End Select -->
                      </div>
                    </div>
                  </div>
                  
                  <!-- Container For Input Field -->
                  <div id="addPhoneFieldContainer"></div>

                  <a href="javascript:;" class="js-create-field form-link btn btn-sm btn-no-focus btn-ghost-primary">
                    <i class="tio-add"></i> Add phone
                  </a>
                </div>
                <!-- End Form Group -->

                <!-- Add Phone Input Field -->
                <div id="addAddressFieldTemplate" style="display: none;">
                  <div class="input-group-add-field">
                    <input type="text" class="form-control" data-name="addressLine" placeholder="Your address" aria-label="Your address">

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                      <i class="tio-clear"></i>
                    </a>
                  </div>
                </div>
                <!-- End Add Phone Input Field -->

                <!-- Add Phone Input Field -->
                <div id="addPhoneFieldTemplate" class="input-group-add-field" style="display: none;">
                  <div class="input-group input-group-sm-down-break align-items-center">
                    <input type="text" class="js-masked-input form-control" data-name="additionlPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                             "template": "+0(000)000-00-00"
                           }'>

                    <div class="input-group-append">
                      <!-- Select -->
                      <div class="select2-custom">
                        <select class="js-select2-custom-dynamic custom-select" size="1" style="opacity: 0;" data-name="additionlPhoneSelect" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "dropdownAutoWidth": true,
                                "width": "6rem"
                              }'>
                          <option value="Mobile" selected="">Mobile</option>
                          <option value="Home">Home</option>
                          <option value="Work">Work</option>
                          <option value="Fax">Fax</option>
                          <option value="Direct">Direct</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>

                  <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                    <i class="tio-clear"></i>
                  </a>
                </div>
                <!-- End Add Phone Input Field -->

                <!-- Custom Checkbox -->
                <div class="custom-control custom-checkbox form-group">
                  <input type="checkbox" class="custom-control-input" id="marketingEmailsCheckbox">
                  <label class="custom-control-label" for="marketingEmailsCheckbox">I want to receive promotions, announcements, and marketing emails.</label>
                </div>
                <!-- End Custom Checkbox -->

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
        <!-- End Row -->

        <hr class="my-5">