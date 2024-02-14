$(document).ready(function () {

    $("#cancelBtn").click(function () {
        window.location.href = '../user_display.php';
    });
});

// ***
// Send data
function sendData(){
    // Recived data
    var user_id = $("#user_id").val();
    var password = $("#password").val();
    var username = $("#username").val();
    var full_name = $("#full_name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();

    // Check data
    if (user_id == "") {
        $("#error_user_id").html("ID is required!");
    } else if (!Number.isInteger(Number(user_id))) {
        $("#error_user_id").html("ID must be a valid number!");
        var check_user_id = true;
    } else {
        $("#error_user_id").html("");
        var check_user_id = false
   }

    
    if (password == "") {
        $("#error_password").html("Password is required!");
    } else {
        $("#error_password").html("");
    }

    if (username == "") {
        $("#error_username").html("Username is required!");
    } else {
        $("#error_username").html("");
    }

    if (full_name == "") {
        $("#error_full_name").html("Full Name is required!");
    } else {
        $("#error_full_name").html("");
    }

    if (email == "") {
        $("#error_email").html("Email is required!");
        var check_email = false;
    } else if (!isValidEmail(email)) {
        $("#error_email").html("Invalid email format!");
        var check_email = true;
    } else {
        $("#error_email").html("");
    }

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
    } 

    // Send Data
    const formData = new FormData();
    formData.append("user_id",user_id);
    formData.append("password",password);
    formData.append("username",username);
    formData.append("full_name",full_name);
    formData.append("email",email);
    formData.append("phone",phone);


    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_user_sql.php');
    xhr.send(formData);
    xhr.onreadystatechange=function(){
            console.log(xhr.readyState);
            console.log(xhr.status);
        }

    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            console.log("Save data success");
            document.getElementById("status").innerHTML="Save data success"
        } else {
            console.log("Error"+ xhr.responseText);
            document.getElementById("status").innerHTML="Error"+ xhr.responseText;
        }
    };
}

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhoneNumber(phone) {
    var phoneRegex = /^\d+$/;
    return phoneRegex.test(phone);
}