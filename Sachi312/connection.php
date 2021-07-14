<?php 

$connect=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connect,"dream_school");

if ($db) {
	echo "Database selected success";
}else{
	echo "dbtabse not selectd";
}



 ?>