<?php
include_once('../conn.php');

$sql = 'INSERT INTO company (`CompanyName`,`Phone`,`GSTIN`,`Address`,`CompanyOwner`,`Email`,`PAN`,`Remarks`) 
            VALUES ("'.$_POST['companyname'].'","'.$_POST['phone'].'","'.$_POST['gstin'].'","'.$_POST['address'].'",
                    "'.$_POST['companyowner'].'","'.$_POST['email'].'","'.$_POST['pan'].'","'.$_POST['remarks'].'") ';

if(mysqli_query($conn,$sql)){
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>