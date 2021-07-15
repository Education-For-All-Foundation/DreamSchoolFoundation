

<?php 

include_once'connection.php';

$Name=$_REQUEST['Name'];

$Email=$_REQUEST['email'];
$School_Name=$_REQUEST['School_Name'];
$School_District=$_REQUEST['School_District'];
$Description=$_REQUEST['Description'];
$Problem_Title=$_REQUEST['Problem_Title'];


echo "we are inside the php code";
if (empty($Name)) {
	$name_error='Please insert your User name';
}
if (empty($Email)) {
	$name_error='Please insert your Email address';
}
if (empty($School_Name)) {
	$name_error='Please insert your School_Name';
}if (empty($School_District)) {
	$name_error='Please insert your School_District';
}if (empty($Description)) {
	$name_error='Please insert your Description';
}
if (empty($Problem_Title)) {
	$mail_error='Please insert Problem_Title';
}

	if(empty($Name) OR empty($Email) OR empty($School_Name) OR empty($School_District)  OR empty($Description) OR empty($Problem_Title)){
}else{

	$query="INSERT INTO problem table(schoolName,schoolDistrict,description,problemTitle)VALUES('$Name','$Email','$School_Name','$School_District','$Description','$Problem_Title');";
	$insert=mysqli_query($connect,$query);

	if ($insert) {
			echo "data enterd succesully";
	}else{
	
		echo "data not entered".mysqli_error($connect);


	}
}

 ?>

