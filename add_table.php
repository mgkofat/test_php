    <?php
    include 'config.php';
    include 'index.php';

    
if (empty($_SESSION['username']) && empty($_SESSION['session'])) {
    header("Location: login_form.php");
    exit();
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productionLine = mysqli_real_escape_string($conn, $_POST['production_line']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $itemNumber = mysqli_real_escape_string($conn, $_POST['item_number']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $productionRate = mysqli_real_escape_string($conn, $_POST['production_rate']);
        $rateHours = mysqli_real_escape_string($conn, $_POST['rate_hours']);
        $qualityOrdered = mysqli_real_escape_string($conn, $_POST['quality_ordered']);
        $qualityComplete = mysqli_real_escape_string($conn, $_POST['quality_complete']);
        $qtyOpen = mysqli_real_escape_string($conn, $_POST['qty_open']);
        $orderDate = date('Y-m-d', strtotime(mysqli_real_escape_string($conn, $_POST['order_date'])));
        $releaseDate = date('Y-m-d', strtotime(mysqli_real_escape_string($conn, $_POST['release_date'])));
        $dueDate = date('Y-m-d', strtotime(mysqli_real_escape_string($conn, $_POST['due_date'])));
        $salesJob = mysqli_real_escape_string($conn, $_POST['sales_job']);
        $woStat = mysqli_real_escape_string($conn, $_POST['wo_stat']);

        $insertQuery = "INSERT INTO production (Production_Line, ID, Item_Number, Description, Production_Rate, Rate_Hours, Quality_Ordered, Quality_Complete, QTY_Open, Order_Date, Release_Date, Due_Date, `Sales/Job`, WO_Stat) VALUES ('$productionLine', '$id', '$itemNumber', '$description', '$productionRate', '$rateHours', '$qualityOrdered', '$qualityComplete', '$qtyOpen', '$orderDate', '$releaseDate', '$dueDate', '$salesJob', '$woStat')";


        if (mysqli_query($conn, $insertQuery)) {
            echo "<script>alert('Data Inserted Success');</script>";
            echo "<script>window.location.href = 'display_table.php';</script>";

        } else {
            echo "Error: Inserting" . mysqli_error($conn);
        }
    }
    
    mysqli_close($conn);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_add.css">
        <title>Add</title>
    </head>
    <body>
        <h1>Add</h1>
        <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="production_line">Production Line:</label>
            <input type="text" name="production_line" required><br>

            <label for="id">ID:</label>
            <input type="text" name="id" required><br>

            <label for="item_number">Item Number:</label>
            <input type="text" name="item_number" required><br>

            <label for="description">Description:</label>
            <input type="text" name="description" required><br>

            <label for="production_rate">Production Rate:</label>
            <input type="text" name="production_rate" required><br>

            <label for="rate_hours">Rate Hours:</label>
            <input type="text" name="rate_hours" required><br>

            <label for="quality_ordered">Quality Ordered:</label>
            <input type="text" name="quality_ordered" required><br>

            <label for="quality_complete">Quality Complete:</label>
            <input type="text" name="quality_complete" required><br>

            <label for="qty_open">QTY Open:</label>
            <input type="text" name="qty_open" required><br>

            <label for="order_date">Order Date:</label>
            <input type="date" name="order_date" required><br>

            <label for="release_date">Release Date:</label>
            <input type="date" name="release_date" required><br>

            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date" required><br>

            <label for="sales_job">Sales/Job:</label>
            <input type="text" name="sales_job" required><br>

            <label for="wo_stat">WO Stat:</label>
            <input type="text" name="wo_stat" required><br>

            <div class="form-buttons">
                <input type="submit" value="Submit">
                <button type="button" onclick="window.location.href='display_table.php'">Cancel</button>
            </div>
        <script>
            document.getElementById('myForm').addEventListener('submit', function(event) {
                event.preventDefault(); 

                var formData = new FormData(this);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', this.action, true);
                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 400) {
                        alert('Data Inserted Success');
                        window.location.href = 'display_table.php';
                    } else {
                        alert('Error: Inserting' + xhr.responseText);
                    }
                };

                xhr.onerror = function() {
                    alert('Request failed');
                };

                xhr.send(formData);
            });
        </script>
    </body>
    </html>


    