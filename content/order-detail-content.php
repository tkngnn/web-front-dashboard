<form action="<?php echo $level.'component/order-fix-process.php'?>" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-lg-8 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                <!-- Body -->
                <div class="card-body">
                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="productNameLabel" class="input-label">Order ID <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>
                        <p style="color:black;font-weight:700;"><?php echo $order_detail_row[0]['order_id']?></p>
                        <input type="text" class="form-control" name="id" id="productNameLabel" placeholder="Enter ID"  value="<?php echo $order_detail_row[0]['order_id']?>" hidden="true" >
                    </div>
                    <!-- End Form Group -->

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Form Group -->
                        <div class="form-group">
                            <label for="SKULabel" class="input-label">Order_date</label>

                            <input type="date" class="form-control" name="order_date" id="SKULabel" placeholder="eg. 348121032" aria-label="eg. 348121032" value="<?php echo $order_detail_row[0]['order_date']?>" >
                        </div>
                        <!-- End Form Group -->
                        </div>

                        <div class="col-sm-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="weightLabel" class="input-label">Status</label>
                
                                <div class="input-group input-group-merge">
                                    <select name="status" id="weightLabel" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
                                    <option value="<?php echo $order_detail_row[0]['status']?>"><?php echo $order_detail_row[0]['status']?></option>
                                    <option value="Pending">Pending</option>
                                    <option value="Delivering">Delivering</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Cancel">Cancel</option>
                                  
                                    
                                    </select>
                                </div>
                    
                        
                            </div>
                        <!-- End Form Group -->
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="payment" class="input-label">Payment_method</label>

                        <select name="payment_method" id="status" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
                            <option value="<?php echo $order_detail_row[0]['payment_method']?>"><?php echo $order_detail_row[0]['payment_method']?></option>
                            <option value="Cash">Cash</option>
                            <option value="Card">Card</option>
                            <option value="Momo">Momo</option>
                            <option value="VNpay">VNpay</option>
                            <option value="Zalopay">Zalopay</option>
                           
                        </select>
                    </div>
                    <!-- End Form Group -->
                    
                    <label class="input-label">Note <span class="input-label-secondary">(Optional)</span></label>

                    <!-- Quill -->
                    <div class="quill-custom">
                    <textarea name="note" id="" cols="30" rows="10" style="min-height: 15rem; width: 100%;"><?php echo $order_detail_row[0]['note']?></textarea>
                    </div>
                    <!-- End Quill -->
                </div>
                <!-- Body -->
                </div>
                <!-- End Card -->

     
                <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">Order details <span class="badge badge-soft-dark rounded-circle ml-1">4</span></h4>
                    <a class="link" href="javascript:;"></a>
                </div>
                <!-- End Header -->
            
                <!-- Body -->
                <div class="card-body">
                    <!-- Media -->
                    <?php 
              foreach ($order_detail_row as $product)
              {
                
                 echo '
                 
                    <div class="media" style="margin-bottom:2%;">
                    <div class="avatar avatar-xl mr-3" style="max-height: 20vh;">
                        <img class="img-fluid" src="'.$level.'upload_img/'.$product['product_img'].'" alt="Image Description" style="max-height: 100%;">
                    </div>

                    <div class="media-body">
                        <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0"> Product Name:
                            <a class="h5 d-block" href="#">'.$product['product_name'].'</a>
                        </div>

                        <div class="col col-md-2 align-self-center">Price:
                            <h5>$'.$product['product_price'].'</h5>
                        </div>

                        <div class="col col-md-2 align-self-center">Quantity:
                            <h5>'.$product['quantity'].'</h5>
                        </div>

                        <div class="col col-md-2 align-self-center text-right">Amount
                            <h5>$'.$product['price'].'</h5>
                        </div>
                        </div>
                    </div>
                    </div>';
                
                ?>
                <?php
              }
                ?>
                    <!-- End Media -->

                    <hr>

                    <div class="row justify-content-md-end mb-3">
                    <div class="col-md-8 col-lg-7">
                        <dl class="row text-sm-right">
                        <dt class="col-sm-6">Subtotal:</dt>
                        <dd class="col-sm-6">$<?php echo $order_detail_row[0]['total_money']?></dd>
                        <dt class="col-sm-6">Shipping fee:</dt>
                        <dd class="col-sm-6">$0.00</dd>
                        <dt class="col-sm-6">Discount</dt>
                        <dd class="col-sm-6">$0.00</dd>
                        <dt class="col-sm-6">Total:</dt>
                        <dd class="col-sm-6">$<?php echo $order_detail_row[0]['total_money']?></dd>
                        </dl>
                        <!-- End Row -->
                    </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Body -->
                </div>
                <!-- End Card -->
    </div>
    
    <!--customer-->
    <div class="col-lg-4">
            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Customer</h4>
              </div>
              <!-- End Header -->
          
              <!-- Body -->
              <div class="card-body">
                <!-- Input Group -->
                  <div class="form-group">
                    <label for="inputGroupMergeFullName" class="input-label">Full name</label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupMergeFullNameAddOn">
                          <i class="tio-user-outlined"></i>
                        </span>
                      </div>
                      <input type="text" name="customer" class="form-control" id="inputGroupMergeFullName" value="<?php echo $order_detail_row[0]['customer']?>">
                    </div>
                  </div>
                  <!-- End Input Group -->

                  <!-- Input Group -->
                  <div class="form-group">
                    <label for="inputGroupMergeEmail" class="input-label">Phone</label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupMergeEmailAddOn">
                          <i class="tio-call"></i>
                        </span>
                      </div>
                      <input type="text" name="phone" class="form-control" id="inputGroupMergeEmail" value="<?php echo $order_detail_row[0]['phone']?>">
                    </div>
                  </div>
                  <!-- End Input Group -->

                  <!-- Input Group -->
                  <div class="form-group">
                    <label for="inputGroupMergeEmailOptional" class="input-label">Shipping address <span class="input-label-secondary">(Optional)</span></label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupMergeEmailOptionalAddOn">
                          <i class="tio-navigate-outlined"></i>
                        </span>
                      </div>
                      <input type="text" name="address" class="form-control" id="inputGroupMergeEmailOptional" value="<?php echo $order_detail_row[0]['address']?>">
                    </div>
                  </div>
                  <!-- End Input Group -->

                  <!-- Input Group -->
                  <!-- <div class="form-group">
                    <label for="inputGroupMergeGenderSelect" class="input-label">Gender</label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="tio-user-outlined"></i>
                        </span>
                      </div>
                      <select id="inputGroupMergeGenderSelect" class="custom-select">
                        <option>Choose a gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div> -->
                  <!-- End Input Group -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
    </div>
</div>

<!---->
  <div class="card-footer d-flex justify-content-end align-items-center">
  <a href="<?php echo $level.'pages/orders.php'?>">
    <button type="button" class="btn btn-white mr-2">Cancel</button></a>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>