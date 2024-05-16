<div class="page-header">
          <div class="row align-items-center mb-3">
            <div class="col-sm">
              <h1 class="page-header-title">Orders <span class="badge badge-soft-dark ml-2">106,905</span></h1>

              <div class="mt-2">
                <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#exportOrdersModal">
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
                    <a class="dropdown-item" href="<?php echo($level);?>pages/order-add.php">
                      <i class="tio-folder-add dropdown-item-icon"></i> New order
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-folder dropdown-item-icon"></i> New order - Development
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-folder dropdown-item-icon"></i> New order - Staging
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
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
                <a class="nav-link active" href="#">All products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Open</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unfulfilled</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unpaid</a>
              </li>
            </ul>
            <!-- End Nav -->
          </div>
          <!-- End Nav Scroller -->
        </div>