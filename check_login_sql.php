<?php
session_start();
include 'include/config.php';

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$input_username' AND password = '$input_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $session = bin2hex(random_bytes(32));
        $_SESSION['username'] = $input_username;
        $_SESSION['session'] = $session;

        if (empty($row['session'])) {
            $updateSql = "UPDATE user SET session = '$session' WHERE username = '$input_username'";
            mysqli_query($conn, $updateSql);

            header("Location: display_table.php");
            exit;
        } else {
            if ($_SESSION['session'] != $row['session']) {
                session_destroy();
                $error_message = "Account has been login into another device.";
            }
        }
    } else {
        $error_message = "Invalid username or password";
    }
}
?>
<!-- check login -->