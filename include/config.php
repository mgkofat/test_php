<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "majaret";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!-- connect database -->