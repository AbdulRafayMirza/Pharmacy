<?php
include_once('../conn.php');

$sql = 'INSERT INTO packingtype (`PackingID`,`Description`,`PackingType`) VALUES ("'.$_POST['packingid'].'","'.$_POST['description'].'","'.$_POST['packingtype'].'") ';

if(mysqli_query($conn,$sql)){

    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>