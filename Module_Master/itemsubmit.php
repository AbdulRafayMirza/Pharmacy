<?php
include_once('../conn.php');

$sql = 'INSERT INTO items (`ItemID`,`BatchNumber`,`ItemName`,`ShortName`,`PackingType`,`Category`,
                                `Company`,`GST`,`SellingPrice`,`AlarmQuantity`,`UnitsinPack`,`Barcode`,
                                `TradePrice`,`SellingPercent`,`PacksinCarton`,`RFIDTag`,`HSN`) 
                VALUES ("'.$_POST['itemid'].'","'.$_POST['batchnumber'].'","'.$_POST['itemname'].'",
                        "'.$_POST['shortname'].'","'.$_POST['packingtype'].'","'.$_POST['category'].'",
                        "'.$_POST['company'].'","'.$_POST['gst'].'","'.$_POST['sellingprice'].'",
                        "'.$_POST['alarmquantity'].'","'.$_POST['unitsinpack'].'","'.$_POST['barcode'].'",
                        "'.$_POST['tradeprice'].'","'.$_POST['sellingpercent'].'","'.$_POST['carton'].'",
                        "'.$_POST['rfid'].'","'.$_POST['hsn'].'") ';

if(mysqli_query($conn,$sql)){

    echo'Form Has Been Submitted';
}
else{
    echo $sql;
}
?>