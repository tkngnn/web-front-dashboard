<div class="row gx-2 gx-lg-3">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Transactions</h5>

                <!-- Daterangepicker -->
                <button id="js-daterangepicker-predefined" class="btn btn-sm btn-ghost-secondary dropdown-toggle">
                  <i class="tio-date-range"></i>
                  <span class="js-daterangepicker-predefined-preview ml-1"></span>
                </button>
                <!-- End Daterangepicker -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Chart -->
                <div class="chartjs-custom mx-auto" style="height: 20rem;">
                  <canvas class="js-chart-datalabels" data-hs-chartjs-options='{
                            "type": "bubble",
                            "data": {
                              "datasets": [
                                {
                                  "label": "Label 1",
                                  "data": [
                                    {"x": 55, "y": 65, "r": 99}
                                  ],
                                  "color": "#fff",
                                  "backgroundColor": "rgba(55,125,255,.9)",
                                  "borderColor": "transparent"
                                },
                                {
                                  "label": "Label 2",
                                  "data": [
                                    {"x": 33, "y": 42, "r": 65}
                                  ],
                                  "color": "#fff",
                                  "backgroundColor": "rgba(100, 0, 214, 0.8)",
                                  "borderColor": "transparent"
                                },
                                {
                                  "label": "Label 3",
                                  "data": [
                                    {"x": 46, "y": 26, "r": 38}
                                  ],
                                  "color": "#fff",
                                  "backgroundColor": "#00c9db",
                                  "borderColor": "transparent"
                                }
                              ]
                            },
                            "options": {
                              "scales": {
                                "yAxes": [{
                                  "gridLines": {
                                    "display": false
                                  },
                                  "ticks": {
                                    "display": false,
                                    "max": 100,
                                    "beginAtZero": true
                                  }
                                }],
                                "xAxes": [{
                                "gridLines": {
                                    "display": false
                                  },
                                  "ticks": {
                                    "display": false,
                                    "max": 100,
                                    "beginAtZero": true
                                  }
                                }]
                              },
                              "tooltips": false
                            }
                          }'></canvas>
                </div>
                <!-- End Chart -->

                <!-- Legend Indicators -->
                <div class="row justify-content-center">
                  <div class="col-auto">
                    <span class="legend-indicator bg-primary"></span> New
                  </div>

                  <div class="col-auto">
                    <span class="legend-indicator" style="background-color: #7000f2;"></span> Pending
                  </div>

                  <div class="col-auto">
                    <span class="legend-indicator bg-info"></span> Failed
                  </div>
                </div>
                <!-- End Legend Indicators -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-6">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Reports overview</h5>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#reportsOverviewDropdown1",
                       "type": "css-animation"
                     }'>
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="reportsOverviewDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share reports
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
                <span class="h1 d-block mb-4">$7,431.14 USD</span>

                <!-- Progress -->
                <div class="progress rounded-pill mb-2">
                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Gross value"></div>
                  <div class="progress-bar opacity" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Net volume from sales"></div>
                  <div class="progress-bar opacity-xs" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="New volume from sales"></div>
                </div>

                <div class="d-flex justify-content-between mb-4">
                  <span>0%</span>
                  <span>100%</span>
                </div>
                <!-- End Progress -->

                <!-- Table -->
                <div class="table-responsive">
                  <table class="table table-lg table-nowrap card-table mb-0">
                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary"></span>Gross value
                      </th>
                      <td>$3,500.71</td>
                      <td>
                        <span class="badge badge-soft-success">+12.1%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity"></span>Net volume from sales
                      </th>
                      <td>$2,980.45</td>
                      <td>
                        <span class="badge badge-soft-warning">+6.9%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity-xs"></span>New volume from sales
                      </th>
                      <td>$950.00</td>
                      <td>
                        <span class="badge badge-soft-danger">-1.5%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator"></span>Other
                      </th>
                      <td>32</td>
                      <td>
                        <span class="badge badge-soft-success">1.9%</span>
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- End Table -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>