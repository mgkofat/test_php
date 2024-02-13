<?php
include 'include/config.php';
include 'include/check_session.php';
include 'include/check_logout.php';

if (isset($_GET['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM user
            WHERE 
              user_id LIKE '%$searchTerm%' OR
              email LIKE '%$searchTerm%' OR
              full_name LIKE '%$searchTerm%' OR
              phone LIKE '%$searchTerm%'
            ORDER BY user_id ASC";
} else {
    $sql = "SELECT * FROM user ORDER BY user_id ASC";
}

$result = mysqli_query($conn, $sql);
?>

<!-- search and pull database -->