<?php include 'header.php'?>
  <title>Vote</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
</head>
<body>

<div class="nav-head">
<nav class="sticky-top navbar navbar-expand-sm bg-dark navbar-dark w-100 p-0">
  <div class="container-fluid">
    <ul class="nav nav-pills nav-justified w-100 p-2" style="font-size: 17px;">

      <li class="nav-item">
        <?php include '../nav-logo.php'?>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="candidates.php" data-toggle="tooltip" data-placement="bottom" title="View Candidates"><i class="fas fa-id-card" style="font-size:24px"></i><span class="d-none d-sm-inline"> Candidates</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="vote.php" data-toggle="tooltip" data-placement="bottom" title="Vote Candidates"><i class="fas fa-vote-yea" style="font-size:24px"></i><span class="d-none d-sm-inline"> Vote</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="result.php" data-toggle="tooltip" data-placement="bottom" title="Result"><i class="fa fa-bar-chart" style="font-size:24px"></i><span class="d-none d-sm-inline"> Result</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#" data-toggle="tooltip" data-placement="bottom" title="Account Settings"><i class="fas fa-user-cog" style="font-size:24px"></i></a>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#changePasswordModal"><i class='fas fa-user-lock'></i> Change Password</a></li><br>
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#emailVerificationModal"><i class='fas fa-user-shield'></i> Verify Email</a></li><br>
          <li><a class="dropdown-item" href="#"><i class='fas fa-power-off'></i> Log Out</a></li>
        </ul>
      </li>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script>
      $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
      });
      </script>

      <!--<li class="nav-item">
        <a class="nav-link" href="login.php">Login(temporary)</a>
      </li>-->

    </ul>

  </div>
</nav>

