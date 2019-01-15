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

$sql = "SELECT * FROM huy_news.User limit 5";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
     while ($row = $result->fetch_assoc()) {
        echo " UserID : " . $row["uId"] . " - Full Name : " . $row["uLastName"] . " " . $row["uFirstName"] . " - Email : " . $row["uEmail"] . "<br>";
    }
} else {
echo "0 results";
}

mysqli_close($conn);
?>