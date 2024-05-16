<?php
if(!empty($_REQUEST['action']) && $_REQUEST['action']== 'search' && !empty($_POST))
{
  $_SESSION['type_filter'] = $_POST;
  
}
if(!empty($_SESSION['type_filter']))
{
  $where="";
  foreach($_SESSION['type_filter'] as $field => $value)
  {
    if(!empty($value))
    {
      switch($field)
      {
        case 'name': 
          $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
          case 'ID':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;

          case 'category_id':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
          
          case 'status':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
      }
    }
  }

  extract($_SESSION['type_filter']); 

  if(!empty($where))
  {
    $sql="select* from `product` where (".$where.")";
    $result = $db ->prepare($sql);
    $result ->execute();
    $dssp = $result -> fetchAll();
  }
  else 
  {
    $sql="select* from `product`";
  $result = $db ->prepare($sql);
  $result ->execute();
  $dssp = $result -> fetchAll();
  }
  
}

?>

<div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-md-4 mb-3 mb-md-0">
              </div>

              <div class="col-auto">
                <!-- Unfold -->
                <div class="hs-unfold mr-2">
                  <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;" data-hs-unfold-options='{
                      "target": "#datatableFilterSidebar",
                      "type": "css-animation",
                      "animationIn": "fadeInRight",
                      "animationOut": "fadeOutRight",
                      "hasOverlay": true,
                      "smartPositionOff": true
                     }'>
                    <i class="tio-filter-list mr-1"></i> Filters
                  </a>
                </div>
                <!-- End Unfold -->

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;" data-hs-unfold-options='{
                       "target": "#showHideDropdown",
                       "type": "css-animation"
                     }'>
                    <i class="tio-table mr-1"></i> Columns <span class="badge badge-soft-dark rounded-circle ml-1">6</span>
                  </a>

                  <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="mr-2">Product</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_product">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_product" checked="">
                            <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                          </label>
                          <!-- End Checkbox Switch -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="mr-2">Type</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_type">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_type" checked="">
                            <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                          </label>
                          <!-- End Checkbox Switch -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="mr-2">Vendor</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_vendor">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_vendor">
                            <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                          </label>
                          <!-- End Checkbox Switch -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="mr-2">Stocks</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_stocks">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_stocks" checked="">
                            <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                          </label>
                          <!-- End Checkbox Switch -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="mr-2">ID</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_sku">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_sku" checked="">
                            <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                          </label>
                          <!-- End Checkbox Switch -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="mr-2">Price</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_price">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_price" checked="">
                            <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                          </label>
                          <!-- End Checkbox Switch -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <span class="mr-2">Discount</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_quantity">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_quantity">
                            <span class="toggle-switch-label">
                              <span class="toggle-switch-indicator"></span>
                            </span>
                          </label>
                          <!-- End Checkbox Switch -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                          <span class="mr-2">Quantity</span>

                          <!-- Checkbox Switch -->
                          <label class="toggle-switch toggle-switch-sm" for="toggleColumn_variants">
                            <input type="checkbox" class="toggle-switch-input" id="toggleColumn_variants" checked="">
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
                <!-- End Unfold -->
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->
          <div class="card-header"style="display: flex; justify-content: space-between;">
                <form style="display: flex;" action="products.php?action=search" method="post">

                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" name="name" type="search" class="form-control" placeholder="Search " aria-label="Search users" value="<?=!empty($name)?$name:"" ;?>">
                    
                  </div>
                  <!-- End Search -->
                  <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" name="ID" type="search" class="form-control" placeholder="ID"  value="<?=!empty($ID)?$ID:""?>">
                    
                  </div>
                  <hr>
                  <!-- Select -->
                  <select class="custom-select" name ="category_id"style="margin-right: 2rem">
                    <option value="">Type</option>
                    <?php foreach ($dsloaisp as $parent)
                    {
                      echo'<option value="'.$parent['ID'].'">'.$parent['ID'].'</option>';
                    }
                    ?>
                    
                  </select>     
                  <!-- End Select -->
                  <!--stock-->
                  <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                  <select class="custom-select" name="status">
                      <option value="">Choose stock</option>
                      <option value="Stocking">Stocking</option>
                      <option value="Out of stock">Out of stock</option>
                      <option value="On backorder">On backorder</option>
                    </select>
                    
                  </div>
                  
                  <button type="submit" class="btn btn-outline-primary"><i class="tio-filter-list mr-1"></i></button>
                </form>
         
            <!-- End Row -->
          </div>

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 4, 9],
                        "width": "5%",
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 12,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Product</th>
                  <th>Type</th>
                  <th>Vendor</th>
                  <th>Stocks</th>
                  <th>ID</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Quantity</th>
                  <th>Actions</th>
                </tr>
              </thead>
             
              <tbody>
              <?php 
              foreach ($dssp as $product)
              { 
                if($product['deleted']==1)
                echo '
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="'.$product['ID'].'">
                      <label class="custom-control-label" for="'.$product['ID'].'"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="'.$level.'pages/product-details.php?id='.$product['ID'].'">
                      <img class="avatar avatar-lg mr-3" src="'.$level.'upload_img/'.$product['thumbnail'].'" alt="Image Description">
                      <div class="media-body">
                        <h5 class="text-hover-primary mb-0">'.$product['name'].'</h5>
                      </div>
                    </a>
                  </td>
                  <td>'.$product['category_id'].'</td>
                  <td>'.$product['vendor'].'</td>
                  <td>'.$product['status'].'</td>
                  <td>'.$product['ID'].'</td>
                  <td>$'.$product['price'].'</td>
                  <td>'.$product['discount'].'</td>
                  <td>'.$product['variants'].'</td>
                  <td>
                    <div class="btn-group" role="group">
                      <a class="btn btn-sm btn-white" href="'.$level.'pages/product-details.php?id='.$product['ID'].'">
                        <i class="tio-edit"></i>
                      </a>
                      <a class="btn btn-sm btn-white" href="'.$level.'pages/product-deleted.php?id='.$product['ID'].'">
                        <i class="tio-delete"></i>
                      </a>
                      
                     
                    </div>
                  </td>
                </tr>';
                ?>
                <?php
              }
                ?>

              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="12" selected="">12</option>
                    <option value="14">14</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
       