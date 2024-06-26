<div class="modal fade" id="exportOrdersModal" tabindex="-1" role="dialog" aria-labelledby="exportOrdersModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="exportOrdersModalTitle" class="modal-title">Export orders</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Form Group -->
            <div class="form-group">
              <!-- Custom Checkbox -->
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="ordersRadio1" name="ordersRadio" class="custom-control-input" checked="">
                <label class="custom-control-label" for="ordersRadio1">Current page</label>
              </div>
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="ordersRadio2" name="ordersRadio" class="custom-control-input">
                <label class="custom-control-label" for="ordersRadio2">All orders</label>
              </div>
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="ordersRadio3" name="ordersRadio" class="custom-control-input" disabled="">
                <label class="custom-control-label" for="ordersRadio3">Selected: 20 orders</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="ordersRadio4" name="ordersRadio" class="custom-control-input">
                <label class="custom-control-label" for="ordersRadio4">Order by date</label>
              </div>
              <!-- End Custom Checkbox -->
            </div>
            <!-- End Form Group -->
  
            <label class="input-label">Export as</label>
        
            <!-- Custom Checkbox -->
            <div class="custom-control custom-radio mb-2">
              <input type="radio" id="orderAsRadio1" name="orderAsRadio" class="custom-control-input" checked="">
              <label class="custom-control-label" for="orderAsRadio1">CSV for Excel, Numbers, or other spreadsheet programs</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="orderAsRadio2" name="orderAsRadio" class="custom-control-input">
              <label class="custom-control-label" for="orderAsRadio2">Plain CSV file</label>
            </div>
            <!-- End Custom Checkbox -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Export orders</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>