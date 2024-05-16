
<div class="row justify-content-lg-center">
          <div class="col-lg-9">
            <!-- Card -->
            <div class="card card-lg mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Details</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <form action="<?php echo $level.'component/type-pro-fix-process.php '?>" method="POST" enctype="multipart/form-data">
                  <!-- Form Group -->
                  <input type="text" name="anhdaidien" id="" value="<?php echo $loaisp_detail_row[0]['category_img']?>" hidden="true">
                  <div class="form-group">
                    <label class="input-label">Logo</label>

                    <div class="d-flex align-items-center">
                      <!-- Avatar -->
                      <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                        <img id="avatarProjectSettingsImg" class="avatar-img" src="<?php echo($level.'upload_img/'.$loaisp_detail_row[0]['category_img'])?>" alt="Image Description">

                        <input type="file" class="js-file-attach avatar-uploader-input" id="avatarUploader" name="myfile" data-hs-file-attach-options='{
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
                 
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="projectNameProjectSettingsLabel1" class="input-label">ID <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front." ></i></label>
                    <p style="color:black;font-weight:700;"><?php echo $loaisp_detail_row[0]['ID']?></p>
                    <div class="input-group input-group-merge" hidden="true">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tio-briefcase-outlined"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="projectID" id="projectNameProjectSettingsLabel1" placeholder="Enter project name here" aria-label="Enter project name here" value="<?php echo $loaisp_detail_row[0]['ID']?>">
                    </div>


                    <label for="projectNameProjectSettingsLabel2" class="input-label" style="margin-top: 5%;">Name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="" ></i></label>

                    <div class="input-group input-group-merge" >
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tio-briefcase-outlined"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="projectName" id="projectNameProjectSettingsLabel2" placeholder="Enter project name here" aria-label="Enter project name here" value="<?php echo$loaisp_detail_row[0]['name'];?>">
                    </div>
                    
                    
                    <label for="projectNameProjectSettingsLabel3" class="input-label" style="margin-top: 5%;">Parent ID<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title=""></i></label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <!-- <div class="input-group-text">
                          <i class="tio-briefcase-outlined"></i>
                        </div> -->
                      </div>
                      <select name="Parent_id" id="projectNameProjectSettingsLabel3" placeholder="Enter project name here" aria-label="Enter project name here" value="" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
            
                        <?php foreach($danhsachloaisp_detail_row as $loaisp)
                        {
                          
                          echo($loaisp['ID']);
                        
                          
                          
                        ?>
                        <option value="<?php echo $loaisp['ID'];?>"
                          <?php 
                          if($loaisp['ID'] == $loaisp_detail_row[0]['ID'])
                            echo "selected='selected'";?>>
                          <?php echo $loaisp['name'];?>
                        </option>
                      <?php } ?>
                      </select>
                      <!-- <input type="text" class="form-control" name="Parent_id" id="projectNameProjectSettingsLabel3" placeholder="Enter project name here" aria-label="Enter project name here" value=""> -->
                    </div>

                  </div>
                  <!-- End Form Group -->
                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end align-items-center">
                  <a href="<?php echo $level.'pages/type-pro.php'?>">
                    <button type="button" class="btn btn-white mr-2">Cancel</button></a>
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