<?php
/*** for login process ***/
session_start();

$user = new User();

$voterID = $_SESSION['voterID'];

//REDIRECT AND RESTRICT ACCESS IF SESSION EXPIRED
if (!$user->get_session()){
   header("location:collegeUser/home.php");
}

//LOGOUT PROCESS
if (isset($_GET['q'])){
	$user->user_logout();
	header("location:collegeLogin.php");
}

class User{
	public function check_login($usn, $pswd){
				
		include "dbconn.php";
		
		$query = "SELECT voterID, fullName FROM clg_voter WHERE usn = '$usn' AND vpass = '$pswd'";
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
			$_SESSION['login'] = true; // this login var will use for the session thing
			$_SESSION['voterID'] = $user_data['voterID'];
			$_SESSION['fullName'] = $user_data['fullName'];
			mysqli_close($conn);
			return true;
		} else {
			return false;
		}
	}

	public function get_fullname($voterID){
		include "dbconn.php";
		$query = "SELECT fullName FROM clg_voter WHERE voterID = $voterID";
		
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['fullName'];
		mysqli_close($conn);
	}

	public function get_email($voterID){
		include "dbconn.php";
		$query = "SELECT email FROM clg_voter WHERE voterID = $voterID";
		
		$result = $conn->query($query);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['email'];
		mysqli_close($conn);
	}
	
	/*** starting the session ***/
	public function get_session(){
		return $_SESSION['login'];
	}

	public function user_logout() {
		$_SESSION['login'] = FALSE;
		unset($_SESSION);
		session_destroy();
	}
}

if (isset($_POST['submit'])) { 
		//extract($_POST);
		
		$usn = $_POST['usn'];
		$pswd = $_POST['pswd'];
		
		$user = new User();
		
		$login = $user->check_login($usn, $pswd);
	
	    if ($login) {
			include "dbconn.php";
			
			//delete loginTime records if date is 2days older
			$date=date_create(date("Y-m-d"));
			date_sub($date,date_interval_create_from_date_string("2 days"));
			$petsa=date_format($date,"Y-m-d");
			
			$sqlbura = "DELETE FROM collegeUserLog WHERE loginTime < '$petsa'";
			$resulta = $conn->query($sqlbura);
		
		
			//INSERT loginTime records latest login
			$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
			$uid = $_SESSION['voterID'];
			$fullname = $_SESSION['fullName'];
			
			// query for inser user log in to data base
			$sql = "INSERT INTO `collegeUserLog` (`voterID`, `fullName`, `userIP`)	VALUES ('$uid', '$fullName', '$uip')";
			$result = $conn->query($sql);
			mysqli_close($conn);
			
	        // login Success
			header("location: collegeUser/home.php");
	    } else {
	        // login Failed
	        echo 'Wrong username or password';
	    }
}
?>