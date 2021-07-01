<?php
	date_default_timezone_set('Asia/Colombo');
	include 'func.php';
	include 'dbCon.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		echo "<div class='container'><div class='row'><form method='POST' action='".editcomments($conn)."'>
	<input type='hidden' name='cid' value='".$cid."'>
	<input type='hidden' name='uid' value='".$uid."'>
	<input type='hidden' name='date' value='".$date."'>
	<textarea name='message' required>".$message."</textarea><br>
	<button id='post' type='submit' name='commentSubmit'>Edit</button>
	</form></div></div>";

	?>
</body>
</html>