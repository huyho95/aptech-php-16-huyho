<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "huy_news";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// prepare and bind
$stmt = $conn->prepare("INSERT INTO huy_news.User (uLastName,uFirstName,uEmail,uRole) VALUES (?,?,?,?)");
$stmt->bind_param("sssi", $uLastName, $uFirstName, $uEmail, $uRole);

$uLastName = 'Ford';
$uFirstName = 'Henry';
$uEmail = "henry.ford@ford.com";
$uRole = 2;
$stmt->execute();

echo "Using Prepared to insert new data successfully";

mysqli_close($conn);
?>