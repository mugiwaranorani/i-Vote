<!--Add New Candidate Profile -->
<div class="modal fade" id="changePasswordModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      
      

        <!-- Modal Header -->
        <div class="modal-header text-dark">

          <h3 class="modal-title"><b><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 27px; height: 28px; margin-bottom: 7px;"> CHANGE PASSWORD</b></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
        </div>

        <!-- Modal form body START-->
        <div class="modal-body text-dark">
          <div class="container">

            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="oldpass" placeholder=""value="" required>
              <label for="floatingInput">Old Password</label>
            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="newpass" placeholder="" value="" required>
              <label for="floatingInput">New Password</label>
            </div>
          
          </div>
        </div>
         <!-- Modal form body END-->

      <!-- Modal footer START-->
      <div class="modal-footer">
        <button type="button" class="btn btn-success px-4">Save</button>
        <button type="button" class="btn btn-danger px-3" data-bs-dismiss="modal">Close</button>
      </div>
      <!-- Modal footer END-->

    </div>
  </div>
</div>