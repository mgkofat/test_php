<?php
    include 'include/config.php';
    include 'include/check_session.php';
    include 'include/check_logout.php';
    
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
        $sql = "DELETE FROM user WHERE user_id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data Delete Success');</script>";
            echo "<script>window.location.href = 'user_display.php';</script>";
        } else {
            echo "Error: Deleting" . mysqli_error($conn);
        }
    }

    ?>
    <?php
} else {
    header("Location: user_display.php");
    exit();
}

mysqli_close($conn);
?>