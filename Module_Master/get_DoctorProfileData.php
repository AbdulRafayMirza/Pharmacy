<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM doctorprofile';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['Name'].'</td>
            <td>'.$row['NickName'].'</td>
            <td>'.$row['Sex'].'</td>
            <td>'.$row['Phone'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['Speciality'].'</td>
        </tr>';
    }
?>