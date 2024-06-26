<div class="col-lg-9">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Profile Cover -->
              <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                  <img id="profileCoverImg" class="profile-cover-img" src="<?php echo($level);?>assets\img\1920x400\img2.jpg" alt="Image Description">

                  <!-- Custom File Cover -->
                  <div class="profile-cover-content profile-cover-btn">
                    <div class="custom-file-btn">
                      <input type="file" class="js-file-attach custom-file-btn-input" id="profileCoverUplaoder" data-hs-file-attach-options='{
                                "textTarget": "#profileCoverImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>
                      <label class="custom-file-btn-label btn btn-sm btn-white" for="profileCoverUplaoder">
                        <i class="tio-add-photo mr-sm-1"></i>
                        <span class="d-none d-sm-inline-block">Update your header</span>
                      </label>
                    </div>
                  </div>
                  <!-- End Custom File Cover -->
                </div>
              </div>
              <!-- End Profile Cover -->

              <!-- Avatar -->
              <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
                <img id="avatarImg" class="avatar-img" src="<?php echo($level);?>assets\img\160x160\GAU.jpg" alt="Image Description">

                <input type="file" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                          "textTarget": "#avatarImg",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'>

                <span class="avatar-uploader-trigger">
                  <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                </span>
              </label>
              <!-- End Avatar -->

              <!-- Body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <span class="d-block font-size-sm mb-2">Who can see your profile photo? <i class="tio-help-outlined" data-toggle="tooltip" data-placement="top" title="Your visibility setting only applies to your profile photo. Your header image is always visible to anyone."></i></span>

                    <!-- Select -->
                    <div class="select2-custom">
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity"
                              }'>
                        <option value="privacy1" data-option-template='<span class="media"><i class="tio-earth-east tio-lg text-body mr-2" style="margin-top: .125rem;"></i><span class="media-body"><span class="d-block">Anyone</span><small class="select2-custom-hide">Visible to anyone who can view your content. Accessible by installed apps.</small></span></span>'>Anyone</option>
                        <option value="privacy2" data-option-template='<span class="media"><i class="tio-lock-outlined tio-lg text-body mr-2" style="margin-top: .125rem;"></i><span class="media-body"><span class="d-block">Only you</span><small class="select2-custom-hide">Only visible to you.</small></span></span>'>Only you</option>
                      </select>
                     </div>
                    <!-- End Select -->
                   </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h2 class="card-title h4">Basic information</h2>
              </div>

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-down-break">
                        <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name" value="Mark">
                        <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Your last name" aria-label="Your last name" value="Williams">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="emailLabel" placeholder="Email" aria-label="Email" value="mark@example.com">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="+1 (609) 972-22-22" data-hs-mask-options='{
                               "template": "+0(000)000-00-00"
                             }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="organizationLabel" class="col-sm-3 col-form-label input-label">Organization</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="Your organization" aria-label="Your organization" value="Htmlstream">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Department</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="department" id="departmentLabel" placeholder="Your department" aria-label="Your department">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div id="accountType" class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Account type</label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-down-break">
                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="userAccountTypeRadio" id="userAccountTypeRadio1" checked="">
                            <label class="custom-control-label" for="userAccountTypeRadio1">Individual</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->

                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="userAccountTypeRadio" id="userAccountTypeRadio2">
                            <label class="custom-control-label" for="userAccountTypeRadio2">Company</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Location</label>

                    <div class="col-sm-9">
                      <!-- Select -->
                      <div class="mb-3">
                        <select id="locationLabel" data-hs-select2-options='{
                                  "searchInputPlaceholder": "Search a country"
                                }'>
                          <option value=""></option>
                        </select>
                      </div>
                      <!-- End Select -->

                      <div class="mb-3">
                        <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City" value="London">
                      </div>

                      <input type="text" class="form-control" name="state" id="stateLabel" placeholder="State" aria-label="State">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Address line 1</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="Your address" aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="addressLine2Label" class="col-sm-3 col-form-label input-label">Address line 2 <span class="input-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="addressLine2" id="addressLine2Label" placeholder="Your address" aria-label="Your address">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="zipCodeLabel" class="col-sm-3 col-form-label input-label">Zip code <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="You can find your code in a postal address."></i></label>

                    <div class="col-sm-9">
                      <input type="text" class="js-masked-input form-control" name="zipCode" id="zipCodeLabel" placeholder="Your zip code" aria-label="Your zip code" value="KW5 8NW" data-hs-mask-options='{
                               "template": "AA0 0AA"
                             }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row align-items-center form-group">
                    <label for="disableAdCheckbox" class="col-sm-3 col-form-label input-label">Disable ads <span class="badge badge-primary text-uppercase ml-1">PRO</span></label>

                    <div class="col-sm-9">
                      <!-- Custom Checkbox -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="disableAdCheckbox">
                        <label class="custom-control-label" for="disableAdCheckbox">With your Pro account, you can disable ads across the site.</label>
                      </div>
                      <!-- End Custom Checkbox -->
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
                <!-- End Form -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="emailSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h3 class="card-title h4">Email</h3>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p>Your current email address is <span class="font-weight-bold">mark@example.com</span></p>

                <!-- Form -->
                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="newEmailLabel" class="col-sm-3 col-form-label input-label">New email address</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="newEmail" id="newEmailLabel" placeholder="Enter new email address" aria-label="Enter new email address">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
                <!-- End Form -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="passwordSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Change your password</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <form id="changePasswordForm">
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Current password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Enter current password" aria-label="Enter current password">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="newPassword" class="col-sm-3 col-form-label input-label">New password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-pwstrength form-control" name="newPassword" id="newPassword" placeholder="Enter new password" aria-label="Enter new password" data-hs-pwstrength-options='{
                               "ui": {
                                 "container": "#changePasswordForm",
                                 "viewports": {
                                   "progress": "#passwordStrengthProgress",
                                   "verdict": "#passwordStrengthVerdict"
                                 }
                               }
                             }'>

                      <p id="passwordStrengthVerdict" class="form-text mb-2">

                      <div id="passwordStrengthProgress"></div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm new password</label>

                    <div class="col-sm-9">
                      <div class="mb-3">
                        <input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password">
                      </div>

                      <h5>Password requirements:</h5>

                      <p class="font-size-sm mb-2">Ensure that these requirements are met:</p>

                      <ul class="font-size-sm">
                        <li>Minimum 8 characters long - the more, the better</li>
                        <li>At least one lowercase character</li>
                        <li>At least one uppercase character</li>
                        <li>At least one number, symbol, or whitespace character</li>
                      </ul>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
                <!-- End Form -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="preferencesSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Preferences</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="languageLabel" class="col-sm-3 col-form-label input-label">Language</label>

                    <div class="col-sm-9">
                      <!-- Select -->
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="languageLabel" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "placeholder": "Select language"
                              }'>
                        <option label="empty"></option>
                        <option value="language1" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>
                        <option value="language2" selected="" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>English (UK)</span></span>'>English (UK)</option>
                        <option value="language3" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>Deutsch</option>
                        <option value="language4" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>Dansk</option>
                        <option value="language5" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
                        <option value="language6" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>Nederlands</option>
                        <option value="language7" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>Italiano</option>
                        <option value="language8" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="<?php echo($level);?>assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>中文 (繁體)</option>
                      </select>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="timeZoneLabel" class="col-sm-3 col-form-label input-label">Time zone</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="currentPassword" id="timeZoneLabel" placeholder="Your time zone" aria-label="Your time zone" value="GMT+01:00" readonly="">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="preferencesSwitch1">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-block text-dark">Early release</span>
                      <span class="d-block font-size-sm">Get included on early releases for new Front features.</span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="preferencesSwitch1">
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="preferencesSwitch2">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-block text-dark">See info about people who view my profile</span>
                      <span class="d-block font-size-sm"><a class="link" href="#">More about viewer info</a>.</span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="preferencesSwitch2" checked="">
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
                <!-- End Form -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="twoStepVerificationSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Two-step verification</h4>
                  <span class="badge badge-soft-danger ml-2">Disabled</span>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p class="card-text">Start by entering your password so that we know it's you. Then we'll walk you through two more simple steps.</p>

                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="accountPasswordLabel" class="col-sm-3 col-form-label input-label">Account password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" name="currentPassword" id="accountPasswordLabel" placeholder="Enter current password" aria-label="Enter current password">
                      <small class="form-text">This is the password you use to log in to your Front account.</small>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Set up</button>
                  </div>
                </form>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="recentDevicesSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Recent devices</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p class="card-text">View and manage devices where you're currently logged in.</p>
              </div>
              <!-- End Body -->

              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-thead-bordered table-nowrap table-align-middle card-table">
                  <thead class="thead-light">
                    <tr>
                      <th>Browser</th>
                      <th>Device</th>
                      <th>Location</th>
                      <th>Most recent activity</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class="d-flex align-items-center">
                        <img class="avatar avatar-xss mr-2" src="<?php echo($level);?>assets\svg\brands\chrome.svg" alt="Image Description"> Chrome on Windows
                      </td>
                      <td><i class="tio-laptop tio-lg mr-2"></i> Dell XPS 15 <span class="badge badge-soft-success ml-1">Current</span></td>
                      <td>London, UK</td>
                      <td>Now</td>
                    </tr>

                    <tr>
                      <td class="d-flex align-items-center">
                        <img class="avatar avatar-xss mr-2" src="<?php echo($level);?>assets\svg\brands\chrome.svg" alt="Image Description"> Chrome on Android
                      </td>
                      <td><i class="tio-android-phone-vs tio-lg mr-2"></i> Google Pixel 3a</td>
                      <td>London, UK</td>
                      <td>15, August 2020 15:08</td>
                    </tr>

                    <tr>
                      <td class="d-flex align-items-center">
                        <img class="avatar avatar-xss mr-2" src="<?php echo($level);?>assets\svg\brands\chrome.svg" alt="Image Description"> Chrome on Windows
                      </td>
                      <td><i class="tio-imac tio-lg mr-2"></i> Microsoft Studio 2</td>
                      <td>London, UK</td>
                      <td>12, August 2020 20:07</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="notificationsSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Notifications</h4>
              </div>

              <!-- Alert -->
              <div class="alert alert-soft-dark card-alert text-center" role="alert">
                We need permission from your browser to show notifications. <a class="alert-link" href="#">Request permission</a>
              </div>
              <!-- End Alert -->

              <form>
                <!-- Table -->
                <div class="table-responsive">
                  <table class="table table-thead-bordered table-nowrap table-align-middle card-table">
                    <thead class="thead-light">
                      <tr>
                        <th>Type</th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="<?php echo($level);?>assets\svg\illustrations\at-line.svg" alt="Image Description">
                          </div>
                          Email
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="<?php echo($level);?>assets\svg\illustrations\world-line.svg" alt="Image Description">
                          </div>
                          Browser
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="<?php echo($level);?>assets\svg\illustrations\phone-line.svg" alt="Image Description">
                          </div>
                          App
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>New for you</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox1" checked="">
                            <label class="custom-control-label" for="alertsCheckbox1"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox2">
                            <label class="custom-control-label" for="alertsCheckbox2"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox3">
                            <label class="custom-control-label" for="alertsCheckbox3"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Account activity <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Get important notifications about you or activity you've missed"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox4" checked="">
                            <label class="custom-control-label" for="alertsCheckbox4"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox5" checked="">
                            <label class="custom-control-label" for="alertsCheckbox5"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox6" checked="">
                            <label class="custom-control-label" for="alertsCheckbox6"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new browser used to sign in</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox7" checked="">
                            <label class="custom-control-label" for="alertsCheckbox7"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox8" checked="">
                            <label class="custom-control-label" for="alertsCheckbox8"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox9" checked="">
                            <label class="custom-control-label" for="alertsCheckbox9"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device is linked</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox10">
                            <label class="custom-control-label" for="alertsCheckbox10"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox11" checked="">
                            <label class="custom-control-label" for="alertsCheckbox11"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox12">
                            <label class="custom-control-label" for="alertsCheckbox12"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device connected <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Email me when a new device connected"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox13">
                            <label class="custom-control-label" for="alertsCheckbox13"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox14" checked="">
                            <label class="custom-control-label" for="alertsCheckbox14"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alertsCheckbox15" checked="">
                            <label class="custom-control-label" for="alertsCheckbox15"></label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->
              </form>

              <hr>

              <!-- Body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <p class="card-text">When should we send you notifications?</p>

                      <!-- Select -->
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity"
                              }'>
                        <option value="whenToSendNotification1">Always</option>
                        <option value="whenToSendNotification2">Only when I'm online</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <p class="card-text">Send me a daily summary ("Daily Digest") of task activity.</p>

                      <div class="form-row">
                        <div class="col-auto mb-2">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="everyday">Everyday</option>
                            <option value="weekdays" selected="">Weekdays</option>
                            <option value="never">Never</option>
                          </select>
                          <!-- End Select -->
                        </div>

                        <div class="col-auto mb-2">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="0">at 12 AM</option>
                            <option value="1">at 1 AM</option>
                            <option value="2">at 2 AM</option>
                            <option value="3">at 3 AM</option>
                            <option value="4">at 4 AM</option>
                            <option value="5">at 5 AM</option>
                            <option value="6">at 6 AM</option>
                            <option value="7">at 7 AM</option>
                            <option value="8">at 8 AM</option>
                            <option value="9" selected="">at 9 AM</option>
                            <option value="10">at 10 AM</option>
                            <option value="11">at 11 AM</option>
                            <option value="12">at 12 PM</option>
                            <option value="13">at 1 PM</option>
                            <option value="14">at 2 PM</option>
                            <option value="15">at 3 PM</option>
                            <option value="16">at 4 PM</option>
                            <option value="17">at 5 PM</option>
                            <option value="18">at 6 PM</option>
                            <option value="19">at 7 PM</option>
                            <option value="20">at 8 PM</option>
                            <option value="21">at 9 PM</option>
                            <option value="22">at 10 PM</option>
                            <option value="23">at 11 PM</option>
                          </select>
                          <!-- End Select -->
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>

                <p class="card-text">In order to cut back on noise, email notifications are grouped together and only sent when you're idle or offline.</p>

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="connectedAccountsSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Connected accounts</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p class="card-text">Integrated features from these accounts make it easier to collaborate with people you know on Front Dashboard.</p>

                <!-- Form -->
                <form>
                  <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <img class="avatar avatar-xs mt-1 mr-3" src="<?php echo($level);?>assets\svg\brands\google.svg" alt="Image Description">

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <h5 class="mb-0">Google</h5>
                              <p class="font-size-sm mb-0">Calendar and contacts</p>
                            </div>

                            <div class="col-auto">
                              <!-- Checkbox Switch -->
                              <label class="toggle-switch" for="connectedAccounts1">
                                <input id="connectedAccounts1" type="checkbox" class="toggle-switch-input">
                                <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                                </span>
                              </label>
                              <!-- End Checkbox Switch -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <img class="avatar avatar-xs mt-1 mr-3" src="<?php echo($level);?>assets\svg\brands\spec.svg" alt="Image Description">

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <h5 class="mb-0">Spec</h5>
                              <p class="font-size-sm mb-0">Project management</p>
                            </div>

                            <div class="col-auto">
                              <!-- Checkbox Switch -->
                              <label class="toggle-switch" for="connectedAccounts2">
                                <input id="connectedAccounts2" type="checkbox" class="toggle-switch-input">
                                <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                                </span>
                              </label>
                              <!-- End Checkbox Switch -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <img class="avatar avatar-xs mt-1 mr-3" src="<?php echo($level);?>assets\svg\brands\slack.svg" alt="Image Description">

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <h5 class="mb-0">Slack</h5>
                              <p class="font-size-sm mb-0">Communication <a class="link" href="#">Learn more</a></p>
                            </div>

                            <div class="col-auto">
                              <!-- Checkbox Switch -->
                              <label class="toggle-switch" for="connectedAccounts3">
                                <input id="connectedAccounts3" type="checkbox" class="toggle-switch-input" checked="">
                                <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                                </span>
                              </label>
                              <!-- End Checkbox Switch -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <img class="avatar avatar-xs mt-1 mr-3" src="<?php echo($level);?>assets\svg\brands\mailchimp.svg" alt="Image Description">

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <h5 class="mb-0">Mailchimp</h5>
                              <p class="font-size-sm mb-0">Email marketing service</p>
                            </div>

                            <div class="col-auto">
                              <!-- Checkbox Switch -->
                              <label class="toggle-switch" for="connectedAccounts4">
                                <input id="connectedAccounts4" type="checkbox" class="toggle-switch-input" checked="">
                                <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                                </span>
                              </label>
                              <!-- End Checkbox Switch -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <img class="avatar avatar-xs mt-1 mr-3" src="<?php echo($level);?>assets\svg\brands\google-webdev.svg" alt="Image Description">

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col">
                              <h5 class="mb-0">Google Webdev</h5>
                              <p class="font-size-sm mb-0">Tools for Web Developers <a class="link" href="#">Learn more</a></p>
                            </div>

                            <div class="col-auto">
                              <!-- Checkbox Switch -->
                              <label class="toggle-switch" for="connectedAccounts5">
                                <input id="connectedAccounts5" type="checkbox" class="toggle-switch-input">
                                <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                                </span>
                              </label>
                              <!-- End Checkbox Switch -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->
                  </div>
                </form>
                <!-- End Form -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="socialAccountsSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Social accounts</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <form>
                  <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <i class="tio-twitter list-group-icon mt-1"></i>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-sm mb-2 mb-sm-0">
                              <h5 class="mb-0">Twitter</h5>
                              <a class="font-size-sm" href="#">www.twitter.com/htmlstream</a>
                            </div>

                            <div class="col-sm-auto">
                              <a class="btn btn-sm btn-white" href="javascript:;">Disconnect</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <i class="tio-facebook list-group-icon mt-1"></i>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-sm mb-2 mb-sm-0">
                              <h5 class="mb-0">Facebook</h5>
                              <a class="font-size-sm" href="#">www.facebook.com/htmlstream</a>
                            </div>

                            <div class="col-sm-auto">
                              <a class="btn btn-sm btn-white" href="javascript:;">Disconnect</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <i class="tio-dribbble list-group-icon mt-1"></i>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-sm mb-2 mb-sm-0">
                              <h5 class="mb-0">Dribbble</h5>
                              <p class="font-size-sm mb-0">Not connected</p>
                            </div>

                            <div class="col-sm-auto">
                              <a class="btn btn-sm btn-white" href="javascript:;">Connect</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <i class="tio-linkedin list-group-icon mt-1"></i>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-sm mb-2 mb-sm-0">
                              <h5 class="mb-0">Linkedin</h5>
                              <a class="font-size-sm" href="#">www.linkedin.com/htmlstream</a>
                            </div>

                            <div class="col-sm-auto">
                              <a class="btn btn-sm btn-white" href="javascript:;">Disconnect</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                      <div class="media">
                        <i class="tio-behance list-group-icon mt-1"></i>

                        <div class="media-body">
                          <div class="row align-items-center">
                            <div class="col-sm mb-2 mb-sm-0">
                              <h5 class="mb-0">Behance</h5>
                              <p class="font-size-sm mb-0">Not connected</p>
                            </div>

                            <div class="col-sm-auto">
                              <a class="btn btn-sm btn-white" href="javascript:;">Connect</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End List Item -->
                  </div>
                </form>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div id="deleteAccountSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Delete your account</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p class="card-text">When you delete your account, you lose access to Front account services, and we permanently delete your personal data. You can cancel the deletion for 14 days.</p>

                <div class="form-group">
                  <!-- Custom Checkbox -->
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="deleteAccountCheckbox">
                    <label class="custom-control-label" for="deleteAccountCheckbox">Confirm that I want to delete my account.</label>
                  </div>
                  <!-- End Custom Checkbox -->
                </div>

                <div class="d-flex justify-content-end">
                  <a class="btn btn-white mr-2" href="#">Learn more <i class="tio-open-in-new ml-1"></i></a>

                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Sticky Block End Point -->
            <div id="stickyBlockEndPoint"></div>
          </div>