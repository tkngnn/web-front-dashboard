<div class="modal fade" id="uploadFilesModal" tabindex="-1" role="dialog" aria-labelledby="uploadFilesModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="uploadFilesModalTitle" class="modal-title">Add files</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Dropzone -->
            <div id="attachFilesLabel" class="js-dropzone dropzone-custom custom-file-boxed">
              <div class="dz-message custom-file-boxed-label">
                <img class="avatar avatar-xl avatar-4by3 mb-3" src="<?php echo($level);?>assets\svg\illustrations\browse.svg" alt="Image Description">

                <h5>Drag and drop your file here</h5>

                <p class="mb-2">or</p>

                <span class="btn btn-sm btn-white">Browse files</span>
              </div>
            </div>
            <!-- End Dropzone -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Upload</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>