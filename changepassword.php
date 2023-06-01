<?php
include 'collegeSession.php';
include '../dbconn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldPassword = $_POST['oldpass'];
    $newPassword = $_POST['newpass'];

    $userId = $_SESSION['voterID'];
    $query = "SELECT vpass FROM clg_voter WHERE voterID = $userId";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        // Query execution error
        echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve the current password.']);
        exit;
    }

    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        // User ID not found
        echo json_encode(['status' => 'error', 'message' => 'User ID not found.']);
        exit;
    }

    $currentPassword = $row['vpass'];

    if ($oldPassword === $currentPassword) {
        $updateQuery = "UPDATE clg_voter SET vpass = '$newPassword' WHERE voterID = $userId";
        mysqli_query($conn, $updateQuery);

        // Password changed successfully
        echo json_encode(['status' => 'success', 'message' => 'Password successfully changed.']);
        exit;
    } else {
        // Incorrect old password
        echo json_encode(['status' => 'danger', 'message' => 'Incorrect old password. Please try again.']);
        exit;
    }
}
?>