<?php
    include '../include/config.php';
    include '../include/check_session.php';
    include '../include/check_logout.php';

function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM production WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productionLine = sanitizeInput($_POST['production_line']);
        $id = sanitizeInput($_POST['id']);
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
            ID = '$id',
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
            echo "Update data success";
        } else {
            echo "Error: Updating" . mysqli_error($conn);
        }
    }

?>
<!-- update database -->