<div class="row gx-2 gx-lg-3">
          <div class="col-lg-5 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Import data into Front Dashboard</h5>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#reportsOverviewDropdown2",
                       "type": "css-animation"
                     }'>
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="reportsOverviewDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share chart
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-download-to dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <p>See and talk to your users and leads immediately by importing your data into the Front Dashboard platform.</p>

                <ul class="list-group list-group-flush list-group-no-gutters">
                  <li class="list-group-item py-3">
                    <h5 class="modal-title">Import users from:</h5>
                  </li>

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="<?php echo($level);?>assets\svg\brands\capsule.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Capsule</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="<?php echo($level);?>assets\svg\brands\mailchimp.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Mailchimp</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="<?php echo($level);?>assets\svg\brands\google-webdev.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Webdev</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <li class="list-group-item"><small>Or you can <a href="#">sync data to Front Dashboard</a> to ensure your data is always up-to-date.</small></li>
                </ul>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-7 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Monthly expenses</h5>

                <!-- Nav -->
                <ul class="nav nav-segment" id="expensesTab" role="tablist">
                  <li class="nav-item" data-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link active" href="javascript:;" data-toggle="tab">This week</a>
                  </li>
                  <li class="nav-item" data-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link" href="javascript:;" data-toggle="tab">Last week</a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex align-items-center">
                      <span class="h1 mb-0">35%</span>
                      <span class="text-success ml-2">
                        <i class="tio-trending-up"></i> 25.3%
                      </span>
                    </div>
                  </div>

                  <div class="col-sm-auto align-self-sm-end">
                    <!-- Legend Indicators -->
                    <div class="row font-size-sm">
                      <div class="col-auto">
                        <span class="legend-indicator bg-primary"></span> New
                      </div>
                      <div class="col-auto">
                        <span class="legend-indicator"></span> Overdue
                      </div>
                    </div>
                    <!-- End Legend Indicators -->
                  </div>
                </div>
                <!-- End Row -->

                <!-- Bar Chart -->
                <div class="chartjs-custom">
                  <canvas id="updatingData" style="height: 20rem;" data-hs-chartjs-options='{
                            "type": "bar",
                            "data": {
                              "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                              "datasets": [{
                                "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                                "backgroundColor": "#377dff",
                                "hoverBackgroundColor": "#377dff",
                                "borderColor": "#377dff"
                              },
                              {
                                "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                                "backgroundColor": "#e7eaf3",
                                "borderColor": "#e7eaf3"
                              }]
                            },
                            "options": {
                              "scales": {
                                "yAxes": [{
                                  "gridLines": {
                                    "color": "#e7eaf3",
                                    "drawBorder": false,
                                    "zeroLineColor": "#e7eaf3"
                                  },
                                  "ticks": {
                                    "beginAtZero": true,
                                    "stepSize": 100,
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 10,
                                    "postfix": "$"
                                  }
                                }],
                                "xAxes": [{
                                  "gridLines": {
                                    "display": false,
                                    "drawBorder": false
                                  },
                                  "ticks": {
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 5
                                  },
                                  "categoryPercentage": 0.5,
                                  "maxBarThickness": "10"
                                }]
                              },
                              "cornerRadius": 2,
                              "tooltips": {
                                "prefix": "$",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'></canvas>
                </div>
                <!-- End Bar Chart -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>