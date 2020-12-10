<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM othercompanies';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['CompanyName'].'</td>
            <td>'.$row['Owner'].'</td>
            <td>'.$row['Phone'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['CompanyType'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['Remarks'].'</td>
        </tr>';
    }
?>