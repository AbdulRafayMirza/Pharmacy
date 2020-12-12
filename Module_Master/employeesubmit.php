<?php
include_once('../conn.php');
// print_r($_POST);
$employeeid = $_POST['employeeid'];
$employeename = $_POST['employeename'];
$fathername = $_POST['fathername'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$bloodgroup = $_POST['bloodgroup'];
$address = $_POST['address'];

$designation = $_POST['designation'];
$salary = $_POST['salary'];
$officialcontact = $_POST['officialcontact'];
$personalcontact = $_POST['personalcontact'];
$email = $_POST['email'];
$image = $_FILES['image'];
$active = (isset($_POST['active'])) ? $_POST['active'] : '0';

$guarantorname = $_POST['guarantorname'];
$guarantoraddress = $_POST['guarantoraddress'];
$guarantorcontact = $_POST['guarantorcontact'];
$guarantornic = $_POST['guarantornic'];

$sqlSearchEmployee = 'SELECT * FROM employees WHERE EmployeeID = ' . $employeeid;
$resultSearchEmployee = $conn->query($sqlSearchEmployee);
if($resultSearchEmployee->num_rows <= 0) {
    $sql = 'INSERT INTO employees (`EmployeeID`,`EmployeeName`,`FatherName`,`Dob`,`Gender`,`Status`,`BloodGroup`,
        `Address`,`Designation`,`Salary`,`OfficialContact`,`PersonalContact`,`Email`,
        `Image`,`Active`,`GuarantorName`,`GuarantorAddress`,`GuarantorContact`,`GuarantorNic`) 
        VALUES ("'.$employeeid.'","'.$employeename.'","'.$fathername.'","'.$dob.'","'.$gender.'",
            "'.$status.'","'.$bloodgroup.'","'.$address.'","'.$designation.'","'.$salary.'",
            "'.$officialcontact.'","'.$personalcontact.'","'.$email.'","'.$image['name'].'","'.$active.'",
            "'.$guarantorname.'","'.$guarantoraddress.'","'.$guarantorcontact.'","'.$guarantornic.'")';
            
    if(mysqli_query($conn, $sql)) {
        $target_dir = 'uploads/';
        $target_file = $target_dir . basename($image['name']);  
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            echo "The file ". basename($image['name']). " has been uploaded.";
        }
        // header('location: employees.php');
    }
    else{
        echo $sql;
    }
} 
else {
    if(isset($image['name']) && $image['name'] != '') {
        $sql = 'UPDATE employees SET `EmployeeName` = "'.$employeename.'", `FatherName` = "'.$fathername.'", `Dob` = "'.$dob.'", 
        `Gender` = "'.$gender.'", `Status` = "'.$status.'", `BloodGroup` = "'.$bloodgroup.'", 
        `Address` = "'.$address.'", `Designation` = "'.$designation.'", `Salary` = "'.$salary.'", 
        `OfficialContact` = "'.$officialcontact.'", `PersonalContact` = "'.$personalcontact.'", `Email` = "'.$email.'", 
        `Image` = "'.$image['name'].'", `Active` = "'.$active.'", `GuarantorName` = "'.$guarantorname.'", 
        `GuarantorAddress` = "'.$guarantoraddress.'", `GuarantorContact` = "'.$guarantorcontact.'", `GuarantorNic` = "'.$guarantornic.'"
        WHERE `EmployeeID` = "' . $employeeid . '"';
        if(mysqli_query($conn, $sql)) {
            $target_dir = 'uploads/';
            $target_file = $target_dir . basename($image['name']);  
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                echo "The file ". basename($image['name']). " has been uploaded.";
            }
            // header('location: employees.php');
        }
        else{
            echo $sql;
        }
    } else {
        $sql = 'UPDATE employees SET `EmployeeName` = "'.$employeename.'", `FatherName` = "'.$fathername.'", `Dob` = "'.$dob.'", 
        `Gender` = "'.$gender.'", `Status` = "'.$status.'", `BloodGroup` = "'.$bloodgroup.'", 
        `Address` = "'.$address.'", `Designation` = "'.$designation.'", `Salary` = "'.$salary.'", 
        `OfficialContact` = "'.$officialcontact.'", `PersonalContact` = "'.$personalcontact.'", `Email` = "'.$email.'", 
        `Active` = "'.$active.'", `GuarantorName` = "'.$guarantorname.'", 
        `GuarantorAddress` = "'.$guarantoraddress.'", `GuarantorContact` = "'.$guarantorcontact.'", `GuarantorNic` = "'.$guarantornic.'"
        WHERE `EmployeeID` = "' . $employeeid . '"';
        if(mysqli_query($conn, $sql)) {
            echo 'Updated successfully';
        }
        else{
            echo $sql;
        }
    }
}
