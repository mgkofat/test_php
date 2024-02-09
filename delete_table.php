<?php include 'include/function_del.php'; ?>
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_delete.css">
        <link rel="stylesheet" href="style.css">
        <title>Confirm Deletion</title>
    </head>
    <body>
    <?php include 'include/index.php'; ?>
        <h1>Confirm Delete</h1>
        <p>Are you sure you to delete?</p>
        <div class="container">
        <form id="delete" method="post" action="" onsubmit="deleteData()">
            <input type="submit" name="delete" value="Submit" class="submit-btn">
            <a href="display_table.php" class="cancel">Cancel</a>
        </form>
    </div>

        <script>
            function deleteData() {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert('Data Delete Success');
                            window.location.href = 'display_table.php';
                        } else {
                            alert('Error: ' + xhr.statusText);
                        }
                    }
                };

                xhr.open('POST', 'delete_table.php?id=<?php echo $id; ?>', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send();
            }
        </script>
    </body>
    </html>
