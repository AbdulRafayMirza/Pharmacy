<?php
include_once('../conn.php');

$sqlSearchEmployee = 'SELECT * FROM Customers WHERE CusotmerID = ' . $_POST['customerid'];
$resultSearchEmployee = $conn->query($sqlSearchEmployee);
if($resultSearchEmployee->num_rows > 0) {
    $sqlDelete = 'DELETE FROM Customers WHERE CusotmerID = ' . $_POST['customerid'];
    if($conn->query($sqlDelete)) {
        $sql = 'INSERT INTO Customers (`CusotmerID`,`CustomerName`,`Category`,`Customertype`,`Phone`,`Address`,`Email`,`Class`,`Remarks`,`RegDate`) 
            VALUES ("'.$_POST['customerid'].'","'.$_POST['name'].'","'.$_POST['category'].'","'.$_POST['type'].'",
                "'.$_POST['phone'].'","'.$_POST['address'].'","'.$_POST['email'].'","'.$_POST['class'].'",
                "'.$_POST['remarks'].'","'.$_POST['regdate'].'") ';

        if(mysqli_query($conn,$sql)){
            echo'Form Has Been Updated';
        } else {
            echo $sql;
        }
    }
} else {
    $sql = 'INSERT INTO Customers (`CusotmerID`,`CustomerName`,`Category`,`Customertype`,`Phone`,`Address`,`Email`,`Class`,`Remarks`,`RegDate`) 
                VALUES ("'.$_POST['customerid'].'","'.$_POST['name'].'","'.$_POST['category'].'","'.$_POST['type'].'",
                        "'.$_POST['phone'].'","'.$_POST['address'].'","'.$_POST['email'].'","'.$_POST['class'].'",
                        "'.$_POST['remarks'].'","'.$_POST['regdate'].'") ';

    if(mysqli_query($conn,$sql)){
        echo'Form Has Been Submitted';
    }
    else{
        echo $sql;
    }
}
?>