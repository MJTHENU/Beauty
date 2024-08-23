<?php
$id=$_GET['id'];
$conn = new mysqli("localhost", "root", "", "bp");
$stmt = $conn->prepare("DELETE FROM  `clients_booking_details` WHERE id = ?");
    $stmt->bind_param("i", $id); // assuming id is an integer

    // Execute delete statement
    if ($stmt->execute()) {
        include('admin.php');
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

?>