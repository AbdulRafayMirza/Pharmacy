<?php
include_once('../conn.php');

$sqlSearchEmployee = 'SELECT * FROM banksetup WHERE BankID = ' . $_POST['Id'];
$resultSearchEmployee = $conn->query($sqlSearchEmployee);
if($resultSearchEmployee->num_rows > 0) {
    $sqlDelete = 'DELETE FROM banksetup WHERE BankID = ' . $_POST['Id'];
    if($conn->query($sqlDelete)) {
        $sql = 'INSERT INTO banksetup (`BankID`,`Name`,`Address`,`Contact`,`AccountNumber`) 
            VALUES ("'.$_POST['Id'].'","'.$_POST['name'].'","'.$_POST['address'].'","'.$_POST['contact'].'",
                "'.$_POST['accountnumber'].'") ';

        if(mysqli_query($conn,$sql)){
            echo'Form Has Been Updated';
        } else {
            echo $sql;
        }

    }
} else {
    $sql = 'INSERT INTO banksetup (`BankID`,`Name`,`Address`,`Contact`,`AccountNumber`) 
                VALUES ("'.$_POST['Id'].'","'.$_POST['name'].'","'.$_POST['address'].'","'.$_POST['contact'].'",
                        "'.$_POST['accountnumber'].'") ';

    if(mysqli_query($conn,$sql)){
        echo'Form Has Been Submitted';
    } else {
        echo $sql;
    }
}
?>