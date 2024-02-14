<?php include 'update_table_sql.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_update.css">
    <link rel="stylesheet" href="../style.css">
    <title>Edit Data</title>
</head>
<body>
<?php include '../include/head.php'; ?>
    <h1>Edit Data</h1>
    <form id="myForm"  method="post" >
        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
        
        <div>
            <label for="production_line">Production Line:</label>
            <input type="text" id="production_line" name="production_line" value="<?php echo $row['Production_Line']; ?>">
            <div class="error" id="error_prdline"></div>
        </div>

        <div>
            <label for="id">ID:</label>
            <input type="text" id="ID" name="id" value="<?php echo $row['ID']; ?>"readonly>
            <div class="error" id="error_IDline"></div>
        </div>

        <div>
            <label for="item_number">Item Number:</label>
            <input type="text" id="item_number" name="item_number" value="<?php echo $row['Item_Number']; ?>">
            <div class="error" id="error_item_number"></div>
        </div>

        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="<?php echo $row['Description']; ?>">
            <div class="error" id="error_description"></div>
        </div>

        <div>
            <label for="production_rate">Production Rate:</label>
            <input type="text" id="production_rate" name="production_rate" value="<?php echo $row['Production_Rate']; ?>">
            <div class="error" id="error_production_rate"></div>
        </div>

        <div>
            <label for="rate_hours">Rate Hours:</label>
            <input type="text" id="rate_hours" name="rate_hours" value="<?php echo $row['Rate_Hours']; ?>">
            <div class="error" id="error_rate_hours"></div>
        </div>

        <div>
            <label for="quality_ordered">Quality Ordered:</label>
            <input type="text" id="quality_ordered" name="quality_ordered" value="<?php echo $row['Quality_Ordered']; ?>">
            <div class="error" id="error_quality_ordered"></div>
        </div>

        <div>
            <label for="quality_complete">Quality Complete:</label>
            <input type="text" id="quality_complete" name="quality_complete" value="<?php echo $row['Quality_Complete']; ?>">
            <div class="error" id="error_quality_complete"></div>
        </div>

        <div>
            <label for="qty_open">QTY Open:</label>
            <input type="text" id="qty_open" name="qty_open" value="<?php echo $row['QTY_Open']; ?>">
            <div class="error" id="error_qty_open"></div>
        </div>

        <div>
            <label for="order_date">Order Date:</label>
            <input type="date" id="order_date" name="order_date" value="<?php echo $row['Order_Date']; ?>">
            <div class="error" id="error_order_date"></div>
        </div>

        <div>
            <label for="release_date">Release Date:</label>
            <input type="date" id="release_date" name="release_date" value="<?php echo $row['Release_Date']; ?>">
            <div class="error" id="error_release_date"></div>
        </div>

        <div>
            <label for="due_date">Due Date:</label>
            <input type="date" id="due_date" name="due_date" value="<?php echo $row['Due_Date']; ?>">
            <div class="error" id="error_due_date"></div>
        </div>

        <div>
            <label for="sales_job">Sales/Job:</label>
            <input type="text" id="sales_job" name="sales_job" value="<?php echo $row['Sales/Job']; ?>">
            <div class="error" id="error_sales_job"></div>
        </div>

        <div>
            <label for="wo_stat">WO Stat:</label>
            <input type="text" id="wo_stat" name="wo_stat" value="<?php echo $row['WO_Stat']; ?>">
            <div class="error" id="error_wo_stat"></div>
        </div>

        <div class="form-buttons">
            <input type="button" onclick="return checkData();" value="Submit">
            <button type="button" onclick="window.location.href='../display_table.php'">Cancel</button>
        </div>
        <div class="status" id="status" ></div>
        <script src="update_table.js"></script>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
