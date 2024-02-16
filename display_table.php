<?php
include 'include/config.php';
include 'include/check_session.php';
include 'include/check_logout.php';
if (isset($_GET['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT p.Production_Line, p.ID, p.Item_Number, p.Description, p.Production_Rate, p.Rate_Hours, p.Quality_Ordered, p.Quality_Complete, p.QTY_Open, p.Order_Date, p.Release_Date, p.Due_Date, p.`Sales/Job`, p.WO_Stat, u.username
            FROM production p
            LEFT JOIN user u ON p.user_id = u.user_id
            WHERE 
                p.Production_Line LIKE '%$searchTerm%' OR
                p.ID LIKE '%$searchTerm%' OR
                p.Item_Number LIKE '%$searchTerm%' OR
                p.Description LIKE '%$searchTerm%' OR
                p.Production_Rate LIKE '%$searchTerm%' OR
                p.Rate_Hours LIKE '%$searchTerm%' OR
                p.Quality_Ordered LIKE '%$searchTerm%' OR
                p.Quality_Complete LIKE '%$searchTerm%' OR
                p.QTY_Open LIKE '%$searchTerm%' OR
                p.Order_Date LIKE '%$searchTerm%' OR
                p.Release_Date LIKE '%$searchTerm%' OR
                p.Due_Date LIKE '%$searchTerm%' OR
                p.`Sales/Job` LIKE '%$searchTerm%' OR
                p.WO_Stat LIKE '%$searchTerm%'
            ORDER BY p.ID ASC";
} else {
    $sql = "SELECT p.Production_Line, p.ID, p.Item_Number, p.Description, p.Production_Rate, p.Rate_Hours, p.Quality_Ordered, p.Quality_Complete, p.QTY_Open, p.Order_Date, p.Release_Date, p.Due_Date, p.`Sales/Job`, p.WO_Stat, u.username
    FROM production p
    LEFT JOIN user u ON p.user_id = u.user_id
    ORDER BY p.ID ASC";}

$result = mysqli_query($conn, $sql);
?>
<!-- search and pull database -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>
</head>
<body>
    <?php include 'include/head.php'; ?>
    <h1>Table Production</h1>

    <div class="search-container">
    <form action="" method="GET" class="display">
        <input type="text" name="search" placeholder="Search...">
        <input type="submit" value="Search">
    </form>
    </div>

    <table border="1">
        <tr>
            <th>Production Line</th>
            <th>ID</th>
            <th>Item Number</th>
            <th>Description</th>
            <th class='num'>Production Rate</th>
            <th class='num'>Rate Hours</th>
            <th class='num'>Quality Ordered</th>
            <th class='num'>Quality Complete</th>
            <th class='num'>QTY Open</th>
            <th class='num'>Order Date</th>
            <th class='num'>Release Date</th>
            <th class='num'>Due Date</th>
            <th>Sales/Job</th>
            <th>WO Stat</th>
            <th>Username</th>
        </tr>
        
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $orderDate = date("d/m/Y", strtotime($row['Order_Date']));
            $releaseDate = date("d/m/Y", strtotime($row['Release_Date']));
            $dueDate = date("d/m/Y", strtotime($row['Due_Date']));

            echo "<tr>
                    <td>{$row['Production_Line']}</td>
                    <td>{$row['ID']}</td>
                    <td>{$row['Item_Number']}</td> 
                    <td>{$row['Description']}</td>
                    <td class='num'>" . (is_numeric($row['Production_Rate']) ? number_format($row['Production_Rate']) : $row['Production_Rate']) . "</td>
                    <td class='num'>{$row['Rate_Hours']}</td>
                    <td class='num'>" . (is_numeric($row['Quality_Ordered']) ? number_format($row['Quality_Ordered']) : $row['Quality_Ordered']) . "</td>
                    <td class='num'>" . (is_numeric($row['Quality_Complete']) ? number_format($row['Quality_Complete']) : $row['Quality_Complete']) . "</td>
                    <td class='num'>" . (is_numeric($row['QTY_Open']) ? number_format($row['QTY_Open']) : $row['QTY_Open']) . "</td>
                    <td class='num'>{$orderDate}</td>
                    <td class='num'>{$releaseDate}</td>
                    <td class='num'>{$dueDate}</td>
                    <td>{$row['Sales/Job']}</td>
                    <td>{$row['WO_Stat']}</td>
                    <td>{$row['username']}</td>
                    <td><a href='../update_table/update_table.php?id={$row['ID']}' class='update_button'>Update</a></td>
                    <td><a href='../delete_table/delete_table.php?id={$row['ID']}' class='remove_button'>Remove</a></td>
                </tr>";
        }
        ?>
    </table>

    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
