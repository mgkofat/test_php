<?php
session_start();
include 'config.php';

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

        $updateSql = "UPDATE user SET session = '$session' WHERE username = '$input_username'";
        mysqli_query($conn, $updateSql);

        header("Location: index.php");
        echo "login success";
    } else {
        echo "login failed";
        $error_message = "Invalid username or password";
    } 
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">

</head>
<body>
    <div class="container">
        <div class="text">
            Login Form
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="data">
                <label for="username">Username:</label>
                <input type="text" name="username" required><br>
            </div>
            <div class="data">
                <label for="password">Password:</label>
                <input type="password" name="password" required><br>
            </div>
            <div class="btn">
                <div class="inner"></div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
