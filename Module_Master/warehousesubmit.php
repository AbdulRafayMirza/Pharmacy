<?php
include_once('../conn.php');

$sql = 'INSERT INTO warehouses (`WarehouseId`,`Address`,`WarehouseName`,`WarehouseCity`) 
            VALUES ("'.$_POST['warehouseid'].'","'.$_POST['address'].'","'.$_POST['warehousename'].'","'.$_POST['warehousecity'].'") ';

if(mysqli_query($conn,$sql)){
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>