<?php include 'update_user_sql.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_update.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Edit Data</title>
</head>
<body>
<?php include '../include/head.php'; ?>
    <h1>Edit Data</h1>
    <h1 id="status"></h1>
    <form id="myForm"  method="post">
        <div>
            <label for="user_id">ID:</label>
            <input type="text" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>" readonly>
            <div class="error" id="error_user_id" ></div>
        </div>

        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>">
            <div class="error" id="error_username"></div>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>">
            <div class="error" id="error_password"></div>
        </div>

        <div>
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $row['full_name']; ?>">
            <div class="error" id="error_full_name"></div>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>">
            <div class="error" id="error_email"></div>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="0<?php echo $row['phone']; ?>">
            <div class="error" id="error_phone"></div>
        </div>

        <div class="form-buttons">
            <input type="button" id="submitBtn" value="Submit" onclick="return checkData();" >
            <button type="button" id="cancelBtn">Cancel</button>
        </div>
        <script src="update_user.js"></script>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
