<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM currencies';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['CurrenciesID'].'</td>
            <td>'.$row['Currency'].'</td>
            <td>'.$row['Symbol'].'</td>
        </tr>';
    }
?>