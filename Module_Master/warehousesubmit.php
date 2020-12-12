<?php
include_once('../conn.php');


$sqlSearchEmployee = 'SELECT * FROM warehouses WHERE WarehouseId = ' . $_POST['warehouseid'];
$resultSearchEmployee = $conn->query($sqlSearchEmployee);
if($resultSearchEmployee->num_rows > 0) {
    $sqlDelete = 'DELETE FROM warehouses WHERE WarehouseId = ' . $_POST['warehouseid'];
    if($conn->query($sqlDelete)) {
        $sql = 'INSERT INTO warehouses (`WarehouseId`,`Address`,`WarehouseName`,`WarehouseCity`) 
            VALUES ("'.$_POST['warehouseid'].'","'.$_POST['address'].'","'.$_POST['warehousename'].'","'.$_POST['warehousecity'].'") ';

        if(mysqli_query($conn,$sql)){
            echo'Form Has Been Updated';
        } else {
            echo $sql;
        }

    }
} else {
    $sql = 'INSERT INTO warehouses (`WarehouseId`,`Address`,`WarehouseName`,`WarehouseCity`) 
        VALUES ("'.$_POST['warehouseid'].'","'.$_POST['address'].'","'.$_POST['warehousename'].'","'.$_POST['warehousecity'].'") ';

    if(mysqli_query($conn,$sql)){
        echo'Form Has Been Submitted';
    }
    else{
        echo $sql;
    }
}
