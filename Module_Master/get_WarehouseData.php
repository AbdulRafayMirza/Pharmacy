<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM warehouses';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['Id'];
        echo'
        <tr id="'.$id.'" onclick="rowselect('.$id.');">
            <td>'.$row['WarehouseId'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['WarehouseName'].'</td>
            <td>'.$row['WarehouseCity'].'</td>
        </tr>';
    }
?>