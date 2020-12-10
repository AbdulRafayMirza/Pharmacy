<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM vendors';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['VendorID'].'</td>
            <td>'.$row['VendorName'].'</td>
            <td>'.$row['Responsible'].'</td>
            <td>'.$row['Phone'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['RegNo'].'</td>
            <td>'.$row['VendorType'].'</td>
        </tr>';
    }
?>