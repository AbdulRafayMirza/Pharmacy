<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM banksetup';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['BankID'].'</td>
            <td>'.$row['Name'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['Contact'].'</td>
            <td>'.$row['AccountNumber'].'</td>
        </tr>';
    }
?>