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
    <?php include 'include/index.php'; ?>
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
         
        <script>
         $(document).ready(function () {
        $("#submitBtn").click(function () {
            return checkData();
        });

        $("#cancelBtn").click(function () {
            window.location.href = 'display_table.php';
        });
    });

    function checkData() {
        var user_id = $("#user_id").val();
        if (user_id == "") {
            $("#error_user_id").html("ID is required!");
        } else {
            $("#error_user_id").html("");
        }
        
        var password = $("#password").val();
        if (password == "") {
            $("#error_password").html("Password is required!");
        } else {
            $("#error_password").html("");
        }

        var username = $("#username").val();
        if (username == "") {
            $("#error_username").html("Username is required!");
        } else {
            $("#error_username").html("");
        }

        var full_name = $("#full_name").val();
        if (full_name === "") {
            $("#error_full_name").html("Full Name is required!");
        } else {
            $("#error_full_name").html("");
        }

        var email = $("#email").val();
        if (email === "") {
            $("#error_email").html("Email is required!");
        } else {
            $("#error_email").html("");
        }

        var phone = $("#phone").val();
        if (phone === "") {
            $("#error_phone").html("Phone is required!");
        } else {
            $("#error_phone").html("");
        }

        if (user_id==''||password==''||username==''||full_name==''||email==''||phone=='') {
            return false;
        } else {
            if (confirm("Are you sure to add new data?")) {
                return true;
            } else {
                return false;
            }
        }
    }
            document.getElementById('myForm').addEventListener('submit', function(event) {
                event.preventDefault(); 

                var formData = new FormData(this);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', this.action, true);
                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 400) {
                        alert('Data Inserted Success');
                        window.location.href = 'user_table.php';
                    } else {
                        alert('Error: Inserting' + xhr.responseText);
                    }
                };

                xhr.onerror = function() {
                    alert('Request failed');
                };

                xhr.send(formData);
            });
        </script>
    </body>
    </html>


    