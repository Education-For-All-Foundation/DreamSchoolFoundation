<?php 

include_once'connection.php';

$Name=$_REQUEST['name'];
$Email=$_REQUEST['mail'];
$Phone=$_REQUEST['phone'];
$Address=$_REQUEST['Address'];


if (empty($Name)) {
	$name_error='Please insert your Name';
}

if (empty($Email)) {
	$mail_error='Please insert your Email';
}

if (empty($Phone)) {
	$phone_error='Please insert your PhoneNumber';
}

if (empty($Address)) {
	$address_error='Please insert your Address';
}





	if(empty($Name) OR empty($Email) OR empty($Phone) OR empty($Address) ){
}else{

	$query="INSERT INTO donatertable(name,Email,phoneNumber,Address,userId)VALUES('$Name','$Email','$Phone','$Address',1);";
	$insert=mysqli_query($connect,$query);

	if ($insert) {
			echo "data enterd succesully";
	}else{
	
		echo "data not entered".mysqli_error($connect);


	}
}

 ?>