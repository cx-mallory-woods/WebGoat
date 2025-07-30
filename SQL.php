<?php
// WARNING: This code is intentionally insecure for educational purposes!

// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Get username and password input directly from the request
$username = $_GET['username'];
$password = $_GET['password'];

// Build the SQL query with UNSAFE interpolation
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Login successful!";
} else {
    echo "Login failed!";
}
?>


