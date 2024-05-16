<!-- layout làm trước chưa gộp thẻ div main -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head/metadata.php");?>  
  </head>

  <body class="   footer-offset">
        <!-- Js của body -->
    <?php include("lib/script-body.php");?>  
          <!-- phần builder -->
      <?php include('header/builder.php');?>
          <!-- phần header & thanh công cụ  -->
      <?php include('header/header.php');?>
      <?php include('lib/script-header.php');?>
          <!-- phần header tìm kiếm -->
    <?php include('header/search.php');?>

    <!-- trang index -->
<?php 
if($pages == 'index')
{
?>
    <main id="content" role="main" class="main pointer-event">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/index_p_header.php');?>
        <!-- End Page Header -->

        <!-- Stats -->
        <?php include('content/index_p_stats.php');?>
        <!-- End Stats -->

        <!-- Row -->  
        <?php include('content/index_p_row.php');?>
        <!-- End Row -->

        <!-- Card -->
        <?php include('content/index_p_card.php');?>
        <?php include('content/index_p_card2.php');?>
        <!-- End Card -->
      </div>
      <!-- End Content -->

      <!-- Footer -->      
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>

     <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Create a new user Modal -->
    <?php include('content/create_new_userModal.php');?>
    <!-- End Create a new user Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->
    <!-- ========== js cho toàn trang ========== -->
    <?php include('lib/script.php');?>
<?php 
}
?>



 <!-- trang dashboard-->
 <?php 
if($pages == 'dashboard')
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <?php include('content/dash-dark.php');?>
      <!-- End Content -->

      <!-- Content -->
      <?php include('content/dash-content.php');?>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-dash.php');?>

<?php 
}
?>

    <!-- trang user-->
    <?php 
if($pages == 'user' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/users-header.php');?>
        <!-- End Page Header -->


        <!-- Card -->
        <?php include('content/users-card.php');?>
        <!-- End Card -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>
    <!-- Edit user Modal -->
    <?php include('content/edit-user-modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-users.php');?>

<?php 
}
?>

    <!-- trang add user-->
    <?php 
if($pages == 'users-add-user')
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Step Form -->
        <?php include('content/users-add-user-stepfrom.php');?>
        <!-- End Step Form -->
 
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-users-add.php');?>

<?php 
}
?>

    <!-- trang my profile-->
    <?php 
if($pages == 'my-profile')
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <?php include('content/my-profile-content.php');?>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-my-profile.php');?>

<?php 
}
?>


    <!-- trang account-settings-->
    <?php 
if($pages == 'account-settings' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/account-settings-header.php');?>
        <!-- End Page Header -->

        <div class="row">
          <?php include('content/account-settings-row3.php');?>
          <?php include('content/account-settings-row9.php');?>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-account-settings.php');?>

<?php 
}
?>


    <!-- trang ecom-->
    <?php 
if($pages == 'ecom' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/ecom-header.php');?>
        <!-- End Page Header -->

        <!-- Card 1-->
        <?php include('content/ecom-card1.php');?>
        <!-- End Card -->
        
        <!-- Card 2-->
        <?php include('content/ecom-card2.php');?>
        <!-- End Card -->

        <!-- Card 3-->
        <?php include('content/ecom-card3.php');?>
        <!-- End Card -->

        <!-- Card 4-->
        <?php include('content/ecom-card4.php');?>
        <!-- End Card -->

        <!-- Card 5-->
        <?php include('content/ecom-card5.php');?>
        <!-- End Card -->
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-ecom.php');?>

<?php 
}
?>

    <!-- trang pro-->
    <?php 
