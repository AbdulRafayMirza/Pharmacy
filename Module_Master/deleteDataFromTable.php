<?php
include_once('../conn.php');

$sql = 'DELETE FROM ' . $_POST['tableName'] . ' WHERE ' . $_POST['columnName'] . ' = ' . $_POST['dataId'];
if(mysqli_query($conn, $sql)) {
    echo 'Data deleted successfully';
} else {
    echo 'Error occurred while deleting data';
}

?>