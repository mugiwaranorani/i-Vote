<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/login.css" />
    <title>College Login</title>
    <link rel="icon" type="image/x-icon" href="collegeUser/ACLCLOGO/logo3.jpeg">
  </head>
  <body class="login-body">
    <img src="collegeUser/ACLCLOGO/logo3.jpeg"class="bg-logo">
    <div class="container_login">
      <form action="collegeLoginProcess.php"method="POST">
        <h1><b>COLLEGE LOGIN</b></h1>
        <div class="form-group">
          <i class="fas fa-user"></i>
          <input type="text" name="usn" placeholder="Username"/>
        </div>
        <div class="form-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="vpass" placeholder="Password"/>
        </div>
        <div class="d-flex-column">
        <button type="submit" name="submit" class="m-1">Sign In</button>
        <a href="index.php" class="back-btn m-1">Back</a>
      </form>
    </div>
  </body>
</html>