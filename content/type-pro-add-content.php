
<div class="row justify-content-lg-center">
          <div class="col-lg-9">
            <!-- Card -->
            <div class="card card-lg mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Add</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <form action="../component/type_pro_process.php" method="POST" enctype="multipart/form-data">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Logo</label>

                    <div class="d-flex align-items-center">
                      <!-- Avatar -->
                      <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                        <img id="avatarProjectSettingsImg" class="avatar-img" src="<?php echo($level);?>assets\svg\brands\guideline.svg" alt="Image Description">

                        <input type="file" name="myfile" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                                  "textTarget": "#avatarProjectSettingsImg",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "resetTarget": ".js-file-attach-reset-img",
                                  "resetImg": "<?php echo($level);?>assets/img/160x160/img2.jpg",
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
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="projectNameProjectSettingsLabel1" class="input-label">ID <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tio-briefcase-outlined"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="projectID" id="projectNameProjectSettingsLabel1" placeholder="Enter project name here" aria-label="Enter project name here" value="Cloud computing web service">
                    </div>

                    <label for="projectNameProjectSettingsLabel2" class="input-label" style="margin-top: 5%;">Name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="" ></i></label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tio-briefcase-outlined"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="projectName" id="projectNameProjectSettingsLabel2" placeholder="Enter project name here" aria-label="Enter project name here" value="">
                    </div>
                    

                    <label for="projectNameProjectSettingsLabel3" class="input-label" style="margin-top: 5%;">Parent ID<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title=""></i></label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <!-- <div class="input-group-text">
                          <i class="tio-briefcase-outlined"></i>
                        </div> -->
                      </div>
                      <select name="Parent_id" id="projectNameProjectSettingsLabel3" placeholder="Enter project name here" aria-label="Enter project name here" value="" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
                        <option value="">Parent_id</option>
                        <?php
                        foreach($dsloaisp as $ds)
                        {
                          if($ds['deleted'] ==1)
                          echo'
                          <option value="'.$ds['ID'].'">'.$ds['name'].'</option>';
                        }
                        ?>
                      
                      </select>
                      <!-- <input type="text" class="form-control" name="Parent_id" id="projectNameProjectSettingsLabel3" placeholder="Enter project name here" aria-label="Enter project name here" value=""> -->
                    </div>
                    

                  </div>
                  <!-- End Form Group -->

                  <!-- Quill -->
                  <!-- <label class="input-label">Description <span class="input-label-secondary">(Optional)</span></label>

                  <div class="quill-custom">
                    <div id="qlToolbarContainer">
                      <div class="row align-items-center">
                        <div class="col-sm">
                          
                          <ul class="list-inline ql-toolbar-list">
                            <li class="list-inline-item">
                              <button class="ql-bold"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-italic"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-underline"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-strike"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-link"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-image"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-blockquote"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-code"></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="ql-list" value="bullet"></button>
                            </li>
                          </ul>
                        
                        </div>
                      </div>
                    
                    </div>

                    <div class="js-quill ql-editor-content" data-hs-quill-options='{
                            "placeholder": "Type your message...",
                            "toolbarBottom": true,
                            "modules": {
                              "toolbar": "#qlToolbarContainer"
                            }
                          }'>
                          
                    </div>
                  </div> -->
                  <!-- End Quill -->
                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-white mr-2">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  <!-- End Footer -->
                </form>
              </div>
              <!-- End Body -->

              
            </div>
            <!-- End Card -->
          </div>
        </div>