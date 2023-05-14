<?php include 'header.php'?>
<?php include 'collegeSession.php'?>
  <title>Home</title>
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
        <a class="nav-link" href="vote.php" data-toggle="tooltip" data-placement="bottom" title="Vote Candidates"><i class="fas fa-vote-yea" style="font-size:24px"></i><span class="d-none d-sm-inline"> Vote</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="result.php" data-toggle="tooltip" data-placement="bottom" title="Result"><i class="fa fa-bar-chart" style="font-size:24px"></i><span class="d-none d-sm-inline"> Result</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#" data-toggle="tooltip" data-placement="bottom" title="Account Settings"><i class="fas fa-user-cog" style="font-size:24px"></i></a>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#changePasswordModal"><i class='fas fa-user-lock'></i> Change Password</a></li><br>
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#emailVerificationModal"><i class='fas fa-user-shield'></i> Verify Email</a></li><br>
          <li><a class="dropdown-item" href="home.php?q=logout"><i class='fas fa-power-off'></i> Log Out</a></li>
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

  
      <div class="container p-3">

        <?php			
          include ('../dbconn.php');
          $sql = "SELECT * FROM clg_title WHERE titlePage='Home'";
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

        <div class="container">

          <!--FILTER START-->
          <div class="nav nav-pills d-flex flex-column flex-sm-row overflow-auto" role="tablist" style="height:51px;">

            <div class="nav-item">
              <a class="nav-link active" data-bs-toggle="pill" href="#informations">Information</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#announcements">Announcement</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#guide">System Guide</a>
            </div>

          </div>

          <!--FILTER END-->
        
          <!--CONTENT START-->
          <div class="tab-content">
            <!--INFORMATION START-->
            <div id="informations" class="tab-pane fade show active"><br>
              <div class="container home-content p-3 fs-5">
                <h2 class="user-greeting"><?php include '../nav-logo.php'?><strong><b>Hello</b> <b style="text-transform: uppercase;">user123</b>!</strong></h2>
                <hr>
                <?php			
                  include ('../dbconn.php');
                  $sql = "SELECT * FROM clg_home WHERE homecontentID = 'information'";
                  $result = $conn->query($sql);
                                      
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()){
                ?>

                  <h4><?php echo nl2br($row['contentHeader'])?></h4>
                  <p><?php echo nl2br($row['content'])?></p>
                  <br>

                <?php	
                  }		
                  $conn->close();
                  }
                ?>
              </div>  
            </div>
            <!--INFORMATION END-->
            
            <!--ANNOUCEMENTS START-->
            <div id="announcements" class="container tab-pane fade"><br>
              <div class="container home-content p-3 fs-5">
                <h2 class="user-greeting"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;"><strong><b> Announcements</b></strong></h2>
                  <hr>	

                <?php			
                  include ('../dbconn.php');
                  $sql = "SELECT * FROM clg_home WHERE homecontentID = 'announcement'";
                  $result = $conn->query($sql);
                                      
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()){
                ?>
                          
                  <h4><?php echo nl2br($row['contentHeader'])?></h4>
                  <p><?php echo nl2br($row['content'])?></p>
                  <br>

                <?php	
                  }		
                  $conn->close();
                  }
                ?>
                <br>
              </div>  
            </div>
            <!--ANNOUCEMENTS END-->
      
            <!--SYSTEM GUIDE START-->
            <div id="guide" class="container tab-pane fade"><br>
              <div class="container home-content text-break p-3 fs-5">
                <h2 class="user-greeting"><img src="ACLCLOGO/logo3.jpeg" alt="School Logo" style="width: 26px;"><strong><b> System Guide</b></strong></h2>
                  <hr>	

                <?php			
                  include ('../dbconn.php');
                  $sql = "SELECT * FROM clg_home WHERE homecontentID = 'systemGuide'";
                  $result = $conn->query($sql);
                                      
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()){
                ?>
                          
                  <h4><?php echo nl2br($row['contentHeader'])?></h4>
                  <p><?php echo nl2br($row['content'])?></p>
                  <br>

                <?php	
                  }		
                  $conn->close();
                  }
                ?>
              </div>  
            </div>
            <!--SYSTEM GUIDE END--> 
            

          </div>
        </div>
    </div>
  </div>
</div>


<?php include 'footer.php' ?>