<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM warehouses';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['WarehouseId'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['WarehouseName'].'</td>
            <td>'.$row['WarehouseCity'].'</td>
        </tr>';
    }
?>