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
	<script src="https://kit.fontawesome.com/a076d05399.js" ></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
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
echo "<div class='container'><div class='row'><form method='POST' action='".setcomments($conn)."'>
	<input type='hidden' name='uid' value='anonymous'>
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='message' required></textarea><br>
	<button id='post' type='submit' name='commentSubmit'>Post</button>
</form></div></div>";

getcomments($conn);
?>
</body>
</html>