<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Use your MySQL password if set
$database = "user_data"; // Ensure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from form
$user = $_POST['username'];
$pass = $_POST['password'];

// Insert data into users table
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
