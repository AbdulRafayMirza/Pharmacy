<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM itemcompany';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['CompanyID'];
        echo'
        <tr id="'.$id.'" onclick="rowselect('.$id.');"  data-name="'.$row['CompanyName'].'">
            <td>'.$row['CompanyID'].'</td>
            <td>'.$row['CompanyName'].'</td>
        </tr>';
    }
?>