<div class="modal fade" id="exportProductsModal" tabindex="-1" role="dialog" aria-labelledby="exportProductsModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="exportProductsModalTitle" class="modal-title">Export products</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <p>This CSV file can update all product information. To update just inventory quantites use the <a href="#">CSV file for inventory.</a></p>
  
            <!-- Form Group -->
            <div class="form-group">
              <label class="input-label">Export</label>
          
              <!-- Custom Checkbox -->
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="exportProductsRadio1" name="exportProductsRadio" class="custom-control-input" checked="">
                <label class="custom-control-label" for="exportProductsRadio1">Current page</label>
              </div>
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="exportProductsRadio2" name="exportProductsRadio" class="custom-control-input">
                <label class="custom-control-label" for="exportProductsRadio2">All products</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="exportProductsRadio3" name="exportProductsRadio" class="custom-control-input" disabled="">
                <label class="custom-control-label" for="exportProductsRadio3">Selected: 20 products</label>
              </div>
              <!-- End Custom Checkbox -->
            </div>
            <!-- End Form Group -->
  
            <label class="input-label">Export as</label>
        
            <!-- Custom Checkbox -->
            <div class="custom-control custom-radio mb-2">
              <input type="radio" id="exportProductsAsRadio1" name="exportProductsAsRadio" class="custom-control-input" checked="">
              <label class="custom-control-label" for="exportProductsAsRadio1">CSV for Excel, Numbers, or other spreadsheet programs</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="exportProductsAsRadio2" name="exportProductsAsRadio" class="custom-control-input">
              <label class="custom-control-label" for="exportProductsAsRadio2">Plain CSV file</label>
            </div>
            <!-- End Custom Checkbox -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Export products</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>