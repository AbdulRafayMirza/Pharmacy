<?php
include_once('../conn.php');
    
$sql = 'SELECT * FROM employees';
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['EmployeeID'];
        echo'
        <tr id="'.$id.'" onclick="rowselect('.$id.');"  data-name="'.$row['EmployeeName'].'" data-father-name="'.$row['FatherName'].'" 
                                                        data-dob="'.$row['Dob'].'" data-gender="'.$row['Gender'].'" data-status="'.$row['Status'].'" 
                                                        data-blood-group="'.$row['BloodGroup'].'" data-address="'.$row['Address'].'" data-designation="'.$row['Designation'].'" 
                                                        data-salary="'.$row['Salary'].'" data-official-contact="'.$row['OfficialContact'].'" 
                                                        data-personal-contact="'.$row['PersonalContact'].'" data-email="'.$row['Email'].'" data-image="'.$row['Image'].'"
                                                        data-active="'.$row['Active'].'" data-guarantor-name="'.$row['GuarantorName'].'" 
                                                        data-guarantor-address="'.$row['GuarantorAddress'].'" data-guarantor-contact="'.$row['GuarantorContact'].'"
                                                        data-guarantor-cnic="'.$row['GuarantorNic'].'">
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