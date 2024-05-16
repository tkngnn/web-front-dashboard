<?php
$sql="select* from `category`";
$result = $db ->prepare($sql);
$result ->execute();
$dsloaisp = $result -> fetchAll();

$sql_max="SELECT MAX(`product`.`price`) FROM `product`";
$result_max=$db ->prepare($sql_max);
$result_max ->execute();
$price_max = $result_max -> fetchAll();
$sql_min="SELECT MIN(`product`.`price`) FROM `product` ";
$result_min=$db ->prepare($sql_min);
$result_min ->execute();
$price_min = $result_min -> fetchAll();
echo ($price_max);


$sql="select* from `product`";
$result = $db ->prepare($sql);
$result ->execute();
$dsloaisp = $result -> fetchAll();
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


<div id="datatableFilterSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card sidebar-footer-fixed">
        <div class="card-header">
          <h4 class="card-header-title">Filters</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
                "target": "#datatableFilterSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
<form action="products.php?action=search" method="post">
          <small class="text-cap mb-3">ID</small>

          <!-- Input Group -->
          <div class="input-group input-group-merge mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="tio-search"></i>
              </span>
            </div>

            <input type="search" class="form-control" placeholder="Search for ID" name="ID">
          </div>

          <hr class="my-4">

          <small class="text-cap mb-3">Name</small>

          <!-- Input Group -->
          <div class="input-group input-group-merge mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="tio-search"></i>
              </span>
            </div>

            <input type="search" class="form-control" placeholder="Search for Name" name="name">
          </div>

          <hr class="my-4">
          <small class="text-cap mb-3">Product type</small>

          <!-- Custom Checkbox -->
          <select class="custom-select" name ="category_id"style="margin-right: 2rem">
            <option value="">Parent_id</option>
              <?php foreach ($dsloaisp as $parent)
              {
                if($parent['deleted']==1)
                echo'<option value="'.$parent['ID'].'">'.$parent['ID'].'</option>';
              }
              ?>
                    
                  </select>
                  
          <!-- End Custom Checkbox -->

          <hr class="my-4">

          <small class="text-cap mb-3">Stock</small>
          <div class="form-group">
            <select class="custom-select" name="status">
              <option selected="">Choose stock</option>
              <option value="Stocking">Stocking</option>
              <option value="Out of stock">Out of stock</option>
              <option value="On backorder">On backorder</option>
            </select>
          </div>
          
          <hr class="my-4">

          <small class="text-cap mb-3">Price</small>
          <div class="form-group">
            <label class="input-label">Range input</label>
            <input type="range" class="custom-range" value="3" min="0" max="10" name="price">
          </div>

          <hr class="my-4">

          <!-- End Input Group -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="card-footer sidebar-footer">
          <div class="row gx-2">
            <div class="col">
              <button type="button" class="btn btn-block btn-white">Clear all filters</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-block btn-primary">Save</button>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
</form>