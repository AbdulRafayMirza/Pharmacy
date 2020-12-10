<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM employees';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <tr>
            <td>'.$row['EmployeeName'].'</td>
            <td>'.$row['FatherName'].'</td>
            <td>'.$row['Dob'].'</td>
            <td>'.$row['Status'].'</td>
            <td>'.$row['Gender'].'</td>
            <td>'.$row['Salary'].'</td>
            <td>'.$row['Designation'].'</td>
            <td>'.$row['Address'].'</td>
            <td>'.$row['PersonalContact'].'</td>
            <td>'.$row['OfficialContact'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['GuarantorNic'].'</td>
        </tr>';
    }
?>