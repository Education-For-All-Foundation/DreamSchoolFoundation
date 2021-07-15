<?php 

include_once'connection.php';

$Name=$_REQUEST['name'];
$Password=$_REQUEST['password'];

if (empty($Name)) {
	$name_error='Please insert your User name';
}
if (empty($Password)) {
	$mail_error='Please insert your Password';
}

	if(empty($Name) OR empty($Password)){
}else{

	echo ($Name);
	$query="SELECT password FROM usertable WHERE userName=$Name;";
	$read=mysqli_query($connect,$query);

echo $Password;
	if ($read) {

			echo "data readsuccesully";
			if ($query==$Password){
				echo "Credentials are valid";
			}		
			else {echo "Invalid credentials";}
	}else{
	
		echo "data not read".mysqli_error($connect);


	}
}

 ?>

