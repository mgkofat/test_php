<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login_form.css">
</head>
<body>
    <div class="container" id="containner">
        <div class="text" id="title-text">
            Login Form
        </div>
        <!-- ./ form title -->

        <form method="post" action="login_form_sql.php">
            <div class="data">
                <label for="username">Username:</label>
                <input type="text" name="username" required><br>
            </div>
            <!-- ./data -->
            <div class="data">
                <label for="password">Password:</label>
                <input type="password" name="password" required><br>
            </div>
            <!-- ./ data -->
            <div class="btn">
                <div class="inner"></div>
                <button type="submit">Login</button>
            </div>
            <!-- ./ data -->
             <?php if ($error_message !== "") { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>
        </form>
    </div>
    <!-- ./ containner -->
</body>
</html>
