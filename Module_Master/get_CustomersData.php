<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM customers';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['CustomerName'].'</td>
            <td>'.$row['Category'].'</td>
            <td>'.$row['Customertype'].'</td>
            <td>'.$row['Phone'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['Class'].'</td>
            <td>'.$row['Remarks'].'</td>
            <td>'.$row['RegDate'].'</td>
        </tr>';
    }
?>