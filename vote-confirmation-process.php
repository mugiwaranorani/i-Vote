<?php	
  include '../dbconn.php';

  if (isset($_POST['resetBtn'])) {
    $voterName = $_POST['vname'];

    $sql = "DELETE FROM clg_pendingvote WHERE voterName = '$voterName'";
                      
    if ($conn->query($sql) === TRUE) {
    header("location:vote.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
      
  //close the connection
  $conn->close();

  }
?>

<?php
	//vote count code here please
?>
