<?php include 'header.php'?>
<?php include 'collegeSession.php'?>
  <title>Vote</title>
  <link rel="icon" type="image/x-icon" href="ACLCLOGO/logo3.jpeg">
  <style>
    .line-shadow{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
    }
    input[type="radio"] {
      transform: scale(1.5); /* increase size by 50% */
    }
  </style>
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
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class='fas fa-power-off'></i> Log Out</a></li>
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
    <?php include 'modalLogoutConfirmation.php'?>

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
  
        <!--FILTER END-->
      <div class="container"><h2>VOTE CONFIRMATION</h2></div>
      <div class="container rounded">
        <form action="vote-confirmation-process.php" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="vname" value="<?php echo $user->get_fullname($voterID);?>">
          <div class="vote-container p-3 rounded mb-3" style="border: 3px solid;">
            <div class="container-fluid text-danger" style="margin-left:-8px;"><h4>NOTICE: Please check your selected candidates before confirming... </h4><br></div>
                
              <?php include '../dbconn.php';
                $votername = $_SESSION['fullName'];
                $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT pendingPresident FROM clg_pendingvote WHERE voterName = '" . $votername . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="president" name="president" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

              <?php	
                }		
                  $conn->close();
                }
              ?>

              <?php include '../dbconn.php';
                $votername = $_SESSION['fullName'];
                $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT pendingVicePresident FROM clg_pendingvote WHERE voterName = '" . $votername . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="vicepresident" name="vicepresident" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

              <?php	
                }		
                  $conn->close();
                }
              ?>

              <?php include '../dbconn.php';
                $votername = $_SESSION['fullName'];
                $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT pendingSecretary FROM clg_pendingvote WHERE voterName = '" . $votername . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="secretary" name="secretary" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

              <?php	
                }		
                  $conn->close();
                }
              ?>

              <?php include '../dbconn.php';
                $votername = $_SESSION['fullName'];
                $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT pendingTreasurer FROM clg_pendingvote WHERE voterName = '" . $votername . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="treasurer" name="treasurer" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

              <?php	
                }		
                  $conn->close();
                }
              ?>

              <?php include '../dbconn.php';
                $votername = $_SESSION['fullName'];
                $sql = "SELECT * FROM clg_candidates WHERE candidateID IN(SELECT pendingCollegeRepresentative FROM clg_pendingvote WHERE voterName = '" . $votername . "')";
                $result = $conn->query($sql);
                                    
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {               
              ?>

              <div class="box">
                <img src="../uploads/<?php echo $row['picture'];?>" alt="sc candidate" width="96" height="96">
                <div class="box-info">
                  <strong><b class="fs-5"><?php echo $row['position'];?> <input type="radio" id="collegerep" name="collegerep" value="<?php echo $row['candidateID']?>" checked style="display: none"></b></strong>
                  <br>
                  <b>Name: </b> <?php echo $row['name'];?>
                </div>
              </div>

              <?php	
                }		
                  $conn->close();
                }
              ?>
      
              <div class="container p-2 text-center">
                <br>
                <input class="btn btn-success px-4" id="confirmBtn" name="confirmBtn" type="submit" value="Confirm">
                <input class="btn btn-danger px-3" id="resetBtn" name="resetBtn" type="submit" value="Reset Vote">
              </div>
          </form>
			  </div>
      </div>
      
  </div>
</div>


<?php include 'footer.php' ?>