<?php
    include 'include/config.php';
    include 'include/check_session.php';
    include 'include/check_logout.php';

function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE user_id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $updateSql = "UPDATE user SET 
        user_id = '$user_id ',
        username  ='$username',
        password = '$password',
        full_name  = '$full_name',
        email   = '$email',
        phone   = '$phone',
        session = session
            WHERE user_id = $id";

        if (mysqli_query($conn, $updateSql)) {
            echo "<script>alert('Data Update Success');</script>";
            echo "<script>window.location.href = 'user_display.php';</script>";
        } else {
            echo "Error: Updating" . mysqli_error($conn);
        }
    }
}
?>
<!-- update database -->