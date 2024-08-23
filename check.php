<?php
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$time = $_POST['time'];

// Create connection
$conn = new mysqli("localhost", "root", "", "bp");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the select statement
$check = $conn->prepare("SELECT COUNT(*) AS count FROM clients_booking_details WHERE booking_date = ? AND booking_time = ?");
$check->bind_param("ss", $date, $time);
$check->execute();
$check->bind_result($count);
$check->fetch();
$check->close();

// Check if the date and time already exist
if ($count > 0) {
    include("fail.html");
} else {
    // Prepare and bind the insert statement
    $sql = $conn->prepare("INSERT INTO clients_booking_details (firstname, lastname, email, mobile, booking_date, booking_time) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $name, $lname, $email, $mobile, $date, $time);

    // Execute the statement
    if ($sql->execute()) {
        include('success.html');
    } else {
        echo "Failed to insert: " . $sql->error;
    }

    $sql->close();
}

$conn->close();
?>
