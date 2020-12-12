<?php
include_once('../conn.php');

$sqlSearchEmployee = 'SELECT * FROM itemcompany WHERE CompanyID = ' . $_POST['companyid'];
$resultSearchEmployee = $conn->query($sqlSearchEmployee);
if($resultSearchEmployee->num_rows > 0) {
    $sqlDelete = 'DELETE FROM itemcompany WHERE CompanyID = ' . $_POST['companyid'];
    if($conn->query($sqlDelete)) {
        $sql = 'INSERT INTO itemcompany (`CompanyID`,`CompanyName`) VALUES ("'.$_POST['companyid'].'","'.$_POST['companyname'].'") ';

        if(mysqli_query($conn,$sql)){
            echo'Form Has Been Updated';
        } else {
            echo $sql;
        }
    }
} else {
    $sql = 'INSERT INTO itemcompany (`CompanyID`,`CompanyName`) VALUES ("'.$_POST['companyid'].'","'.$_POST['companyname'].'") ';

    if(mysqli_query($conn,$sql)){

        echo'Form Has Been Submitted';
    }
    else{
        echo $sql;
    }
}

?>