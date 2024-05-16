<div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-12 col-md">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="card-header-title">Users</h5>

                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" style="display: none;">
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
                </div>
              </div>

              <div class="col-auto">
                <!-- Filter -->
                <div class="row align-items-sm-center">
                  <div class="col-sm-auto">
                    <div class="d-flex align-items-center mr-2">
                      <span class="text-secondary mr-2">Status:</span>

                      <!-- Select -->
                      <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0;" data-target-column-index="2" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                        <option value="">All</option>
                        <option value="successful">Successful</option>
                        <option value="overdue">Overdue</option>
                        <option value="pending">Pending</option>
                      </select>
                      <!-- End Select -->
                    </div>
                  </div>

                  <div class="col-sm-auto">
                    <div class="d-flex align-items-center mr-2">
                      <span class="text-secondary mr-2">Signed up:</span>

                      <!-- Select -->
                      <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0;" data-target-column-index="5" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                        <option value="">All</option>
                        <option value="1 year ago">1 year ago</option>
                        <option value="6 months ago">6 months ago</option>
                      </select>
                      <!-- End Select -->
                    </div>
                  </div>

                  <div class="col-md">
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
                </div>
                <!-- End Filter -->
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 4],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
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
                  <th class="table-column-pl-0">Full name</th>
                  <th>Status</th>
                  <th>Type</th>
                  <th>Email</th>
                  <th>Signed up</th>
                  <th>User ID</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                      <label class="custom-control-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img10.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Unassigned</td>
                  <td>amanda@example.com</td>
                  <td>1 year ago</td>
                  <td>67989</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck3">
                      <label class="custom-control-label" for="usersDataCheck3"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">A</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Anne Richard</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>anne@example.com</td>
                  <td>6 months ago</td>
                  <td>67326</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck4">
                      <label class="custom-control-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img3.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">David Harrison</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Non-subscription</td>
                  <td>david@example.com</td>
                  <td>6 months ago</td>
                  <td>55821</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck5">
                      <label class="custom-control-label" for="usersDataCheck5"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img5.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Finch Hoot</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>finch@example.com</td>
                  <td>1 year ago</td>
                  <td>85214</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck6">
                      <label class="custom-control-label" for="usersDataCheck6"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Bob Dean</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>bob@example.com</td>
                  <td>6 months ago</td>
                  <td>75470</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck7">
                      <label class="custom-control-label" for="usersDataCheck7"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img9.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>Ella@example.com</td>
                  <td>1 year ago</td>
                  <td>37534</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck8">
                      <label class="custom-control-label" for="usersDataCheck8"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img4.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Sam Kart</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>sam@example.com</td>
                  <td>1 year ago</td>
                  <td>57300</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck9">
                      <label class="custom-control-label" for="usersDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets/img/160x160/GAU.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Costa Quinn</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Unassigned</td>
                  <td>costa@example.com</td>
                  <td>1 year ago</td>
                  <td>71288</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck10">
                      <label class="custom-control-label" for="usersDataCheck10"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">R</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Rachel Doe</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Unassigned</td>
                  <td>rachel@example.com</td>
                  <td>6 months ago</td>
                  <td>95211</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck11">
                      <label class="custom-control-label" for="usersDataCheck11"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Brian Halligan</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>brian@example.com</td>
                  <td>1 year ago</td>
                  <td>58643</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck12">
                      <label class="custom-control-label" for="usersDataCheck12"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img8.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Linda Bates</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>linda@example.com</td>
                  <td>1 year ago</td>
                  <td>44414</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck13">
                      <label class="custom-control-label" for="usersDataCheck13"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-info avatar-circle mr-2">
                        <span class="avatar-initials">C</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Chris Mathew <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>chris@example.com</td>
                  <td>1 year ago</td>
                  <td>12569</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck14">
                      <label class="custom-control-label" for="usersDataCheck14"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                        <span class="avatar-initials">L</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Lewis Clarke</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Non-subscription</td>
                  <td>lewis@example.com</td>
                  <td>1 year ago</td>
                  <td>54621</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck15">
                      <label class="custom-control-label" for="usersDataCheck15"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img7.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Clarice Boone <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>clarice@example.com</td>
                  <td>6 months ago</td>
                  <td>23485</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck16">
                      <label class="custom-control-label" for="usersDataCheck16"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-danger avatar-circle mr-2">
                        <span class="avatar-initials">M</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Mark Colbert</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>mark@example.com</td>
                  <td>6 months ago</td>
                  <td>78463</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck17">
                      <label class="custom-control-label" for="usersDataCheck17"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-info avatar-circle mr-2">
                        <span class="avatar-initials">J</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Johnny Appleseed</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>johnny@example.com</td>
                  <td>1 year ago</td>
                  <td>23564</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck18">
                      <label class="custom-control-label" for="usersDataCheck18"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="#">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">P</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Phileas Fogg</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>phileas@example.com</td>
                  <td>6 months ago</td>
                  <td>39199</td>
                </tr>
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
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected="">8</option>
                    <option value="12">12</option>
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