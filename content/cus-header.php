<div class="page-header">
          <div class="row align-items-center mb-3">
            <div class="col-sm mb-2 mb-sm-0">
              <h1 class="page-header-title">Customers <span class="badge badge-soft-dark ml-2">97,524</span></h1>

              <div class="mt-2">
                <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#importCustomersModal">
                  <i class="tio-publish mr-1"></i> Import customers
                </a>
                <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#exportCustomersModal">
                  <i class="tio-download-to mr-1"></i> Export
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
                      <i class="tio-copy dropdown-item-icon"></i> Manage duplicates
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-edit dropdown-item-icon"></i> Edit users
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-restore dropdown-item-icon"></i> Restore clients
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="<?php echo($level);?>pages/customers-add.php">Add customers</a>
            </div>
          </div>
          <!-- End Row -->

          <!-- Nav Scroller -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-right"></i>
              </a>
            </span>

            <!-- Nav -->
            <ul class="nav nav-tabs page-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">New</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Returning</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Abandoned checkouts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Email subscribers</a>
              </li>
            </ul>
            <!-- End Nav -->
          </div>
          <!-- End Nav Scroller -->
        </div>