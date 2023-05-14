<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="CSS/style.css" rel="stylesheet">
    <script defer src="js/script.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>ACLC i-Vote</title>
    <link rel="icon" type="image/x-icon" href="admin/ACLCLOGO/logo3.jpeg">
  </head>
  

  <style>
    .portal-body{
      background-color: #0E136E;
      background-image: url("ACLCLOGO/AclcMalolos2.jpg");
      background-color: #cccccc;
      background-repeat: no-repeat;
      background-size: 100%;
      object-fit: cover;
    }
    @media (max-width: 940px) {
    .portal-body {
        background-size: 360%;
        }
    }
    .btn_css{
      width: 200px;
      padding: 20px;
      text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
      border: 2px solid; border-color: black;
      border-radius: 5px;
      background-color: red;
    }

    .sclogo{
      width: 70px;
      position:relative;
    
    }
    .sclogo2{
      width: 160px;
      position:relative;
    
    }
    .btn_css:hover{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
      background-color: blue;
      border: 2px solid black;
    }

    .btn_css:active{
      box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
      background-color: dodgerblue;
      border: 2px solid black;
    }

    .content-style{
      text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }

    .main_content{
      width: 700px; 
      height: 250px;
    }

    .line-shadow{
        box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.5);
        border-radius: 15px;
      }
    @media screen and (max-width: 1500px) {
      .main_content{
        width: 700px; height: 250px;
    }
    }

    @media screen and (max-width: 768px) {
      .main_content{
        width: 300px;
        height: 370px;
    }
    }
  </style>
  <style>
    .time-container {
      position: fixed;
      top: 20%;
      left: 47.5%;
      /*transform: translate(-50%, -50%);*/
      width: 80px;
      border: 1px solid black;
      cursor: move;
      text-align: center;
      justify-content: center;
      border: 1px solid;
      border-color: white;
      z-index: 1;
    }

    .time {
      text-align: center;
      font-size: 16px;
      user-select: none;
    }

    @media screen and (max-width: 700px) {
    .time-container{
      top: 50%;
      left: 84%;
      width: 50px;
    }
    }
  </style>

  <body class="portal-body">

  

    <div class="container-fluid col-sm-12">
  
      <div class="content-style container text-light d-flex align-items-center justify-content-center text-center rounded mb-2 mt-1 p-1">
        <h1><b><strong><img src="ACLCLOGO/sclogo2.png" class="sclogo" alt="School Logo"><img src="ACLCLOGO/aclc.png" class="sclogo2" alt="School Logo"><br>WELCOME TO ACLC's i-VOTING SYSTEM WEBSITE (MALOLOS)</b></strong></h1>
      </div>
        
        <div class="main_content content-style container bg-primary text-white rounded line-shadow p-3" style="opacity: 0.8;">

          <h2 class="fw-bold fw-bolder text-center">CHOOSE YOUR VOTING PORTAL</h2>
          <br>

          <div class="d-flex flex-row flex-wrap justify-content-center align-items-center mt-4 p-2">

            <div class="m-2">
              <a href="collegeLogin.php" class="btn_css btn btn-outline-primary text-white fs-2 fw-bolder mx-2">COLLEGE</a>
            </div>
            <div class="m-2">
              <a href="shsLogin.php" class="btn_css btn btn-outline-primary text-white fs-2 fw-bolder mx-2">SHS</a>
            </div>

          </div>

        </div>

      <div class="fixed-relative content-style container text-white d-flex-column align-items-center justify-content-center text-center rounded p-1">
        <br>
        <h4>© i-Voting System <img src="admin/ACLCLOGO/logo3.jpeg" alt="School Logo" style="width:25px; margin-right: 0px; margin-bottom: 7px;"> ACLC College of Malolos 2023 All Rights Reserved</h4><p> .Web Developer: BSCS-42CC (S.Y 2022-2023).</p>
      </div>
      

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
  </body>
</html>