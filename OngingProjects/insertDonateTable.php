<?php 

include_once'connection.php';

$Amount=$_REQUEST['amount'];

if (empty($Name)) {
	$amount_error='Please insert Amount';
}


if(empty($Amount)){


}else{


$query="INSERT INTO donatetable(Amount,projectId)VALUES('$Amount',1);";
$insert=mysqli_query($connect,$query);

if ($insert) {
	echo "data enterd succesully";
}else{
	echo "data not entered".mysqli_error($connect);
}


}




 ?>