if($pages == 'pro' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/pro-header.php');?>
        <!-- End Page Header -->

        <?php include('content/pro-row.php');?>
        <!-- End Row -->
  
        <!-- Card -->
        <?php include('content/pro-card.php');?>
        <!-- End Card -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Export Products Modal -->
    <?php include('content/Export-Products-Modal.php');?>
    <!-- End Export Products Modal -->

    <!-- Import Products Modal -->
    <?php include('content/Import-Products-Modal.php');?>
    <!-- End Import Products Modal -->

    <!-- Product Filter Modal -->
    <?php include('content/Product-Filter-Modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-pro.php');?>

<?php 
}
?>

    <!-- trang pro-DETAIL-->
    <?php 
if($pages == 'pro-det' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/pro-det-header.php');?>
        <!-- End Page Header -->
  
        <div class="row">
        <?php include('content/pro-det-left.php');?>
        <?php include('content/pro-det-right.php');?>
          
        </div>
        <!-- End Row -->
        <?php include('content/pro-det-pos.php');?>
        
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Add Image from URL Modal -->
    <?php include('content/Add-Image-from-URL-Modal.php');?>
    <!-- End Add Image from URL Modal -->

    <!-- Embed Video Modal -->
    <?php include('content/Embed-Video-Modal.php');?>
    <!-- End Embed Video Modal -->

    <!-- Products Advanced Features Modal -->
    <?php include('content/Products-Advanced-Features-Modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-pro-det.php');?>

<?php 
}
?>

    <!-- trang pro-add-->
    <?php 
if($pages == 'pro-add' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/pro-add-header.php');?>
        <!-- End Page Header -->
  
        <div class="row">
        <?php include('content/pro-add-left.php');?>
        <?php include('content/pro-add-right.php');?>
          
        </div>
        <!-- End Row -->
        <?php include('content/pro-det-pos.php');?>
        
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Add Image from URL Modal -->
    <?php include('content/Add-Image-from-URL-Modal.php');?>
    <!-- End Add Image from URL Modal -->

    <!-- Embed Video Modal -->
    <?php include('content/Embed-Video-Modal.php');?>
    <!-- End Embed Video Modal -->

    <!-- Products Advanced Features Modal -->
    <?php include('content/Products-Advanced-Features-Modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-pro-add.php');?>

<?php 
}
?>

    <!-- trang type-pro-->
    <?php 
if($pages == 'type-pro' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/type-pro-header.php');?>
        <!-- End Page Header -->

        <?php include('content/type-pro-row.php');?>
        <!-- End Row -->
  
        <!-- Card -->
        <?php include('content/type-pro-card.php');?>
        <!-- End Card -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Export Products Modal -->
    <?php include('content/Export-Products-Modal.php');?>
    <!-- End Export Products Modal -->

    <!-- Import Products Modal -->
    <?php include('content/Import-Products-Modal.php');?>
    <!-- End Import Products Modal -->

    <!-- Product Filter Modal -->
    <?php include('content/Product-Filter-Modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-pro.php');?>

<?php 
}
?>

    <!-- trang type-pro-add-->
    <?php 
if($pages == 'type-pro-add' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/type-pro-add-header.php');?>
        <!-- End Page Header -->
        <?php include('content/type-pro-add-content.php');?>
        
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Export Products Modal -->
    <?php include('content/Export-Products-Modal.php');?>
    <!-- End Export Products Modal -->

    <!-- Import Products Modal -->
    <?php include('content/Import-Products-Modal.php');?>
    <!-- End Import Products Modal -->

    <!-- Product Filter Modal -->
    <?php include('content/Product-Filter-Modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-type-pro-add.php');?>

<?php 
}
?>

    <!-- trang orders-->
    <?php 
if($pages == 'orders' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
         <!-- Page Header -->
         <?php include('content/orders-header.php');?>
        <!-- End Page Header -->
  
        <!-- Card -->
        <?php include('content/orders-card.php');?>
        <!-- End Card -->
        
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Export Orders Modal -->
    <?php include('content/Export-Orders-Modal.php');?>
    <!-- End Export Orders Modal -->

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-orders.php');?>

<?php 
}
?>


    <!-- trang order-det-->
    <?php 
