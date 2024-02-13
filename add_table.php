<?php include 'add_table_sql.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_add.css">
        <link rel="stylesheet" href="style.css">
        <title>Add</title>
    </head>
    <body>
    <?php include 'include/head.php'; ?>
        <h1>Add</h1>
        <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="production_line">Production Line:</label>
            <input type="text" id="production_line" name="production_line">
            <div class="error" id="error_prdline"></div>
        </div>

        <div>
            <label for="id">ID:</label>
            <input type="text" id="ID" name="id">
            <div class="error" id="error_IDline"></div>
        </div>

        <div>
            <label for="item_number">Item Number:</label>
            <input type="text" id="item_number" name="item_number">
            <div class="error" id="error_item_number"></div>
        </div>

        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description">
            <div class="error" id="error_description"></div>
        </div>

        <div>
            <label for="production_rate">Production Rate:</label>
            <input type="text" id="production_rate" name="production_rate">
            <div class="error" id="error_production_rate"></div>
        </div>

        <div>
            <label for="rate_hours">Rate Hours:</label>
            <input type="text" id="rate_hours" name="rate_hours">
            <div class="error" id="error_rate_hours"></div>
        </div>

        <div>
            <label for="quality_ordered">Quality Ordered:</label>
            <input type="text" id="quality_ordered" name="quality_ordered">
            <div class="error" id="error_quality_ordered"></div>
        </div>

        <div>
            <label for="quality_complete">Quality Complete:</label>
            <input type="text" id="quality_complete" name="quality_complete">
            <div class="error" id="error_quality_complete"></div>
        </div>

        <div>
            <label for="qty_open">QTY Open:</label>
            <input type="text" id="qty_open" name="qty_open">
            <div class="error" id="error_qty_open"></div>
        </div>

        <div>
            <label for="order_date">Order Date:</label>
            <input type="date" id="order_date" name="order_date">
            <div class="error" id="error_order_date"></div>
        </div>

        <div>
            <label for="release_date">Release Date:</label>
            <input type="date" id="release_date" name="release_date">
            <div class="error" id="error_release_date"></div>
        </div>

        <div>
            <label for="due_date">Due Date:</label>
            <input type="date" id="due_date" name="due_date">
            <div class="error" id="error_due_date"></div>
        </div>

        <div>
            <label for="sales_job">Sales/Job:</label>
            <input type="text" id="sales_job" name="sales_job">
            <div class="error" id="error_sales_job"></div>
        </div>

        <div>
            <label for="wo_stat">WO Stat:</label>
            <input type="text" id="wo_stat" name="wo_stat">
            <div class="error" id="error_wo_stat"></div>
        </div>

        <div class="form-buttons">
            <input type="submit" onclick="return checkData();" value="Submit">
            <button type="button" onclick="window.location.href='display_table.php'">Cancel</button>
        </div>
        <script src="add_table.js"></script>
    </body>
    </html>


    