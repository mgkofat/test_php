
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
        <form method="post" action="check_login_sql.php">
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
             <?php if ($error_message !== "") { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>
        </form>
    </div>
</body>
</html>
