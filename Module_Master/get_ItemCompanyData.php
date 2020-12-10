<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM itemcompany';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['CompanyID'].'</td>
            <td>'.$row['CompanyName'].'</td>
        </tr>';
    }
?>