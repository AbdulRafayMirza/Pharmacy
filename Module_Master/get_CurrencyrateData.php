<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM currencyrate';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['Currency'].'</td>
            <td>'.$row['Rate'].'</td>
            <td>'.$row['Date'].'</td>
            <td>'.$row['CalculationMethod'].'</td>
        </tr>';
    }
?>