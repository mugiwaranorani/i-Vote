<!--//NOTE ALWAYS INCLUDE THIS PART IN EVERY NEW PAGE CREATED-->
<?php 
	//session_start();
    include_once '../collegeLoginProcess.php';
    $user = new User();

    $voterID = $_SESSION['voterID'];

    if (!$user->get_session()){
       header("location: ../collegeLogin.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location: ../collegeLogin.php");
    }
    
    include 'collegeLogin.php';
?>
<!--//NOTE ALWAYS INCLUDE THIS PART IN EVERY NEW PAGE CREATED-->
