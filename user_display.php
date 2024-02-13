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
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>
</head>
<body>
    <?php include 'include/head.php'; ?>
    <h1>Table User</h1>

    <div class="search-container">
    <form action="" method="GET" class="display">
        <input type="text" name="search" placeholder="Search...">
        <input type="submit" value="Search">
    </form>
    <td><a href='add_user.php' class='update_button' id='add_user'>Add</a></td>
    </div>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        
        <?php
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['full_name']}</td>
                    <td>{$row['email']}</td>
                    <td>0{$row['phone']}</td>
                    <td><a href='update_user.php?id={$row['user_id']}' class='update_button'id='update_button_user'style='width: 92%;'>Update</a></td>
                    <td><a href='delete_user.php?id={$row['user_id']}'class='remove_button' id='remove_button_user'style='width: 93%;'>Remove</a></td>
                     </tr>";
        }
        ?>
    </table>
    
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
