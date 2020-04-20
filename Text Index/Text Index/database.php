<?php
$dbServername = "wwwlab.iit.his.se";
$dbUsername = "sqllab";
$dbPassword = "Tomten2009";
$dbName = "rdatabase";


// Create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
