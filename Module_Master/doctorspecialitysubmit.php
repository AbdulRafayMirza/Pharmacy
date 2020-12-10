<?php
include_once('../conn.php');

$sql = 'INSERT INTO doctorspeciality (`SpecialityID`,`Description`) VALUES ("'.$_POST['id'].'","'.$_POST['description'].'") ';

if(mysqli_query($conn,$sql)){
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>