<?php
    include 'include/config.php';
    include 'include/check_session.php';
    include 'include/check_logout.php';

function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM production WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productionLine = sanitizeInput($_POST['production_line']);
        $itemNumber = sanitizeInput($_POST['item_number']);
        $description = sanitizeInput($_POST['description']);
        $productionRate = sanitizeInput($_POST['production_rate']);
        $rateHours = sanitizeInput($_POST['rate_hours']);
        $qualityOrdered = sanitizeInput($_POST['quality_ordered']);
        $qualityComplete = sanitizeInput($_POST['quality_complete']);
        $qtyOpen = sanitizeInput($_POST['qty_open']);
        $orderDate = sanitizeInput($_POST['order_date']);
        $releaseDate = sanitizeInput($_POST['release_date']);
        $dueDate = sanitizeInput($_POST['due_date']);
        $salesJob = sanitizeInput($_POST['sales_job']);
        $woStat = sanitizeInput($_POST['wo_stat']);

        $updateSql = "UPDATE production SET 
            Production_Line = '$productionLine',
            Item_Number = '$itemNumber',
            Description = '$description',
            Production_Rate = '$productionRate',
            Rate_Hours = '$rateHours',
            Quality_Ordered = '$qualityOrdered',
            Quality_Complete = '$qualityComplete',
            QTY_Open = '$qtyOpen',
            Order_Date = '$orderDate',
            Release_Date = '$releaseDate',
            Due_Date = '$dueDate',
            `Sales/Job` = '$salesJob',
            WO_Stat = '$woStat'
            WHERE ID = $id";

        if (mysqli_query($conn, $updateSql)) {
            echo "<script>alert('Data Update Success');</script>";
            echo "<script>window.location.href = 'display_table.php';</script>";
        } else {
            echo "Error: Updating" . mysqli_error($conn);
        }
    }
}
?>
<!-- update database -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_update.css">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
<body>
<?php include 'include/index.php'; ?>
    <h1>Edit Data</h1>
    <form id="myForm"  method="post">
        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

        <label for="production_line">Production Line:</label>
        <input type="text" name="production_line" value="<?php echo $row['Production_Line']; ?>">

        <label for="item_number">Item Number:</label>
        <input type="text" name="item_number" value="<?php echo $row['Item_Number']; ?>">

        <label for="description">Description:</label>
        <input type="text" name="description" value="<?php echo $row['Description']; ?>">

        <label for="production_rate">Production Rate:</label>
        <input type="text" name="production_rate" value="<?php echo $row['Production_Rate']; ?>">

        <label for="rate_hours">Rate Hours:</label>
        <input type="text" name="rate_hours" value="<?php echo $row['Rate_Hours']; ?>">

        <label for="quality_ordered">Quality Ordered:</label>
        <input type="text" name="quality_ordered" value="<?php echo $row['Quality_Ordered']; ?>">

        <label for="quality_complete">Quality Complete:</label>
        <input type="text" name="quality_complete" value="<?php echo $row['Quality_Complete']; ?>">

        <label for="qty_open">QTY Open:</label>
        <input type="text" name="qty_open" value="<?php echo $row['QTY_Open']; ?>">

        <label for="order_date">Order Date:</label>
        <input type="date" name="order_date" value="<?php echo $row['Order_Date']; ?>">

        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date" value="<?php echo $row['Release_Date']; ?>">

        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date" value="<?php echo $row['Due_Date']; ?>">

        <label for="sales_job">Sales/Job:</label>
        <input type="text" name="sales_job" value="<?php echo $row['Sales/Job']; ?>">

        <label for="wo_stat">WO Stat:</label>
        <input type="text" name="wo_stat" value="<?php echo $row['WO_Stat']; ?>">
        <div class="form-buttons">
                <input type="submit" value="Submit">
                <button type="button" onclick="window.location.href='display_table.php'">Cancel</button>
            </div></form>
    
            <script>
            document.getElementById('myForm').addEventListener('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(this);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', this.action, true);
                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 400) {
                        alert('Data Update Success');
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
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
