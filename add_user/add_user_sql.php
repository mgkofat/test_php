
<?php
    include '../include/config.php';
    include '../include/check_session.php';
    include '../include/check_logout.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $session='';
        if (isset($username)){
            $sql = "INSERT INTO user (user_id, username, password, full_name, email, phone,session) 
            VALUES ('$user_id', '$username', '$password', '$full_name', '$email', '$phone','$session')";


        if (mysqli_query($conn, $sql)) {
           echo "Add data success";

        } else {
            echo "Error: Inserting" . mysqli_error($conn);
        }
    }
    }
    
    mysqli_close($conn);
    ?> 
    <!-- insert database -->