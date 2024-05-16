<div class="page-header d-print-none">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?php echo($level);?>pages/orders.php">Orders</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order details</li>
                </ol>
              </nav>
              
              <div class="d-sm-flex align-items-sm-center">
                <h1 class="page-header-title">Order <?php echo $order_detail_row[0]['order_id']?></h1>
                <span class="ml-2 ml-sm-3">
                  <i class="tio-date-range"></i> <?php echo $order_detail_row[0]['order_date']?>
                </span>
              </div>

              <div class="mt-2">
                <a class="text-body mr-3" href="javascript:;" onclick="window.print(); return false;">
                  <i class="tio-print mr-1"></i> Print order
                </a>
                
                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker text-body" href="javascript:;" data-hs-unfold-options='{
                       "target": "#moreOptionsDropdown",
                       "type": "css-animation"
                     }'>
                    More options <i class="tio-chevron-down"></i>
                  </a>

                  <div id="moreOptionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                    <a class="dropdown-item" href="#">
                      <i class="tio-copy dropdown-item-icon"></i> Duplicate
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-clear dropdown-item-icon"></i> Cancel order
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-archive dropdown-item-icon"></i> Archive
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-visible dropdown-item-icon"></i> View order status page
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-edit dropdown-item-icon"></i> Edit order
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous order">
                <i class="tio-arrow-backward"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next order">
                <i class="tio-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>