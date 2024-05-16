<div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search reviews" aria-label="Search reviews">
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-sm-6">
                <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-sm btn-outline-danger mr-2" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                      <a class="btn btn-sm btn-primary" href="javascript:;">
                        <i class="tio-publish"></i> Publish
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->

                  <!-- Unfold -->
                  <div class="hs-unfold mr-2">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                      <i class="tio-download-to mr-1"></i> Export
                    </a>

                    <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                      <span class="dropdown-header">Options</span>
                      <a id="export-copy" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\illustrations\copy.svg" alt="Image Description">
                        Copy
                      </a>
                      <a id="export-print" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\illustrations\print.svg" alt="Image Description">
                        Print
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Download options</span>
                      <a id="export-excel" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\brands\excel.svg" alt="Image Description">
                        Excel
                      </a>
                      <a id="export-csv" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\components\placeholder-csv-format.svg" alt="Image Description">
                        .CSV
                      </a>
                      <a id="export-pdf" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="<?php echo($level);?>assets\svg\brands\pdf.svg" alt="Image Description">
                        PDF
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <!-- Select -->
                  <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0;" data-target-column-index="5" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm",
                            "dropdownAutoWidth": true,
                            "width": true,
                            "placeholder": "Filters"
                          }'>
                    <option value="">All</option>
                    <option value="Published">Published</option>
                    <option value="Pending">Pending</option>
                  </select>
                  <!-- End Select -->
                </div>
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 3, 6],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 5,
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
                  <th>Product</th>
                  <th>Reviewer</th>
                  <th>Review</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Actions</th>
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
                  <th>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\400x400\img18.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="h5 text-hover-primary">Brown Hat</span>
                      </div>
                    </a>
                  </th>
                  <td>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img10.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Verified purchase"></i></span>
                        <span class="d-block font-size-sm text-body">amanda@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="text-wrap" style="width: 18rem;">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                      </div>

                      <h4 class="mb-1">I just love it!</h4>
                      <p>I bought this hat for my boyfriend, but then i found out he cheated on me so I kept it and I love it!! I wear it all the time and there is no problem with the fit even though its a mens" hat.</p>
                    </div>
                  </td>
                  <td>Aug 17, 2020, 5:48</td>
                  <td><span class="badge badge-soft-success ml-2">Published</span></td>
                  <td>
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#settingsDropdown1",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-horizontal"></i>
                      </a>

                      <div id="settingsDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-edit dropdown-item-icon"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-publish dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-reply dropdown-item-icon"></i> Reply
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck3">
                      <label class="custom-control-label" for="usersDataCheck3"></label>
                    </div>
                  </td>
                  <th>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\400x400\img3.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="h5 text-hover-primary">Calvin Klein t-shirts</span>
                      </div>
                    </a>
                  </th>
                  <td>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">A</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Anne Richard</span>
                        <span class="d-block font-size-sm text-body">anne@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="text-wrap" style="width: 18rem;">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                      </div>

                      <h4 class="mb-1">Really nice</h4>
                      <p>Material is great and very comfortable and stylish.</p>
                    </div>
                  </td>
                  <td>Aug 04, 2020, 3:17</td>
                  <td><span class="badge badge-soft-warning ml-2">Pending</span></td>
                  <td>
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#settingsDropdown2",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-horizontal"></i>
                      </a>

                      <div id="settingsDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-edit dropdown-item-icon"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-publish dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-reply dropdown-item-icon"></i> Reply
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck4">
                      <label class="custom-control-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <th>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\400x400\img24.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="h5 text-hover-primary">Clarks shoes</span>
                      </div>
                    </a>
                  </th>
                  <td>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img3.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                        <span class="d-block font-size-sm text-body">david@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="text-wrap" style="width: 18rem;">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                      </div>

                      <h4 class="mb-1">Good product</h4>
                      <p>A really well built shoe. It looks great and wears just as well. A great staple in ball caps.</p>
                    </div>
                  </td>
                  <td>June 18, 2020, 09:19</td>
                  <td><span class="badge badge-soft-success ml-2">Published</span></td>
                  <td>
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#settingsDropdown3",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-horizontal"></i>
                      </a>

                      <div id="settingsDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-edit dropdown-item-icon"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-publish dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-reply dropdown-item-icon"></i> Reply
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck5">
                      <label class="custom-control-label" for="usersDataCheck5"></label>
                    </div>
                  </td>
                  <th>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\400x400\img19.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="h5 text-hover-primary">Levis women's jeans</span>
                      </div>
                    </a>
                  </th>
                  <td>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img5.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                        <span class="d-block font-size-sm text-body">david@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="text-wrap" style="width: 18rem;">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                      </div>

                      <h4 class="mb-1">Buy the product, you will not regret it!</h4>
                      <p>Don't let this merchandise get away! It's a must buy and you will look good in it while working out.</p>
                    </div>
                  </td>
                  <td>June 08, 2020, 07:22</td>
                  <td><span class="badge badge-soft-success ml-2">Published</span></td>
                  <td>
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#settingsDropdown4",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-horizontal"></i>
                      </a>

                      <div id="settingsDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-edit dropdown-item-icon"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-publish dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-reply dropdown-item-icon"></i> Reply
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck6">
                      <label class="custom-control-label" for="usersDataCheck6"></label>
                    </div>
                  </td>
                  <th>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\400x400\img11.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="h5 text-hover-primary">Asos t-shirts</span>
                      </div>
                    </a>
                  </th>
                  <td>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Bob Dean</span>
                        <span class="d-block font-size-sm text-body">bob@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="text-wrap" style="width: 18rem;">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                      </div>

                      <h4 class="mb-1">Ready for the heat!</h4>
                      <p>As good as the heat Rdy T-shirt but without the sleeves. Love the stripes on the back.</p>
                    </div>
                  </td>
                  <td>May 27, 2020, 04:01</td>
                  <td><span class="badge badge-soft-warning ml-2">Pending</span></td>
                  <td>
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#settingsDropdown5",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-horizontal"></i>
                      </a>

                      <div id="settingsDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-edit dropdown-item-icon"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-publish dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-reply dropdown-item-icon"></i> Reply
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck7">
                      <label class="custom-control-label" for="usersDataCheck7"></label>
                    </div>
                  </td>
                  <th>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\400x400\img7.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="h5 text-hover-primary">Tiro track jacket</span>
                      </div>
                    </a>
                  </th>
                  <td>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\160x160\img9.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">ella@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="text-wrap" style="width: 18rem;">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star-muted.svg" alt="Review rating" width="14"></div>
                      </div>

                      <h4 class="mb-1">Very nice</h4>
                      <p>Great quality, it is a loose fitting but I would recommend going one size smaller as normal. I always prefer bigger size so bought large for me. Love the pride vibes!!!</p>
                    </div>
                  </td>
                  <td>June 08, 2020, 07:22</td>
                  <td><span class="badge badge-soft-success ml-2">Published</span></td>
                  <td>
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#settingsDropdown6",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-horizontal"></i>
                      </a>

                      <div id="settingsDropdown6" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-edit dropdown-item-icon"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-publish dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-reply dropdown-item-icon"></i> Reply
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck8">
                      <label class="custom-control-label" for="usersDataCheck8"></label>
                    </div>
                  </td>
                  <th>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar">
                        <img class="avatar-img" src="<?php echo($level);?>assets\img\400x400\img14.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="h5 text-hover-primary">Air Jordan 1</span>
                      </div>
                    </a>
                  </th>
                  <td>
                    <a class="d-flex align-items-center" href="#">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Lori Hunter <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">lori@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="text-wrap" style="width: 18rem;">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="<?php echo($level);?>assets\svg\components\star.svg" alt="Review rating" width="14"></div>
                      </div>

                      <h4 class="mb-1">The hype is real!</h4>
                      <p>I am very pleased with my purchase. I have started to have my friends become addicted to Air Jordans also.</p>
                    </div>
                  </td>
                  <td>May 01, 2020, 01:36</td>
                  <td><span class="badge badge-soft-success ml-2">Published</span></td>
                  <td>
                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#settingsDropdown7",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-horizontal"></i>
                      </a>

                      <div id="settingsDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-edit dropdown-item-icon"></i> Edit
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-publish dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-reply dropdown-item-icon"></i> Reply
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </td>
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
                    <option value="5" selected="">5</option>
                    <option value="7">7</option>
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