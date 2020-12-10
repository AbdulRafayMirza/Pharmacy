<?php
include_once('../conn.php');

$sql = 'INSERT INTO othercompanies (`OtherCompaniesID`,`CompanyName`,`Owner`,`Phone`,`Remarks`,`Email`,`CompanyType`,`Address`) 
            VALUES ("'.$_POST['id'].'","'.$_POST['companyname'].'","'.$_POST['owner'].'","'.$_POST['phone'].'",
                    "'.$_POST['remarks'].'","'.$_POST['email'].'","'.$_POST['companytype'].'","'.$_POST['address'].'") ';

if(mysqli_query($conn,$sql)){
    
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>