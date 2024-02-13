<?php
include 'include/config.php';
include 'include/check_session.php';
include 'include/check_logout.php';
if (isset($_GET['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT Production_Line, ID, Item_Number, Description, Production_Rate, Rate_Hours, Quality_Ordered, Quality_Complete, QTY_Open, Order_Date, Release_Date, Due_Date, `Sales/Job`, WO_Stat FROM production 
            WHERE 
                Production_Line LIKE '%$searchTerm%' OR
              ID LIKE '%$searchTerm%' OR
              Item_Number LIKE '%$searchTerm%' OR
              Description LIKE '%$searchTerm%' OR
              Production_Rate LIKE '%$searchTerm%' OR
              Rate_Hours LIKE '%$searchTerm%' OR
              Quality_Ordered LIKE '%$searchTerm%' OR
              Quality_Complete LIKE '%$searchTerm%' OR
              QTY_Open LIKE '%$searchTerm%' OR
              Order_Date LIKE '%$searchTerm%' OR
              Release_Date LIKE '%$searchTerm%' OR
              Due_Date LIKE '%$searchTerm%' OR
              `Sales/Job` LIKE '%$searchTerm%' OR
              WO_Stat LIKE '%$searchTerm%'
        ORDER BY ID ASC";
} else {
    $sql = "SELECT Production_Line, ID, Item_Number, Description, Production_Rate, Rate_Hours, Quality_Ordered, Quality_Complete, QTY_Open, Order_Date, Release_Date, Due_Date, `Sales/Job`, WO_Stat FROM production ORDER BY ID ASC";
}

$result = mysqli_query($conn, $sql);
?>
<!-- search and pull database -->
