<div class="modal fade" id="importProductsModal" tabindex="-1" role="dialog" aria-labelledby="importProductsModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="importProductsModalTitle" class="modal-title">Import products by CSV</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <p><a href="#">Download a sample CSV template</a> to see an example of the format required.</p>

            <!-- Form Group -->
            <div class="form-group">
              <!-- Dropzone -->
              <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                <div class="dz-message custom-file-boxed-label">
                  <img class="avatar avatar-xl avatar-4by3 mb-3" src="<?php echo($level);?>assets\svg\illustrations\browse.svg" alt="Image Description">
                  <h5 class="mb-1">Choose files to upload</h5>
                  <p class="mb-2">or</p>
                  <span class="btn btn-sm btn-primary">Browse files</span>
                </div>
              </div>
              <!-- End Dropzone -->
            </div>
            <!-- End Form Group -->
  
            <!-- Custom Checkbox -->
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="overwriteCurrentProductsCheckbox">
              <label class="custom-control-label" for="overwriteCurrentProductsCheckbox">Overwrite any current products that have the same handle. Existing values will be used for any missing columns.<a href="#">Learn more</a></label>
            </div>
            <!-- End Custom Checkbox -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Upload and continue</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>