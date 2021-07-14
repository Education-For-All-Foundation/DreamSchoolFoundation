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

	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo">DesignX</label>
		<ul>
			<li><a  href="#">Home</a></li>
			<li><a href="#">On going projects</a></li>
			<li><a href="#">Who are we?</a></li>
			<li><a href="ourworks.html">Our works</a></li>
			<li><a href="#">Join with us</a></li>
			
		</ul>
	</nav>


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