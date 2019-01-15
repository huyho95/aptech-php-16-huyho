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

// sql to create table
$sql = "CREATE TABLE huy_news.User (
    uId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uLastName varchar(255),
    uFirstName varchar(255),
    uEmail varchar(255) NOT NULL UNIQUE,
    uRole int NOT NULL DEFAULT 2,
    uState int NOT NULL DEFAULT 1,
    uCreatedDate datetime NOT NULL DEFAULT NOW(),
    uModifiedDate datetime
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>