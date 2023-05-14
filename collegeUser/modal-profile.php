<!--Modal Profile -->
<div class="modal fade" id="profileModal<?php echo $row['candidateID']?>">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      
      

        <!-- Modal Header -->
        <div class="modal-header header-color text-white">

          <h4 class="modal-title"><?php echo $row['name']?>'s Profile</h4>
          <img src="ACLCLOGO/sclogo2.png" class="sclogo_profile" alt="School Logo">
        </div>

        <!-- Modal body START-->
        <div class="modal-body">
            <img class="card-img-top modal-img " src="picture/<?php echo $row['picture']?>" alt="candidate image" style="width: 300px;">
            <br>
            <h4><strong><b><?php echo $row['position']?></b></strong></h4>
            <br>
          <div class="content-text">
            <div class="text-profile">
              <strong>Name:</strong> <?php echo $row['name']?><br>
              <strong>Party List:</strong> <?php echo $row['partyList']?><br>
              <strong>Year:</strong> <?php echo $row['yearLvl']?><br>
              <strong>Course:</strong> <?php echo $row['course']?><br>
              <strong>Platform:</strong> <?php echo $row['platform']?> 
            </div>
          </div>

        </div>
         <!-- Modal body END-->

      <!-- Modal footer START-->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
      </div>
      <!-- Modal footer END-->

      

    </div>
  </div>
</div>



<!-- Modal Profile END -->

<style>
  .modal-img{
    width: 50%;
    object-fit: scale-down;
    object-fit: cover;
    border: 1px solid;
    border-radius: 8px;
    height: 350px;
  }

  .header-color{
    background-image: linear-gradient(blue, black, red);
  }

  .content-text{
    float: left;
  }

  .text-profile{
    text-align: left;
  }
  
  .sclogo_profile{
    width: 50px;
  }
  
  .text-profile{
    text-align: justify;
    text-justify: inter-word;
  }

</style>