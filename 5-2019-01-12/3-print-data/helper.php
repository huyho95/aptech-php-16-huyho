<?php
function connectDatabase($serverName = "localhost", $userName = "root", $password = "", $dbname = "huydb")
{
    $conn = mysqli_connect($serverName, $userName, $password, $dbname);
    if (!$conn) {
        return die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}