<?php
include_once('../conn.php');

$sql = 'INSERT INTO vendors (`VendorID`,`VendorName`,`Responsible`,`Phone`,`Address`,`Email`,`RegNo`,`VendorType`) 
            VALUES ("'.$_POST['vendorid'].'","'.$_POST['vendorname'].'","'.$_POST['responsible'].'","'.$_POST['phone'].'",
                    "'.$_POST['address'].'","'.$_POST['email'].'","'.$_POST['regno'].'","'.$_POST['vendortype'].'") ';

if(mysqli_query($conn,$sql)){
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>