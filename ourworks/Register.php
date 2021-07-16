<?php
	date_default_timezone_set('Asia/Colombo');
	include 'func.php';
	include 'dbCon.php';
?>

<html>
<Head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Goldman:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</Head>
	<body>
		<?php
		echo "
		<div class='container'>
			<h1>Registration Form</h1>
			<form method='POST' action='".register($conn)."'>

				<div class='input'>
					<input type='text' name='uid' required=''>
					<label>Please Enter Your Full Name</label>
					<span></span>
				</div>

				<div class='input'>
					<input type='Password' name='pwd' required=''>
					<label>Enter Your Password</label>
					<span></span>
				</div>

				
				<div class='buttons'>
						<input type='submit' name='reg' value='Register' class='btn'>
						<input type='reset' name='' class='btn'>
				</div>
			</form>
		</div>";
		?>
	</body>
</html>