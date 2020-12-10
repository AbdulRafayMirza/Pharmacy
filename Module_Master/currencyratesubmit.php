<?php
include_once('../conn.php');

$sql = 'INSERT INTO currencyrate (`CurrencyrateID`,`CalculationMethod`,`Rate`,`Currency`,`Date`) 
            VALUES ("'.$_POST['id'].'","'.$_POST['calcmethod'].'","'.$_POST['rate'].'","'.$_POST['currency'].'","'.$_POST['date'].'") ';

if(mysqli_query($conn,$sql)){
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>