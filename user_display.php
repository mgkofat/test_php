<?php include 'check_user_display_sql.php'; ?>
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
    <h1>Table Production</h1>

    <div class="search-container">
    <form action="" method="GET" class="display">
        <input type="text" name="search" placeholder="Search...">
        <input type="submit" value="Search">
        <td><a href='add_user.php' class='update_button'>Add</a></td>
    </form>
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
                    <td>{$row['phone']}</td>
                </tr>";
        }
        ?>
    </table>

    <?php
    mysqli_close($conn);
    ?>
</body>
</html>