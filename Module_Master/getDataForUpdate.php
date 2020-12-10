<?php
include_once('../conn.php');

$data = new \StdClass;
$sql = 'SELECT * FROM ' . $_POST['tableName'] . ' WHERE ' . $_POST['columnToSearch'] . ' = ' . $_POST['searchId'];
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    $data->message = 'Data not found';
    echo json_encode($data);
}

?>