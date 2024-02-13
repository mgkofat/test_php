<?php  include 'include/function_add_user.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_add.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <title>Add</title>
    </head>
    <body>
    <?php include 'include/head.php'; ?>
        <h1>Add</h1>
        <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="user_id">ID:</label>
            <input type="text" id="user_id" name="user_id">
            <div class="error" id="error_user_id"></div>
        </div>

        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <div class="error" id="error_username"></div>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <div class="error" id="error_password"></div>
        </div>

        <div>
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name">
            <div class="error" id="error_full_name"></div>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <div class="error" id="error_email"></div>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
            <div class="error" id="error_phone"></div>
        </div>

        <div class="form-buttons">
            <input type="submit" id="submitBtn" value="Submit">
            <button type="button" id="cancelBtn">Cancel</button>
        </div>
        <script src="add_user.js"></script>
    </body>
    </html>


    