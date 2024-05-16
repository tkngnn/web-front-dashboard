<div class="col-lg-4">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Body -->
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <h5>Contact info</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <ul class="list-unstyled list-unstyled-py-2">
                  <li>
                    <i class="tio-online mr-2"></i>
                    anne@example.com
                  </li>
                  <li>
                    <i class="tio-android-phone-vs mr-2"></i>
                    +1 (609) 972-22-22
                  </li>
                </ul>

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                  <h5>Shipping address</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <!-- Leaflet (Map) -->
                <div id="map" class="leaflet-custom rounded mt-1 mb-3" style="min-height: 10rem;" data-hs-leaflet-options='{
                       "map": {
                         "scrollWheelZoom": false,
                         "coords": [37.4040344, -122.0289704]
                       },
                       "marker": [
                         {
                           "coords": [37.4040344, -122.0289704],
                           "icon": {
                             "iconUrl": "<?php echo($level);?>assets/svg/components/star-muted.svg",
                             "iconSize": [50, 45]
                           },
                           "popup": {
                             "text": "153 Williamson Plaza, Maggieberg"
                           }
                         }
                       ]
                      }'></div>
                <!-- End Leaflet (Map) -->

                <span class="d-block">
                  45 Roker Terrace<br>
                  Latheronwheel<br>
                  KW5 8NW, London<br>
                  UK <img class="avatar avatar-xss avatar-circle ml-1" src="<?php echo($level);?>assets\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                </span>

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                  <h5>Billing address</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <span class="d-block">
                  45 Roker Terrace<br>
                  Latheronwheel<br>
                  KW5 8NW, London<br>
                  UK <img class="avatar avatar-xss avatar-circle ml-1" src="<?php echo($level);?>assets\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                </span>
                
                <div class="mt-3">
                  <h5 class="mb-0">Mastercard</h5>
                  <span class="d-block">Card Number: ************4291</span>
                </div>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h5>Email marketing</h5>
                <a class="link" href="javascript:;">Edit status</a>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <span class="h3">
                  <span class="badge badge-soft-dark badge-pill">Subscribed</span>
                </span>
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Website activity</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <p>Website activity shows you how many times a contact has visited your site and viewed your pages.</p>
                
                <!-- Bar Chart -->
                <div class="chartjs-custom my-5" style="height: 12rem;">
                  <canvas class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5"],
                               "datasets": [{
                                "data": [10, 9, 14, 5, 10],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              },
                              {
                                "data": [15, 13, 18, 7, 26],
                                "backgroundColor": "transparent",
                                "borderColor": "#e7eaf3",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
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
                                      "stepSize": 10,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10
                                    }
                                  }],
                                  "xAxes": [{
                                    "display": false
                                  }]
                              },
                              "tooltips": {
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                  </canvas>
                </div>
                <!-- End Bar Chart -->

                <!-- Legend Indicators -->
                <div class="row justify-content-center">
                  <div class="col-auto">
                    <span class="legend-indicator"></span> Yesterday
                  </div>
                  <div class="col-auto">
                    <span class="legend-indicator bg-primary"></span> Today
                  </div>
                </div>
                <!-- End Legend Indicators -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->
          </div>