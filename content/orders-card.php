
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
        case 'ID':
          $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
        break;

        case 'customer': 
          $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
          

          case 'payment_method':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
          
          case 'status':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;

          case 'order_date':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
      }
    }
  }

  extract($_SESSION['type_filter']); 

  if(!empty($where))
  {
    $sql="select* from `order_hd` where (".$where.")";
    $result = $db ->prepare($sql);
    $result->execute();
    $dsorder = $result -> fetchAll();
  }
  else 
  {
    $sql="select* from `order_hd`";
    $result = $db ->prepare($sql);
    $result->execute();
    $dsorder = $result -> fetchAll();
  }
 
}

?>
<div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-lg-6 mb-3 mb-lg-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders" aria-label="Search orders">
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-lg-6">
                <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->

                   <!-- Unfold -->
                   <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersFilterDropdown",
                         "type": "css-animation",
                         "smartPositionOff": true
                       }'>
                      <i class="tio-filter-list mr-1"></i> Filter <span class="badge badge-soft-dark rounded-circle ml-1"></span>
                    </a>

                    <div id="usersFilterDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right dropdown-card card-dropdown-filter-centered" style="min-width: 22rem;">
                      <!-- Card -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-header-title">Filter Orders</h5>

                          <!-- Toggle Button -->
                          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary ml-2" href="" data-hs-unfold-options='{
                              "target": "#usersFilterDropdown",
                              "type": "css-animation",
                              "smartPositionOff": true
                             }'>
                            <i class="tio-clear tio-lg"></i>
                          </a>
                          <!-- End Toggle Button -->
                        </div>

                        <div class="card-body">
                          <form action="orders.php?action=search" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <small class="text-cap mb-2">Order ID</small>

                              <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tio-search"></i>
                                  </div>
                                </div>
                                <input id="datatableSearch" name="ID" type="search" class="form-control" placeholder="Search " aria-label="Search ID" value="<?=!empty($ID)?$ID:"" ;?>">                              
                              </div>
                              <br>
                              <small class="text-cap mb-2">Customer</small>

                              <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tio-search"></i>
                                  </div>
                                </div>
                                <input id="datatableSearch" name="customer" type="search" class="form-control" placeholder="Search " aria-label="Search ID" value="<?=!empty($customer)?$customer:"" ;?>">                              
                              </div>

                              <!-- End Row -->
                            </div>

                            <div class="form-row">
                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Payment</small>

                                <!-- Select -->
                                <select class="custom-select" name ="payment_method"style="margin-right: 2rem">
                                  <option value="">Any</option>
                                  <option value="Cash">Cash</option>
                                  <option value="Card">Card</option>
                                  <option value="Momo">Momo</option>
                                  <option value="VNpay">VNpay</option>
                                  <option value="Zalopay">Zalopay</option>
                                </select>
                                <!-- End Select -->
                              </div>

                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Status</small>

                                <!-- Select -->
                                <select name="status" class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;" data-target-column-index="4" data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                                  <option value="">Any status</option>
                                  <option value="Delivering" data-option-template='<span class="legend-indicator bg-success"></span>Delivering'>Delivering</option>
                                  <option value="Delivered" data-option-template='<span class="legend-indicator bg-primary"></span>Delivered'>Delivered</option>
                                  <option value="Pending" data-option-template='<span class="legend-indicator bg-warning"></span>Pending'>Pending</option>
                                  <option value="Cancel" data-option-template='<span class="legend-indicator bg-danger"></span>Cancel'>Cancel</option>
                                </select>
                                <!-- End Select -->
                              </div>

                              <!-- <div class="col-12 form-group">
                                <small class="text-cap mb-2">Location</small>
                              </div> -->
                            </div>
                            <!-- End Row -->

                            <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tio-agenda-view-outlined"></i>
                                  </div>
                                </div>
                                <input id="datatableSearch" name="order_date" type="date" class="form-control"  value="">                              
                              </div>
                              <small class="text-cap mb-2"></small>
                              <br>

                            <button type="submit" class="js-hs-unfold-invoker btn btn-block btn-primary">Apply</button>
                            <!-- <a class="js-hs-unfold-invoker btn btn-block btn-primary" href="javascript:;" data-hs-unfold-options='{
                                "target": "#usersFilterDropdown",
                                "type": "css-animation",
                                "smartPositionOff": true
                               }'>Apply</a> -->
                          </form>
                        </div>
                      </div>
                      <!-- End Card -->
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#showHideDropdown",
                         "type": "css-animation"
                       }'>
                      <i class="tio-table mr-1"></i> Columns <span class="badge badge-soft-dark rounded-circle ml-1">7</span>
                    </a>

                    <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                      <div class="card card-sm">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="mr-2">Order</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_order">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_order" checked="">
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="mr-2">Date</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_date">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_date" checked="">
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="mr-2">Customer</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_customer">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_customer" checked="">
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="mr-2">Payment status</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_payment_status">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_payment_status" checked="">
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="mr-2">Information</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_fulfillment_status">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_fulfillment_status">
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="mr-2">Payment_method</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_payment_method">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_payment_method" checked="">
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="mr-2">Total</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_total">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_total" checked="">
                              <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                            </label>
                            <!-- End Checkbox Switch -->
                          </div>

                          <div class="d-flex justify-content-between align-items-center">
                            <span class="mr-2">Actions</span>

                            <!-- Checkbox Switch -->
                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_actions">
                              <input type="checkbox" class="toggle-switch-input" id="toggleColumn_actions" checked="">
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
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0],
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
                  <th class="table-column-pl-0">Order</th>
                  <th>Date</th>
                  <th>Customer</th>
                  <th>Payment status</th>
                  <th>Information</th>
                  <th>Payment method</th>
                  <th>Total</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
              <?php 
              foreach ($dsorder as $order)
              { if($order['deleted']==1)
                {
              
                $color='';
                if($order['status'] == "Pending")
                {
                  $color= 'warning';
                }
                if($order['status'] == "Delivered")
                {
                  $color= 'primary';
                }
                if($order['status'] == "Delivering")
                {
                  $color= 'success';
                }
                if($order['status'] == "Cancel")
                {
                  $color= 'danger';
                }

                $img='';
                if($order['payment_method']== "Cash")
                {
                  $img=$level."assets/svg/brands/cash.svg";
                }
                if($order['payment_method']== "Card")
                {
                  $img=$level."assets/svg/brands/credit-card.svg";
                }
                if($order['payment_method']== "Momo")
                {
                  $img=$level."assets/svg/brands/momo.svg";
                }
                if($order['payment_method']== "VNpay")
                {
                  $img=$level."assets/svg/brands/vnpay.png";
                }
                if($order['payment_method']== "Zalopay")
                {
                  $img=$level."assets/svg/brands/zalopay.png";
                }
                
                
                
                echo '
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="'.$order['ID'].'">
                      <label class="custom-control-label" for="'.$order['ID'].'"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a href="'.$level.'pages/order-details.php?id='.$order['ID'].'">'.$order['ID'].'</a>
                  </td>
                  <td>'.$order['order_date'].'</td>
                  <td>
                    <a class="text-body" href="#">'.$order['customer'].'</a>
                  </td>
                  <td>
                    <span class="badge badge-soft-'.$color.'">
                      <span class="legend-indicator bg-'.$color.'"></span>'.$order['status'].'
                    </span>
                  </td>
                  <td>
                  <span>Phone: '.$order['phone'].'</span></br>
                  <span>'.$order['address'].'</span>
                  
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img class="avatar avatar-xss avatar-4by3 mr-2" src="'.$img.'" alt="Image Description">
                      <span class="text-dark">&bull;&bull;&bull;&bull; '.$order['payment_method'].'</span>
                    </div>
                  </td>
                  <td>$'.$order['total_money'].'</td>
                  <td>
                    <div class="btn-group" role="group">
                      <a class="btn btn-sm btn-white" href="'.$level.'pages/order-details.php?id='.$order['ID'].'">
                        <i class="tio-visible-outlined"></i>
                      </a>
                      <a class="btn btn-sm btn-white" href="'.$level.'pages/order-deleted.php?id='.$order['ID'].'">
                        <i class="tio-delete"></i> 
                      </a>
                      
                    </div>
                  </td>
                </tr>';
                ?>
                <?php
                }
              }
                ?>
                    <!-- <span class="badge badge-soft-'.$order['span-ful'].'">
                      <span class="legend-indicator bg-'.$order['span-ful'].'"></span>'.$order['ful-text'].'
                    </span> -->
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