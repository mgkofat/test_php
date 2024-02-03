<?php
include 'config.php';
include 'index.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
        $sql = "DELETE FROM production WHERE ID = $id";

        if (mysqli_query($conn, $sql)) {
            header("Location: display_table.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_delete.css">
        <title>Confirm Deletion</title>
    </head>
    <body>
        <h1>Confirm Delete</h1>
        <p>Are you sure you to delete?</p>
        <form method="post" action="">
            <input type="submit" name="delete" value="Submit">
            <a href="display_table.php" class="cancel">Cancel</a>
        </form>
    </body>
    </html>
    <?php
} else {
    header("Location: display_table.php");
    exit();
}

mysqli_close($conn);
?>
