<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM items';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['ItemID'].'</td>
            <td>'.$row['BatchNumber'].'</td>
            <td>'.$row['ItemName'].'</td>
            <td>'.$row['ShortName'].'</td>
            <td>'.$row['PackingType'].'</td>
            <td>'.$row['Category'].'</td>
            <td>'.$row['Company'].'</td>
            <td>'.$row['TradePrice'].'</td>
            <td>'.$row['SellingPrice'].'</td>
            <td>'.$row['AlarmQuantity'].'</td>
            <td>'.$row['UnitsinPack'].'</td>
            <td>'.$row['PacksinCarton'].'</td>
            <td>'.$row['Barcode'].'</td>
            <td>'.$row['SellingPercent'].'</td>
            <td>'.$row['GST'].'</td>
            <td>'.$row['HSN'].'</td>
        </tr>';
    }
?>