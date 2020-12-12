<?php
include_once('../conn.php');

$sqlSearchEmployee = 'SELECT * FROM vendors WHERE VendorID = ' . $_POST['vendorid'];
$resultSearchEmployee = $conn->query($sqlSearchEmployee);
if($resultSearchEmployee->num_rows > 0) {
    $sqlDelete = 'DELETE FROM vendors WHERE VendorID = ' . $_POST['vendorid'];
    if($conn->query($sqlDelete)) {
        $sql = 'INSERT INTO vendors (`VendorID`,`VendorName`,`Responsible`,`Phone`,`Address`,`Email`,`RegNo`,`VendorType`) 
            VALUES ("'.$_POST['vendorid'].'","'.$_POST['vendorname'].'","'.$_POST['responsible'].'","'.$_POST['phone'].'",
                "'.$_POST['address'].'","'.$_POST['email'].'","'.$_POST['regno'].'","'.$_POST['vendortype'].'") ';

        if(mysqli_query($conn,$sql)){
            echo'Form Has Been Updated';
        } else {
            echo $sql;
        }
    }
} else {
    $sql = 'INSERT INTO vendors (`VendorID`,`VendorName`,`Responsible`,`Phone`,`Address`,`Email`,`RegNo`,`VendorType`) 
                VALUES ("'.$_POST['vendorid'].'","'.$_POST['vendorname'].'","'.$_POST['responsible'].'","'.$_POST['phone'].'",
                        "'.$_POST['address'].'","'.$_POST['email'].'","'.$_POST['regno'].'","'.$_POST['vendortype'].'") ';

    if(mysqli_query($conn,$sql)){
        echo'Form Has Been Submitted';
    }
    else{
        echo $sql;
    }
}
?>