<?php
include_once('../conn.php');

$sql = 'INSERT INTO banksetup (`BankID`,`Name`,`Address`,`Contact`,`AccountNumber`) 
            VALUES ("'.$_POST['Id'].'","'.$_POST['name'].'","'.$_POST['address'].'","'.$_POST['contact'].'",
                    "'.$_POST['accountnumber'].'") ';

if(mysqli_query($conn,$sql)){
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>