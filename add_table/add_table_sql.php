<?php
    include '../include/config.php';
    include '../include/check_session.php';
    include '../include/check_logout.php';

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
        $user_id =  $_POST['user_id'];

        if (isset($productionLine)){
            $insertQuery = "INSERT INTO production (Production_Line, ID, Item_Number, Description, Production_Rate, Rate_Hours, Quality_Ordered, Quality_Complete, QTY_Open, Order_Date, Release_Date, Due_Date, `Sales/Job`, WO_Stat, user_id) VALUES ('$productionLine', '$id', '$itemNumber', '$description', '$productionRate', '$rateHours', '$qualityOrdered', '$qualityComplete', '$qtyOpen', '$orderDate', '$releaseDate', '$dueDate', '$salesJob', '$woStat', '$user_id')";

        if (mysqli_query($conn, $insertQuery)) {
            echo "Add data success";

        } else {
            echo "Error: Inserting" . mysqli_error($conn);
        }
    }
    }
    
    mysqli_close($conn);
    ?>
    <!-- insert database -->