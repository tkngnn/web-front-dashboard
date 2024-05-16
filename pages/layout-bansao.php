<!--Bản sao-->
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include($level."head/metadata.php");?>  
  </head>

    <body>
      <!-- ========== MAIN CONTENT ========== -->
      <main id="content" role="main" class="main">
        <?php include($level.'content/au-pos.php');?>

        
        <!-- Content -->
        <div class="container py-5 py-sm-7">
          <?php include($level.'content/au-header.php');?>

           <!-- đăng nhập -->
        <?php
        if($pages == 'sign-in')
        {
        ?>

          <?php include($level.'content/au-sign-in-content.php');?>

        <?php 
        }
        ?>

            <!-- đăng ký -->
        <?php
        if($pages == 'sign-up')
        {
        ?>

          <?php include($level.'content/au-sign-up-content.php');?>

        <?php 
        }
        ?>

        <!-- reset pass -->
        <?php
        if($pages == 'reset-pass')
        {
        ?>

          <?php include($level.'content/au-pass-content.php');?>

        <?php 
        }
        ?>

        <!-- gửi mail -->
        <?php
        if($pages == 'email')
        {
        ?>

          <?php include($level.'content/au-email-content.php');?>

        <?php 
        }
        ?>

        <!-- xac thuc -->
        <?php
        if($pages == 'two-step')
        {
        ?>

          <?php include($level.'content/au-two-step-content.php');?>

        <?php 
        }
        ?>


        </div>

       
        <!-- End Content -->
      </main>
      <!-- ========== END MAIN CONTENT ========== -->


      <!-- JS  -->
      <?php include($level.'lib/script-sign-in.php');?>
      <?php include($level.'lib/script-sign-up.php');?>
      <?php include($level.'lib/script-email.php');?>
      <?php include($level.'lib/script-pass.php');?>
      <?php include($level.'lib/script-two-step.php');?>
    </body>
</html>