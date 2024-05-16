<form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
              }' action="<?php echo $level.'component/user-process.php'?>" method="post" enctype="multipart/form-data" >
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <!-- Step -->
              <?php include($level.'content/users-add-user-step.php');?>
              <!-- End Step -->

              <!-- Content Step Form -->
              <?php include($level.'content/users-add-user-content-step.php');?>
              <!-- End Content Step Form -->
            </div>
          </div>
          <!-- End Row -->
</form>