<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM banksetup';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['BankID'];
        echo'
        <tr id="'.$id.'" onclick="rowselect('.$id.');" data-name="'.$row['Name'].'" data-address="'.$row['Address'].'" data-contact="'.$row['Contact'].'" data-accountnumber="'.$row['AccountNumber'].'">
            <td>'.$row['BankID'].'</td>
            <td>'.$row['Name'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['Contact'].'</td>
            <td>'.$row['AccountNumber'].'</td>
        </tr>';
    }
?>