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
        case 'user_name': 
          $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
          case 'ID':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;

          case 'manager_id':
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
    $sql="select* from `user` where (".$where.")";
    $result = $db ->prepare($sql);
    $result ->execute();
    $dsuser = $result -> fetchAll();
  }
  else 
  {
    $sql="select* from `user`";
  $result = $db ->prepare($sql);
  $result ->execute();
  $dsuser = $result -> fetchAll();
  }
  
}

?>


<div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-sm-6">
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
                  <div class="hs-unfold mr-2">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                      <i class="tio-download-to mr-1"></i> Export
                    </a>

                    <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                      <span class="dropdown-header">Options</span>
                      <a id="export-copy" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\illustrations\copy.svg" alt="Image Description">
                        Copy
                      </a>
                      <a id="export-print" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\illustrations\print.svg" alt="Image Description">
                        Print
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Download options</span>
                      <a id="export-excel" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\brands\excel.svg" alt="Image Description">
                        Excel
                      </a>
                      <a id="export-csv" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\components\placeholder-csv-format.svg" alt="Image Description">
                        .CSV
                      </a>
                      <a id="export-pdf" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\brands\pdf.svg" alt="Image Description">
                        PDF
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersFilterDropdown",
                         "type": "css-animation",
                         "smartPositionOff": true
                       }'>
                      <i class="tio-filter-list mr-1"></i> Filter <span class="badge badge-soft-dark rounded-circle ml-1">2</span>
                    </a>

                    <div id="usersFilterDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right dropdown-card card-dropdown-filter-centered" style="min-width: 22rem;">
                      <!-- Card -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-header-title">Filter users</h5>

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
                          <form action="users.php?action=search" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <small class="text-cap mb-2">ID</small>

                              <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tio-search"></i>
                                  </div>
                                </div>
                                <input id="datatableSearch" name="ID" type="search" class="form-control" placeholder="Search " aria-label="Search ID" value="<?=!empty($ID)?$ID:"" ;?>">                              
                              </div>
                              <small class="text-cap mb-2">UserName</small>

                              <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="tio-search"></i>
                                  </div>
                                </div>
                                <input id="datatableSearch" name="user_name" type="search" class="form-control" placeholder="Search " aria-label="Search ID" value="<?=!empty($user_name)?$user_name:"" ;?>">                              
                              </div>

                              <!-- End Row -->
                            </div>

                            <div class="form-row">
                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Manager</small>

                                <!-- Select -->
                                <select class="custom-select" name ="manager_id"style="margin-right: 2rem">
                                  <option value="">Any</option>
                                  <?php foreach ($dsadmin as $admin)
                                  {
                                    echo'<option value="'.$admin['ID'].'">'.$admin['ID'].'</option>';
                                  }
                                  ?>
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
                                  <option value="Active" data-option-template='<span class="legend-indicator bg-success"></span>Active'>Active</option>
                                  <option value="Pending" data-option-template='<span class="legend-indicator bg-warning"></span>Pending'>Pending</option>
                                  <option value="Disabled" data-option-template='<span class="legend-indicator bg-danger"></span>Suspended'>Disabled</option>
                                </select>
                                <!-- End Select -->
                              </div>

                              <!-- <div class="col-12 form-group">
                                <small class="text-cap mb-2">Location</small>
                              </div> -->
                            </div>
                            <!-- End Row -->

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
                </div>
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 7],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 15,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Name</th>
                  <th>User_name</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>ID</th>
                  <th>Role</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
              <?php 
              foreach ($dsuser as $user)
              { 
                if($user['deleted']==1)
                {
                    $color='';

                    if($user['status'] == "Active")
                    {
                      $color= 'success';
                    }
                    
                    if($user['status'] == "Disabled")
                    {
                      $color= 'danger';
                    }
                
                
                echo '
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="'.$user['ID'].'">
                      <label class="custom-control-label" for="'.$user['ID'].'"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="'.$level.'pages/users-detail-user.php?id='.$user['ID'].'">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="'.$level.'upload_img/'.$user['user_avatar'].'" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">'.$user['fullname'].'<i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">'.$user['email'].'</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">'.$user['user_name'].'</span>
                    <span class="d-block font-size-sm">'.$user['pass'].'</span>
                  </td>
                  <td>'.$user['address'].' <span class="text-hide">Code: GB</span></td>
                  <td>
                    <span class="legend-indicator bg-'.$color.'"></span>'.$user['status'].'
                  </td>
                  <td>'.$user['ID'].'</td>
                  <td>'.$user['manager_id'].'</td>
                  <td>
                  <div class="btn-group" role="group">
                  <a class="btn btn-sm btn-white" href="'.$level.'pages/users-detail-user.php?id='.$user['ID'].'">
                    <i class="tio-edit"></i>
                  </a>
                  <a class="btn btn-sm btn-white" href="'.$level.'pages/users-deleted-user.php?id='.$user['ID'].'">
                    <i class="tio-delete"></i>
                  </a>
                </div>
                  </td>
                </tr>';}
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
                    <option value="10">10</option>
                    <option value="15" selected="">15</option>
                    <option value="20">20</option>
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