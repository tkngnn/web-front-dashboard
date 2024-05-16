<form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
              }' action="<?php echo $level.'component/user-fix-process.php'?>" method="post" enctype="multipart/form-data" >
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
                <!-- Step  -->
                <ul id="addUserStepFormProgress" class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                    <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                        "targetSelector": "#addUserStepProfile"
                        }'>
                        <span class="step-icon step-icon-soft-dark">1</span>
                        <div class="step-content">
                        <span class="step-title">Profile</span>
                        </div>
                    </a>
                    </li>

                    <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                        "targetSelector": "#addUserStepBillingAddress"
                        }'>
                        <span class="step-icon step-icon-soft-dark">2</span>
                        <div class="step-content">
                        <span class="step-title">Account</span>
                        </div>
                    </a>
                    </li>
                </ul>
                <!-- End Step  -->

                <!-- Content Step Form -->
                <div id="addUserStepFormContent">
                    <!-- Card -->
                    <div id="addUserStepProfile" class="card card-lg active">
                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form Group -->
                        <div class="row form-group">
                        <input type="text" name="anhdaidien" id="" value="<?php echo $user_detail_row[0]['user_avatar']?>" hidden="true">
                        <label class="col-sm-3 col-form-label input-label">Avatar</label>

                        <div class="col-sm-9">
                            <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                <img id="avatarImg" class="avatar-img" src="<?php echo($level.'upload_img/'.$user_detail_row[0]['user_avatar']);?>" alt="Image Description">

                                <input type="file" name="myfile" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                                        "textTarget": "#avatarImg",
                                        "mode": "image",
                                        "targetAttr": "src",
                                        "resetTarget": ".js-file-attach-reset-img",
                                        "resetImg": "<?php echo($level);?>assets/img/160x160/img1.jpg",
                                        "allowTypes": [".png", ".jpeg", ".jpg"]
                                    }'>

                                <span class="avatar-uploader-trigger">
                                <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                </span>
                            </label>
                            <!-- End Avatar -->

                            <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                            </div>
                        </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                        <div class="col-sm-9">
                            <div class="input-group input-group-sm-down-break">
                            <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice" value="<?php echo $user_detail_row[0]['fullname'];?>">
                            
                            </div>
                        </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="emailLabel" placeholder="clarice@example.com" aria-label="clarice@example.com" value="<?php echo $user_detail_row[0]['email'];?>">
                        </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="js-add-field row form-group" data-hs-add-field-options='{
                                "template": "#addPhoneFieldTemplate",
                                "container": "#addPhoneFieldContainer",
                                "defaultCreated": 0
                            }'>
                        <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                        <div class="col-sm-9">
                            <div class="input-group input-group-sm-down-break align-items-center">
                            <input type="text" value="<?php echo $user_detail_row[0]['phone'];?>" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                    "template": "+0(000)000-00-00"
                                    }'>

                            <div class="input-group-append">
                                <!-- Select -->
                                <div class="select2-custom">
                                <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" name="phoneSelect" data-hs-select2-options='{
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

                            <a class="js-create-field form-link btn btn-sm btn-no-focus btn-ghost-primary" href="javascript:;">
                            <i class="tio-add"></i> Add phone
                            </a>
                        </div>
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

                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="organizationLabel" class="col-sm-3 col-form-label input-label">Address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="Enter address" value="<?php echo $user_detail_row[0]['address'];?>">
                        </div>
                        </div>
                        <!-- End Form Group -->
                    
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                                "targetSelector": "#addUserStepBillingAddress"
                                }'>
                        Next <i class="tio-chevron-right"></i>
                        </button>
                    </div>
                    <!-- End Footer -->
                    </div>
                    <!-- End Card -->

                    <div id="addUserStepBillingAddress" class="card card-lg" style="display: none;">
                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="ID" class="col-sm-3 col-form-label input-label"></label>
                        
                        <div class="col-sm-9">
                            <p style="color:black;font-weight:700;">ID USER: <?php echo $user_detail_row[0]['ID'];?></p>
                            <input type="text" class="form-control" name="ID" id="ID" placeholder="Enter ID makes it easier to manage " value="<?php echo $user_detail_row[0]['ID'];?>" hidden="true">
                        </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">UserName</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="user" id="addressLine1Label" placeholder="UserName" value="<?php echo $user_detail_row[0]['user_name'];?>">
                        </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="addressLine1Label1" class="col-sm-3 col-form-label input-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="pass" id="addressLine1Label1" placeholder="Password" value="<?php echo $user_detail_row[0]['pass'];?>">
                        </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <!-- <div class="row form-group">
                        <label for="addressLine1Label2" class="col-sm-3 col-form-label input-label">Enter password again</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="re-password" id="addressLine1Label2" placeholder="Enter password again" aria-label="Your address">
                        </div>
                        </div> -->
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Account status</label>

                        <div class="col-sm-9">
                            <select name="status" id="" value="" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
                            <option value="<?php echo $user_detail_row[0]['status'];?>"><?php echo $user_detail_row[0]['status'];?></option>
                            <option value=""></option>
                            <option value="Active">Active</option>
                            <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="created" class="col-sm-3 col-form-label input-label">Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="date" id="created" placeholder="Account will be effective immediately"  value="<?php echo $user_detail_row[0]['created_at'];?>">
                        </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="row form-group">
                        <label for="addressLine1Label2" class="col-sm-3 col-form-label input-label">Managed by</label>

                        <div class="col-sm-9">
                        <select name="manager_id" id="" value="" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
                        
                        <?php foreach($dsadmin as $admin)
                        {
                          echo($admin['ID']);
                        ?>
                        <option value="<?php echo $admin['ID'];?>"
                          <?php 
                          if($admin['ID'] == $user_detail_row[0]['ID'])
                            echo "selected='selected'";?>>
                          <?php echo $admin['name'];?>
                        </option>
                      <?php } ?>
                            </select>
                        </div>
                        </div>
                        <!-- End Form Group -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer d-flex align-items-center">
                        <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options='{
                            "targetSelector": "#addUserStepProfile"
                        }'>
                        <i class="tio-chevron-left"></i> Previous step
                        </button>

                        <div class="ml-auto">
                        <button type="submit" class="btn btn-primary" >
                            Save changes <i class="tio-chevron-right"></i>
                        </button>
                        </div>
                    </div>
                    <!-- End Footer -->
                    </div>
                </div>
                <!--  End Content Step Form  -->

              
            </div>
          </div>
          <!-- End Row -->
</form>