<div class="full-main">

  <div class="container-fluid x">
  <?php include "../schoolLogo.php"?>
  </div>
  <hr>

  <?php include '../time.php'?>

  <?php include 'modalChangepass.php'?>
  <?php include 'modalEmailVerification.php'?>

  <div class="container">
    <?php			
      include ('../dbconn.php');
      $sql = "SELECT * FROM clg_title WHERE titlePage='Vote'";
      $result = $conn->query($sql);
                  
      if ($result->num_rows > 0) {
        while($row = $result->fetch_array()){
    ?>
    
    <h1><strong><b><?php echo $row['title']?></strong></b></h1>
    
    <?php	
      }		
      $conn->close();
      }
    ?>
  </div>
  
  <br>
  
  <div class="row">
      <!--CANDIDATE SELECTION START-->
    <div class="col-sm-7 p-2">

      <div class="container"><h2>CANDIDATES SELECTION</h2></div>

      <!--FILTER START-->
      <div class="container">
        <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

          <div class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#positions">All Positions</a>
          </div>
          <div class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#plA">PARTY LIST A</a>
          </div>
          <div class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#plB">PARTY LIST B</a>
          </div>

        </div>
      </div>

      <!--FILTER END-->
    
      <div class="container overflow-auto" style="height: 550px;" >
        <div class=""><!--SELECTION SIDE-->
          <div class="container selection-side">
          
            <!--CONTENT START-->
            <div class="tab-content">
              
              <!--POSITION CONTENT START-->
              <div id="positions" class="tab-pane fade show active"><br>
                <!--POSITION PRESIDENT START-->
                <h5><i>ASPIRING PRESIDENT(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='PRESIDENT'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION PRESIDENT END-->
                <hr>
                <!--POSITION VICE PRESIDENT START-->
                <h5><i>ASPIRING VICE PRESIDENT(S)</i></h5>
                <div class="con">
                    
                <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='VICE PRESIDENT'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION VICE PRESIDENT END-->
                <hr>
                <!--POSITION SECRETARY START-->
                <h5><i>ASPIRING SECRETARY(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='SECRETARY'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION TREASURER END-->
                <hr>
                <!--POSITION SECRETARY START-->
                <h5><i>ASPIRING TREASURER(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='TREASURER'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION SECRETARY END-->
                <hr>
                <!--POSITION AUDITOR START-->
                <h5><i>ASPIRING AUDITOR(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='AUDITOR'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?>            
                </div>
                <!--POSITION AUDITOR END-->
                <hr>
                <!--POSITION GRADE 11 REPRESENTATIVE START-->
                <h5><i>ASPIRING GRADE 11 REPRESENTATIVE(S)</i></h5>
                <div class="con">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='GRADE 11 REP'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION GRADE 11 REPRESENTATIVE END-->
                <hr>
                <!--POSITION GRADE 12 REPRESENTATIVE START-->
                <h5><i>ASPIRING GRADE 12 REPRESENTATIVE(S)</i></h5>
                <div class="con candidate">
                    
                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='GRADE 12 REP'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
                <!--POSITION GRADE 12 REPRESENTATIVE END-->
                <hr>
                

              </div>
              <!--POSITION CONTENT END-->
            

              <!--PARTY LIST A CONTENT START-->
              <div id="plA" class="container tab-pane fade"><br>
                <h5><i>PARTY LIST A</i></h5>
                <div class="con">
                  
                  <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='GRADE 12 REP'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
              </div>
              <!--PARTY LIST A CONTENT START-->

              <!--PARTY LIST B CONTENT START-->
              <div id="plB" class="container tab-pane fade"><br>
                <h5><i>PARTY LIST B</i></h5>
                <div class="con">

                    <?php include '../dbconn.php';
                      $sql = "SELECT * FROM clg_candidates WHERE position ='GRADE 12 REP'";
                      $result = $conn->query($sql);
                              
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    
                    <div class="box candidate">
                      <img src="picture/<?php echo $row['picture']?>" alt="sc candidate" width="96" height="96">
                      <div class="box-info">
                        <strong><b><?php echo $row['position']?></b></strong>
                        <br>
                        <b>Name: </b> <?php echo $row['name']?>
                      </div>
                    </div>
                    <?php	
                      }		
                        $conn->close();
                      }
                    ?> 
                </div>
              </div>
              <!--PARTY LIST B CONTENT START-->
              
            </div>
          </div>
        </div>
      </div>
    </div> <!--LEFT COLUMN END-->

    <div class="col-sm-5 p-2">
      <!--VOTE BOX START-->
      <div class="container"><h2>CHOSEN CANDIDATES</h2>
          <!--CHOSEN SIDE-->               
          <div class="chosen-side vote-container p-3 rounded" style="border: 3px solid;">
                          
            <div class="default-box">
              <img src="picture/defaultIMG.jpg" alt="sc candidate" width="96" height="96">
              <div class="default-box-info">
                <strong><b>PRESIDENT</b></strong>
              </div>
            </div>

            <div class="default-box">
              <img src="picture/defaultIMG.jpg" alt="sc candidate" width="96" height="96">
              <div class="default-box-info">
                <strong><b>VICE PRESIDENT</b></strong>
              </div>
            </div>

            <div class="default-box">
              <img src="picture/defaultIMG.jpg" alt="sc candidate" width="96" height="96">
              <div class="default-box-info">
                <strong><b>SECRETARY</b></strong>
              </div>
            </div>

            <div class="default-box">
              <img src="picture/defaultIMG.jpg" alt="sc candidate" width="96" height="96">
              <div class="default-box-info">
                <strong><b>TREASURER</b></strong>
              </div>
            </div>

            <div class="default-box">
              <img src="picture/defaultIMG.jpg" alt="sc candidate" width="96" height="96">
              <div class="default-box-info">
                <strong><b>AUDITOR</b></strong>
              </div>
            </div>

            <div class="default-box">
              <img src="picture/defaultIMG.jpg" alt="sc candidate" width="96" height="96">
              <div class="default-box-info">
                <strong><b>GRADE 11 REP</b></strong>
              </div>
            </div>

            <div class="default-box">
              <img src="picture/defaultIMG.jpg" alt="sc candidate" width="96" height="96">
              <div class="default-box-info">
                <strong><b>GRADE 12 REP</b></strong>
              </div>
            </div>

            <div class="container text-center">
            <br>
              <button class="btn btn-success">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </div>
          </div>
        
      </div>
      <!--VOTE BOX END-->
<script>
var candidates = document.querySelectorAll(".candidate");

// Get the chosen box element
var chosenBox = document.querySelector(".chosen-side");

// Get the selection box element
var selectionBox = document.querySelector(".selection-side");

// Loop through each candidate element and add an event listener
candidates.forEach(function(candidate) {
  candidate.addEventListener("click", function() {
    if (candidate.parentNode === chosenBox) {
      // Clone the selected candidate element
      var clonedCandidate = candidate.cloneNode(true);

      // Append the cloned candidate to the selection box
      selectionBox.appendChild(clonedCandidate);

      // Remove the selected candidate from the chosen box
      candidate.parentNode.removeChild(candidate);
    } else {
      // Clone the selected candidate element
      var clonedCandidate = candidate.cloneNode(true);

      // Append the cloned candidate to the chosen box
      chosenBox.appendChild(clonedCandidate);

      // Remove the selected candidate from the selection side
      candidate.parentNode.removeChild(candidate);
    }
  });
});
console.log()
</script>


     
    </div>
  </div>
</div>


<?php include 'footer.php' ?>