if($pages == 'order-det' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
         <!-- Page Header -->
        <?php include('content/order-det-header.php');?>
        <!-- End Page Header -->
  
        <div class="row">
          <?php include('content/order-det-left.php');?>
          <?php include('content/order-det-right.php');?>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Export Orders Modal -->
    <?php include('content/Export-Orders-Modal.php');?>
    <!-- End Export Orders Modal -->

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-order-det.php');?>

<?php 
}
?>

    <!-- trang order-add-->
    <?php 
if($pages == 'order-add' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/order-add-header.php');?>
        <!-- End Page Header -->
        <?php include('content/order-add-row0.php');?>
        <?php include('content/order-add-row1.php');?>
        <?php include('content/order-add-row2.php');?>
        <?php include('content/order-add-row3.php');?>
        <?php include('content/order-add-row4.php');?>

        
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-order-add.php');?>

<?php 
}
?>

    <!-- trang customers-->
    <?php 
if($pages == 'cus' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/cus-header.php');?>
        <!-- End Page Header -->
  
        <!-- Card -->
        <?php include('content/cus-card.php');?>
        <!-- End Card -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Export Customers Modal -->
    <?php include('content/Export-Customers.php');?>
    <!-- End Export Customers Modal -->

    <!-- Import Customers Modal -->
    <?php include('content/Import-Customers.php');?>
    <!-- End Import Customers Modal -->

    <!-- Customers Guide Modal -->
    <!-- End Customers Guide Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-cus.php');?>

<?php 
}
?>

    <!-- trang customers-detail-->
    <?php 
if($pages == 'cus-det' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/cus-det-header.php');?>
        <!-- End Page Header -->
  
        <div class="row">
        <?php include('content/cus-det-left.php');?>
        <?php include('content/cus-det-right.php');?>
        </div>
        <!-- End Row -->

        <?php include('content/cus-det-delete.php');?>
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Invoice Modal -->
    <?php include('content/Invoice-Modal.php');?>
    <!-- End Invoice Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-cus-det.php');?>

<?php 
}
?>


    <!-- trang customers-add-->
    <?php 
if($pages == 'cus-add' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/cus-add-header.php');?>
        <!-- End Page Header -->
  
        <?php include('content/cus-add-row1.php');?>
        <?php include('content/cus-add-row2.php');?>
        <?php include('content/cus-add-row3.php');?>

        
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-cus-add.php');?>

<?php 
}
?>

    <!-- trang review-->
    <?php 
if($pages == 'review' )
{
?>
<!-- <main id="content" role="main" class="main pointer-event"> -->
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <?php include('content/review-header.php');?>
        <!-- End Page Header -->

        <!-- Card -->
        <?php include('content/review-card1.php');?>
        <!-- End Card -->
        
        <!-- Card -->
        <?php include('content/review-card2.php');?>
        <!-- End Card -->
      </div>
      <!-- End Content -->

      <!-- Footer -->  
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>
    

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Upload files Modal -->
    <?php include('content/Upload-files-Modal.php');?>
    <!-- End Upload files Modal -->

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <?php include('lib/script-review.php');?>

<?php 
}
?>

    <!-- trang 404 -->
    <?php 
if($pages == '404')
{
?>
    <main id="content" role="main" class="main">
      <!-- Content -->
        <?php include('content/error-404-content.php');?>
      <!-- End Content -->

      <!-- Footer -->      
      <?php include('footer/footer.php');?>
      <!-- End Footer -->
    </main>

     <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <?php include('content/keyboard.php');?>

    <!-- Activity -->
    <?php include('content/activity.php');?>

    <!-- Welcome Message Modal -->
    <?php include('content/message_modal.php');?>

    <!-- Create a new user Modal -->
    <?php include('content/create_new_userModal.php');?>
    <!-- End Create a new user Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->
    <!-- ========== js cho toàn trang ========== -->
    <?php include('lib/script.php');?>
<?php 
}
?>



  </body>
</html>
