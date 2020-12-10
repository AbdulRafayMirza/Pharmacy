<?php
include_once('../conn.php');

$sql = 'INSERT INTO itemcompany (`CompanyID`,`CompanyName`) VALUES ("'.$_POST['companyid'].'","'.$_POST['companyname'].'") ';

if(mysqli_query($conn,$sql)){

    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>