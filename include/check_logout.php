<?php
    
    if (isset($_POST['logout'])) {
        $username = $_SESSION['username'];
        $updateSql = "UPDATE user SET session = '' WHERE username = '$username'";
    
        if (mysqli_query($conn, $updateSql)) {
            header("Location: index.php");
            session_unset();
            session_destroy();
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    
    ?>
    <!-- clear session -->