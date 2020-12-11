<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM warehouses';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['WarehouseId'];
        echo'
        <tr id="'.$id.'" onclick="rowselect('.$id.');" data-name="'.$row['WarehouseName'].'" data-address="'.$row['Address'].'" data-city="'.$row['WarehouseCity'].'">
            <td>'.$row['WarehouseId'].'</td>
            <td>'.$row['WarehouseName'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['WarehouseCity'].'</td>
        </tr>';
    }
?>