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