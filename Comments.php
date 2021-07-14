<?php
	date_default_timezone_set('Asia/Colombo');
	include 'func.php';
	include 'dbCon.php';
	session_start();
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
		
		<!-- 	<link rel="stylesheet" type="text/css" href="new styles.css"> -->
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
			<label class="logo"><img src="pictures/Logo.png" class="logos"></label>
			<ul>
				<li><a  href="#">Home</a></li>
				<li><a href="#">On going projects</a></li>
				<li><a href="#">Who are we?</a></li>
				<li><a href="ourPworks.html">Our works</a></li>
				<li><a href="#">Join with us</a></li>
				
			</ul>
		</nav>
		<?php
			echo "<div class='containerlog'><div class='rowlog'>
						<form method='POST' action='".getlogin($conn)."'>
							<input placeholder='Username' type='text' name='uid' class='userNP'>
						<input placeholder='Password' type='password' name='pwd' class='userNP'><br></div></div><div class='containerlogbtn'><div class='rowlog'>
						<button class='log' type='submit' name='login'>Login</button>
				</form>";
			echo "<form method='POST' action='".logout()."'>
						<button class='log' type='submit' name='logout'>Logout</button>
				</form></div></div>";
			echo "<br><p align='center'>Or</p><div class='containerlogbtn'><div class='rowlog'>
						<button class='log' type='submit' name='login'>Register</button></div></div>";
				if (isset($_SESSION['id'])) {
						echo "<div class='container'><div class='row'><form method='POST' action='".setcomments($conn)."'>
							<input type='hidden' name='uid' value='".$_SESSION['id']."'>
							<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
							<textarea name='message' placeholder='Type your feedback here' required></textarea><br>
							<button id='post' type='submit' name='commentSubmit'>Post</button>
						</form></div></div>";
				}else{
					echo "<br><br><p align='center'>You need to be logged in to comment!</p>";
					echo "<br><br>";
				}
		getcomments($conn);
		?>
	</body>
</html>