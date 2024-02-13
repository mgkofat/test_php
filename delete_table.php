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
    <script src="delete_table.js"></script>
    </body>
    </html>
