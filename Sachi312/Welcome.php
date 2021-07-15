

<?php 

include_once'connection.php';

$Name=$_REQUEST['name'];
$Password=$_REQUEST['password'];
$Email=$_REQUEST['email'];
echo "we are inside the php code";
if (empty($Name)) {
	$name_error='Please insert your User name';
}
if (empty($Email)) {
	$name_error='Please insert your Email address';
}
if (empty($Password)) {
	$mail_error='Please insert your Password';
}

	if(empty($Name) OR empty($Email) OR empty($Password)){
}else{

	$query="INSERT INTO usertable(userName,	Email,Password)VALUES('$Name','$Email','$Password');";
	$insert=mysqli_query($connect,$query);

	if ($insert) {
			echo "data enterd succesully";
	}else{
	
		echo "data not entered".mysqli_error($connect);


	}
}

 ?>

