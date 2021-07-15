<?php
include_once 'connection.php';

$emailName = $_POST['emailField'];
$oldPassword = $_POST['OldpasswordField'];
$newPassword = $_POST['NewpasswordField'];
$q1 = "SELECT * FROM usertable WHERE Email = '" . $emailName . "'";
$result1 = mysqli_query($connect, $q1);
if ($row = mysqli_fetch_assoc($result1)) {
    
    if ($oldPassword == $row['Password']) {
        $query = "UPDATE usertable SET Password='".$newPassword."' WHERE Email='".$emailName."'";
        if (mysqli_query($connect, $query)) {
            echo 'Password Update success.!';
        } else {
            echo 'Password Update fail.!';
        }
    } else {
        echo "Sorry!!!Your old Password is not matched!!";
    }
}
?>

