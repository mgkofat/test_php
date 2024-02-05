<?php
include 'config.php';
include 'index.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
        $sql = "DELETE FROM production WHERE ID = $id";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data Delete Success');</script>";
            echo "<script>window.location.href = 'display_table.php';</script>";
        } else {
            echo "Error: Deleting" . mysqli_error($conn);
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
    <p>Are you sure you want to delete?</p>
    <form id="deleteForm" method="post" action="">
        <input type="submit" name="delete" value="Submit" onclick="deleteData()">
        <a href="display_table.php" class="cancel">Cancel</a>
    </form>

    <script>
        function deleteData() {
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    alert('Data Delete Success');
                    window.location.href = 'display_table.php';
                }
            };
            xmlhttp.open("POST", "delete.php?id=<?php echo $id; ?>", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("delete=1");
        }
    </script>
</body>
</html>

    <?php
} else {
    header("Location: display_table.php");
    exit();
}

mysqli_close($conn);
?>
