<?php
include_once('../conn.php');


$sql = 'SELECT MAX(CAST('.$_POST['columnName'].' AS DECIMAL)) as maxid FROM ' . $_POST['tableName'];
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    $count = $row['maxid'] + 1;
} else {
    $count = 1;
}
echo $count;

?>