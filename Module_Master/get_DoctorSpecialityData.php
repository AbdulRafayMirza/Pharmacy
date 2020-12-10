<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM doctorspeciality';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['SpecialityID'].'</td>
            <td>'.$row['Description'].'</td>
        </tr>';
    }
?>