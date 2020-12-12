<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM customers';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['CusotmerID'];
        echo'
        <tr id="'.$id.'" onclick="rowselect('.$id.');"  data-name="'.$row['CustomerName'].'" data-category="'.$row['Category'].'" data-type="'.$row['Customertype'].'" data-phone="'.$row['Phone'].'" 
                                                        data-address="'.$row['Address'].'" data-email="'.$row['Email'].'" data-class="'.$row['Class'].'" data-remarks="'.$row['Remarks'].'" data-regdate="'.$row['RegDate'].'">
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