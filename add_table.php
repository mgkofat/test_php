<?php include 'include/function_add.php'; ?>
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
    <?php include 'include/index.php'; ?>
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

        <script>

            function checkData() {

                var production_line = document.getElementById("production_line").value;
                if (production_line == "") {
                    document.getElementById("error_prdline").innerHTML = "Production Line is required!";
                }
                else  document.getElementById("error_prdline").innerHTML = "";

                var id = document.getElementById("ID").value;
                if (id == "") {
                    document.getElementById("error_IDline").innerHTML = "ID is required!";
                }
                else  document.getElementById("error_IDline").innerHTML = "";

                var item_number = document.getElementById("item_number").value;
                if (item_number == "") {
                    document.getElementById("error_item_number").innerHTML = "Item Number is required!";
                
                }   else  document.getElementById("error_item_number").innerHTML = "";

                var description = document.getElementById("description").value;
                if (description == "") {
                    document.getElementById("error_description").innerHTML = "Description is required!";
                
                }else  document.getElementById("error_description").innerHTML = "";

                var production_rate = document.getElementById("production_rate").value;
                if (production_rate == "") {
                    document.getElementById("error_production_rate").innerHTML = "Production Rate is required!";
                }else  document.getElementById("error_production_rate").innerHTML = "";

                var rate_hours = document.getElementById("rate_hours").value;
                if (rate_hours == "") {
                    document.getElementById("error_rate_hours").innerHTML = "Rate Hours is required!";
                }else  document.getElementById("error_rate_hours").innerHTML = "";

                var quality_ordered = document.getElementById("quality_ordered").value;
                if (quality_ordered == "") {
                    document.getElementById("error_quality_ordered").innerHTML = "Quality Ordered is required!";

                }else  document.getElementById("error_quality_ordered").innerHTML = "";

                var quality_complete = document.getElementById("quality_complete").value;
                if (quality_complete == "") {
                    document.getElementById("error_quality_complete").innerHTML = "Quality Complete is required!";
                }else  document.getElementById("error_quality_complete").innerHTML = "";

                var qty_open = document.getElementById("qty_open").value;
                if (qty_open == "") {
                    document.getElementById("error_qty_open").innerHTML = "QTY Open is required!";
                }else  document.getElementById("error_qty_open").innerHTML = "";

                var order_date = document.getElementById("order_date").value;
                if (order_date == "") {
                    document.getElementById("error_order_date").innerHTML = "Order Date is required!";
                }else  document.getElementById("error_order_date").innerHTML = "";

                var release_date = document.getElementById("release_date").value;
                if (release_date == "") {
                    document.getElementById("error_release_date").innerHTML = "Release Date is required!";
                }else  document.getElementById("error_release_date").innerHTML = "";

                var due_date = document.getElementById("due_date").value;
                if (due_date == "") {
                    document.getElementById("error_due_date").innerHTML = "Due Date is required!";
                }else  document.getElementById("error_due_date").innerHTML = "";

                var sales_job = document.getElementById("sales_job").value;
                if (sales_job == "") {
                    document.getElementById("error_sales_job").innerHTML = "Sales/Job is required!";
                }else  document.getElementById("error_sales_job").innerHTML = "";

                var wo_stat = document.getElementById("wo_stat").value;
                if (wo_stat == "") {
                    document.getElementById("error_wo_stat").innerHTML = "WO Stat is required!";
                }else  document.getElementById("error_wo_stat").innerHTML = "";

                if (production_line == "" || id == "" || item_number == ""||description == ""||production_rate == ""||rate_hours == ""||quality_ordered == ""
                ||release_date == ""||due_date==""||sales_job==""||wo_stat=="") {
                    return false;
                } else {
                    if (confirm("Are you sure to add new data?")) {
                        return true;
                    } else {
                        return false;
                    }
                }
                
            }


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


    