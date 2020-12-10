<?php
include_once('../conn.php');

$sql = 'INSERT INTO currencies (`CurrenciesID`,`Symbol`,`Currency`) 
            VALUES ("'.$_POST['id'].'","'.$_POST['symbol'].'","'.$_POST['currency'].'") ';

if(mysqli_query($conn,$sql)){
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>