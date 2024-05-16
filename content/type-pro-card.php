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
          case 'name':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;

          case 'parent_id':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
      }
    }
  }
  extract($_SESSION['type_filter']); 

  if(!empty($where))
  {
    $sql="select* from `category` where (".$where.")";
    $result = $db ->prepare($sql);
    $result ->execute();
    $dsloaisp = $result -> fetchAll();
  }
  else 
  {
    $sql="select* from `category`";
  $result = $db ->prepare($sql);
  $result ->execute();
  $dsloaisp = $result -> fetchAll();
  }
  
}

?>

<div class="card">
          <!-- Header type-pro.php?action=search-->
          <div class="card-header"style="display: flex; justify-content: space-between;">
                <form style="display: flex;" action="../pages/type-pro.php?action=search" method="post">

                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" name="ID" type="search" class="form-control" placeholder="Search ID" aria-label="Search users" value="<?=!empty($ID)?$ID:"" ;?>">
                    
                  </div>
                  <!-- End Search -->
                  <div class="input-group input-group-merge input-group-flush" style="margin-right: 2rem">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" name="name" type="search" class="form-control" placeholder="Name" aria-label="Search users" value="<?=!empty($name)?$name:""?>">
                    
                  </div>
                  <hr>
                  <!-- Select -->
                  <select class="custom-select" name ="parent_id"style="margin-right: 2rem">
                    <option value="">Parent_id</option>
                    <?php foreach ($dsloaisp_parent as $parent)
                    {
                      if($parent['deleted']==1)
                      echo'<option value="'.$parent['ID'].'">'.$parent['ID'].'</option>';
                    }
                    ?>
                    
                  </select>
                  
                  <!-- End Select -->
                  <button type="submit" class="btn btn-outline-primary"><i class="tio-filter-list mr-1"></i></button>
                </form>
         
            <!-- End Row -->
          </div>
          <!-- End Header -->

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
                  <th class="table-column-pl-0">ID Type</th>
                  <th>Name</th>
                  <th>Parent_id</th>
                  <th>Actions</th>
                  <!-- <th>Stocks</th>
                  <th>SKU</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Variants</th> -->
                  
                  <!-- <td>
                    <label class="toggle-switch toggle-switch-sm" for="'.$product['id-stock'].'">
                      <input type="checkbox" class="toggle-switch-input" id="'.$product['id-stock'].'" '.$product['stock'].'="">
                      <span class="toggle-switch-label">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </label>
                  </td>
                  <td>'.$product['SKU'].'</td>
                  <td>'.$product['price'].'</td>
                  <td>2</td>
                  <td>'.$product['variants'].'</td>
                   -->
                </tr>
              </thead>
             
              <tbody>
              <?php 
              foreach ($dsloaisp as $product)
              {
                if($product['deleted'] ==1) 
                {
                 
                 echo '
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="'.$product['ID'].'">
                      <label class="custom-control-label" for="'.$product['ID'].'"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="'.$level.'pages/type-pro-detail.php?id='.$product['ID'].'">
                      <img class="avatar avatar-lg mr-3" src="'.$level.'upload_img/'.$product['category_img'].'" alt="Image Description">
                      <div class="media-body">
                        <h5 class="text-hover-primary mb-0">'.$product['ID'].'</h5>
                      </div>
                    </a>
                  </td>
                  <td>'.$product['name'].'</td>
                  <td>'.$product['parent_id'].'</td>
                  
                  <td>
                    <div class="btn-group" role="group">
                      <a class="btn btn-sm btn-white" href="'.$level.'pages/type-pro-detail.php?id='.$product['ID'].'">
                        <i class="tio-edit"></i>
                      </a>
                      <a class="btn btn-sm btn-white" href="'.$level.'pages/type-pro-deleted.php?id='.$product['ID'].'">
                        <i class="tio-delete"></i>
                      </a>
                    </div>
                  </td>
                </tr>';
                }
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

      