<div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <div class="row align-items-center flex-grow-1">
              <div class="col-sm mb-2 mb-sm-0">
                <h4 class="card-header-title">Sales <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></h4>
              </div>

              <div class="col-sm-auto">
                <!-- Select -->
                <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                          "minimumResultsForSearch": "Infinity",
                          "customClass": "custom-select custom-select-sm mb-2 mb-sm-0 mr-2",
                          "dropdownAutoWidth": true,
                          "width": true
                        }'>
                  <option value="">Online store</option>
                  <option value="in-store">In-store</option>
                </select>
                <!-- End Select -->

                <!-- Daterangepicker -->
                <button id="js-daterangepicker-predefined" class="btn btn-sm btn-white dropdown-toggle mb-2 mb-sm-0">
                  <i class="tio-date-range"></i>
                  <span class="js-daterangepicker-predefined-preview ml-1"></span>
                </button>
                <!-- End Daterangepicker -->
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-9 mb-5 mb-md-0">
                <!-- Bar Chart -->
                <div class="chartjs-custom mb-4">
                  <canvas class="js-chart" style="height: 18rem;" data-hs-chartjs-options='{
                            "type": "bar",
                            "data": {
                              "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM","11AM"],
                              "datasets": [{
                                "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220, 200, 300, 290, 350, 150, 350, 300, 100, 125, 220, 225],
                                "backgroundColor": "#377dff",
                                "hoverBackgroundColor": "#377dff",
                                "borderColor": "#377dff"
                              },
                              {
                                "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120, 150, 230, 382, 204, 169, 290, 300, 100, 300, 140],
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
                                    "padding": 10
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

                <!-- Legend Indicators -->
                <div class="row justify-content-center">
                  <div class="col-auto">
                    <span class="legend-indicator"></span> Revenue
                  </div>
                  <div class="col-auto">
                    <span class="legend-indicator bg-primary"></span> Orders
                  </div>
                </div>
                <!-- End Legend Indicators -->
              </div>

              <div class="col-md-3 column-divider-md">
                <div class="row">
                  <div class="col-sm-6 col-md-12">
                    <!-- Stats -->
                    <div class="d-flex justify-content-center flex-column" style="min-height: 10.5rem;">
                      <h6 class="card-subtitle">Revenue</h6>
                      <span class="d-block display-4 text-dark mb-1 mr-3">$97,458.20</span>
                      <span class="d-block text-success">
                        <i class="tio-trending-up mr-1"></i> $2,401.02 (3.7%)
                      </span>
                    </div>
                    <!-- End Stats -->

                    <div class="d-sm-none">
                      <hr class="my-0">
                    </div>

                    <div class="d-none d-md-block">
                      <hr class="my-0">
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-12">
                    <!-- Stats -->
                    <div class="d-flex justify-content-center flex-column" style="min-height: 10.5rem;">
                      <h6 class="card-subtitle">Orders</h6>
                      <span class="d-block display-4 text-dark mb-1 mr-3">67,893</span>
                      <span class="d-block text-danger">
                        <i class="tio-trending-down mr-1"></i> +3,301 (1.2%)
                      </span>
                    </div>
                    <!-- End Stats -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Body -->
        </div>