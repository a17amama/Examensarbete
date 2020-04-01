<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "mydata";
$dbName = "Examensarbete";


// Create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>