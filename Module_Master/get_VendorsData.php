<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM vendors';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['VendorID'];
        echo'
        <tr  id="'.$id.'" onclick="rowselect('.$id.');" data-name="'.$row['VendorName'].'" data-responsible="'.$row['Responsible'].'" data-phone="'.$row['Phone'].'" data-address="'.$row['Address'].'" data-email="'.$row['Email'].'" data-regno="'.$row['RegNo'].'" data-vendortype="'.$row['VendorType'].'">
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