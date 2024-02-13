<?php     
    session_start();
if (empty($_SESSION['username']) && empty($_SESSION['session'])) {
    header("Location: index.php");
    exit();
}
?>
<!-- check session -->