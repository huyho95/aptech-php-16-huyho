<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Create database
// $sql = "CREATE DATABASE huydb";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);
//
// sql to create table

// $sql = "CREATE TABLE huydb.roles (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(50) UNIQUE 
//     )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// mysqli_close($conn);
// $sql = "CREATE TABLE huydb.users (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(50),
//     email VARCHAR(255) UNIQUE,
//     password VARCHAR(50),
//     role INT DEFAULT 1,
//     FOREIGN KEY (role) REFERENCES roles(id)
//     )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// mysqli_close($conn);
// $sql = "INSERT INTO huydb.roles (name)
// VALUES
// ('Director'),
// ('Teacher'),
// ('Student')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
$sql = "INSERT INTO huydb.users (name,email,password, role)
VALUES
('Nam','nam.nguyenhai@axonactive.com','123456',1),
('Nhut','nam.nguyenhai@yuriqa.com','123',2)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
