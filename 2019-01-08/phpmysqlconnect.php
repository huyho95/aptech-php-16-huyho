<?php
$serverName = "localhost";
$database = "aptech-php16-huyho";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $database, $userName, $password);
if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
echo "Connected successfully";
$conn->close();
?>