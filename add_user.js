$(document).ready(function () {
    $("#submitBtn").click(function () {
        return checkData_user();
    });

    $("#cancelBtn").click(function () {
        window.location.href = 'display_table.php';
    });
});

function checkData_user() {
        var user_id = $("#user_id").val();
    if (user_id == "") {
        $("#error_user_id").html("ID is required!");
    } else if (!Number.isInteger(Number(user_id))) {
        $("#error_user_id").html("ID must be a valid number!");
        var check_user_id = true;
    } else {
        $("#error_user_id").html("");
        var check_user_id = false
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
    if (full_name == "") {
        $("#error_full_name").html("Full Name is required!");
    } else {
        $("#error_full_name").html("");
    }

    var email = $("#email").val();
    if (email == "") {
        $("#error_email").html("Email is required!");
        var check_email = false;
    } else if (!isValidEmail(email)) {
        $("#error_email").html("Invalid email format!");
        var check_email = true;
    } else {
        $("#error_email").html("");
    }


    var phone = $("#phone").val();
    if (phone == "") {
        $("#error_phone").html("Phone is required!");
        var check_phone = false;
    } else if (!isValidPhoneNumber(phone)) {
        $("#error_phone").html("Invalid phone number!");
        var check_phone = true;
    } else {
        $("#error_phone").html("");
    }

    if (user_id==''||password==''||username==''||full_name==''||email==''||phone==''||check_user_id==true||check_email == true||check_phone == true) {
        return false;
    } else {
        if (confirm("Are you sure to add new data?")) {
            return true;
        } else {
            return false;
        }
    }
}
        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPhoneNumber(phone) {
            var phoneRegex = /^\d+$/;
            return phoneRegex.test(phone);
        }

        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            var formData = new FormData(this);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', this.action, true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 400) {
                    alert('Data Inserted Success');
                    window.location.href = 'user_display.php';
                } else {
                    alert('Error: Inserting' + xhr.responseText);
                }
            };

            xhr.onerror = function() {
                alert('Request failed');
            };

            xhr.send(formData);
        });