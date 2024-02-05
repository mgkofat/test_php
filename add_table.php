    <?php
    include 'config.php';
    include 'index.php';
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            

    </body>
    </html>

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
    <form id="myForm">
        <label for="production_line">Production Line:</label>
        <input type="text" name="production_line" required><br>

        <!-- Add other form fields as needed -->

        <div class="form-buttons">
            <input type="submit" value="Submit">
            <button type="button" onclick="window.location.href='display_table.php'">Cancel</button>
        </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("myForm");

            form.addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent the default form submission

                const formData = new FormData(form);

                const xhr = new XMLHttpRequest();
                xhr.open("POST", "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>", true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            alert('Data Inserted Success');
                            window.location.href = 'display_table.php';
                        } else {
                            alert('Error: Inserting ' + xhr.statusText);
                        }
                    }
                };

                xhr.send(formData);
            });
        });
    </script>
</body>
</html>
