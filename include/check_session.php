<?php     
    session_start();
if (empty($_SESSION['username']) && empty($_SESSION['session'])) {
    header("Location: login_form.php");
    exit();
}
?>
<!-- check session -->