<?php include 'header.php'?>
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
  
        <!--FILTER END-->
      <div class="container"><h2>VOTE CONFIRMATION</h2></div>
      <div class="container rounded">

        <div class="vote-container line-shadow p-3 rounded">

          <div class="container-fluid text-secondary" style="margin-left:-8px;"><h4>NOTICE: Please check your selected candidates... </h4><br></div>

          <div class="box">
            <img src="picture/power.jpg" alt="sc candidate" width="96" height="96">
            <div class="box-info">
              <strong><b class="fs-5">PRESIDENT</b></strong>
              <br>
              <b>Name: </b> Power
            </div>
          </div>

          <div class="box">
            <img src="picture/hange.jpg" alt="sc candidate" width="96" height="96">
            <div class="box-info">
              <strong><b class="fs-5">VICE PRESIDENT</b></strong>
              <br>
              <b>Name: </b> Hange Zoe
            </div>
          </div>

          <div class="box">
            <img src="picture/robin.jpg" alt="sc candidate" width="96" height="96">
            <div class="box-info">
              <strong><b class="fs-5">SECRETARY</b></strong>
              <br>
              <b>Name: </b> Nico Robin
            </div>
          </div>

          <div class="box">
            <img src="picture/sakata.jpg" alt="sc candidate" width="96" height="96">
            <div class="box-info">
              <strong><b class="fs-5">TREASURER</b></strong>
              <br>
              <b>Name: </b> Gintoki Sakata
            </div>
          </div>

          <div class="box">
            <img src="picture/sakuragi.jpg" alt="sc candidate" width="96" height="96">
            <div class="box-info">
              <strong><b class="fs-5">COLLEGE REP</b></strong>
              <br>
              <b>Name: </b> Sakuragi Hanamichi
            </div>
          </div>
	
          <div class="container p-2 text-center">
            <br>
            <a class="btn btn-success px-4" href="vote-receipt.php">Confirm</a>
            <a class="btn btn-danger px-4" href="vote.php">Cancel</a>
          </div>
          
			  </div>
      </div>
      
  </div>
</div>


<?php include 'footer.php' ?>