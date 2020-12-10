<?php
include_once('../conn.php');

$sql = 'INSERT INTO doctorprofile (`DoctorID`,`Name`,`NickName`,`Phone`,`Address`,`Email`,`Sex`,`Speciality`) 
            VALUES ("'.$_POST['id'].'","'.$_POST['name'].'","'.$_POST['nickname'].'","'.$_POST['phone'].'",
                    "'.$_POST['address'].'","'.$_POST['email'].'","'.$_POST['sex'].'","'.$_POST['speciality'].'") ';

if(mysqli_query($conn,$sql)){
    
    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>