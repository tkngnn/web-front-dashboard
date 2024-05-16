<form action="<?php echo $level.'component/delete-pro.php'?>" method="post" enctype="multipart/form-data" >
    <input type="text" name="anhdaidien" id="" value="<?php echo $sp_detail_row[0]['thumbnail']?>" hidden="true" >
    <div class="row">
        <div class="col-lg-8">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">Product information</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <!-- Form Group -->
                    <div class="form-group">
                    <label for="productNameLabel" class="input-label">Name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>

                    <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="Shirt, t-shirts, etc." aria-label="Shirt, t-shirts, etc." value="<?php echo $sp_detail_row[0]['name']?>">
                    </div>
                    <!-- End Form Group -->

                    <div class="row">
                    <div class="col-sm-6">
                        <!-- Form Group -->
                    <div class="form-group">
                        <label for="SKULabel" class="input-label">SKU</label>

                        <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="eg. 348121032" aria-label="eg. 348121032" value="<?php echo $sp_detail_row[0]['ID']?>">
                    </div>
                    <!-- End Form Group -->
                    </div>

                    <div class="col-sm-6">
                        <!-- Form Group -->
                        <div class="form-group">
                        <label for="weightLabel" class="input-label">Type</label>
        
                        <div class="input-group input-group-merge">
                        <select name="category" id="weightLabel" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
                            <?php foreach($danhsachloaisp_detail_row as $loaisp)
                            {
                                echo ' <option value="">Type</option>';
                            echo($loaisp['ID']);
                            ?>
                            <option value="<?php echo $loaisp['ID'];?>"
                            <?php 
                            if($loaisp['ID'] == $sp_detail_row[0]['category_id'])
                                echo "selected='selected'";?>>
                            <?php echo $loaisp['name'];?>
                            </option>
                            <?php } ?>
                        
                        </select>
                        </div>
                        
                        </div>
                        <!-- End Form Group -->
                    </div>
                    </div>
                    <!-- End Row -->
                    
                    <label class="input-label">Description <span class="input-label-secondary">(Optional)</span></label>

                    <!-- Quill -->
                    <div class="quill-custom">
                    <textarea name="description" id="" cols="30" rows="10" style="min-height: 15rem; width: 100%;" value="<?php echo $sp_detail_row[0]['description']?>"><?php echo $sp_detail_row[0]['description']?></textarea>
                    </div>
                    <!-- End Quill -->
                </div>
                <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">Media</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body" >
                    <img src="<?php echo($level.'upload_img/'.$sp_detail_row[0]['thumbnail'])?>" id="image" width="200" >
                    
                    <input type="file" name="myfile" id="imageFile" onchange="chooseFile(this)"
                    data-hs-file-attach-options='{
                                  "textTarget": "#avatarProjectSettingsImg",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "resetTarget": ".js-file-attach-reset-img",
                                  "resetImg": "<?php echo($level);?>assets/img/160x160/img2.jpg",
                                  "allowTypes": [".png", ".jpeg", ".jpg"]
                              }'>

                </div>
                <script>
                    function chooseFile(fileInput)
                    {
                        if(fileInput.files && fileInput.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function (e)
                            {
                                $('#image').attr('src',e.target.result);
                            }
                            reader.readAsDataURL(fileInput.files[0]);
                        }
                    }
                </script>
                <!-- Body -->
                </div>
                <!-- End Card -->
        </div>

        <div class="col-lg-4">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">Pricing</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <!-- Form Group -->
                    <div class="form-group">
                    <label for="priceNameLabel" class="input-label">Price</label>
    
                    <div class="input-group">
                        <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="0.00" aria-label="0.00" value="<?php echo $sp_detail_row[0]['price']?>">
                    </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                    <label for="priceNameLabel" class="input-label">Discount</label>
    
                    <div class="input-group">
                        <input type="text" class="form-control" name="discount" id="priceNameLabel" value="<?php echo $sp_detail_row[0]['discount']?>">
                    </div>
                    </div>
                    <!-- End Form Group -->

                    
                    <hr class="my-4">

                    <!-- Toggle Switch -->
                    <!-- Form Group -->
                    <div class="form-group">
                    <label for="status" class="input-label">Status</label>
    
                    <div class="input-group">
                        <select name="status" id="status" style="width: 100%; border: 0.0625rem solid #e7eaf3; height:40px;">
                            <option value="<?php echo $sp_detail_row[0]['status']?>"><?php echo $sp_detail_row[0]['status']?></option>
                            <option value="Stocking">Stocking</option>
                            <option value="Out of stock">Out of stock</option>
                            <option value="On backorder">On backorder</option>
                           
                        </select>
                    </div>
                    <!-- End Toggle Switch -->
                </div>
                <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">Organization</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <!-- Form Group -->
                    <div class="form-group">
                    <label for="vendorLabel" class="input-label">Vendor</label>

                    <input type="text" class="form-control" name="vendor" id="vendorLabel" placeholder="eg. Nike" aria-label="eg. Nike" value="<?php echo $sp_detail_row[0]['vendor']?>">
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="form-group">
                    <label for="vendorLabel" class="input-label">Quantity</label>

                    <input type="text" class="form-control" name="quantity" id="vendorLabel" placeholder="10" aria-label="" value="<?php echo $sp_detail_row[0]['variants']?>">
                    </div>
                    <!-- End Form Group -->
                    
                
                    <!-- Form Group -->
                    <div class="form-group">
                    <label for="collectionsLabel" class="input-label">Date</label>

                    <input type="date" class="form-control" name="date" id="vendorLabel" placeholder="10" aria-label="" value="<?php echo $sp_detail_row[0]['created_at']?>">

                    </div>
                    
                </div>
                <!-- End Body -->
                </div>
                <!-- End Card -->
        </div>
        
        
        <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem;">
            <!-- Card -->
            <div class="card card-sm bg-dark border-dark mx-2">
                <div class="card-body">
                <div class="row justify-content-center justify-content-sm-between">
                    <div class="col">
                    
                    <button type="submit" class="btn btn-ghost-danger">Delete</button>
                    </div>
                    <div class="col-auto">
                    <a href="<?php echo $level.'pages/products.php'?>">
                    <button type="button" class="btn btn-ghost-light mr-2">Cancel</button></a>
            
                    </div>
                </div>
                <!-- End Row -->
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</form>