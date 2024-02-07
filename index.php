<?php
    session_start();
    
    if (empty($_SESSION['username']) && empty($_SESSION['session'])) {
        header("Location: login_form.php");
        exit();
    }
    if (isset($_POST['logout'])) {
        include 'config.php';
        $username = $_SESSION['username'];
        $updateSql = "UPDATE user SET session = '' WHERE username = '$username'";
    
        if (mysqli_query($conn, $updateSql)) {
            header("Location: login_form.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        session_unset();
        session_destroy();
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Production</title>
</head>
<body>
        <nav class="narbar">
            <a>Production</a>
            <div class = 'log-out'>
            <form method="post">
                <button id="logoutButton" type="submit" name="logout">Log out</button>
            </form>
            </div>
        </nav>
        <div class="sidebar">
            <a href="display_table.php">Table</a>
            <a href="add_table.php">Add</a>
         </div>
    </body>
    <script>
        document.getElementById('logoutButton').addEventListener('click', function() {
            window.location.href = 'login_form.php';
        });
    </script>
</html>
