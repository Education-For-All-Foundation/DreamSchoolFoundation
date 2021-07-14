<?php
$conn = mysqli_connect('localhost','root','','comment');
if (!$conn) {
	die("Connection Failed".mysqli_connect_error());
}
?>