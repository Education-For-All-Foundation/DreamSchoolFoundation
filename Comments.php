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
echo "<div class='container'><div class='row'><form method='POST' action='".setcomments($conn)."'>
	<input type='hidden' name='uid' value='anonymous'>
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='message' required></textarea><br>
	<button type='submit' name='commentSubmit'>Post</button>
</form></div></div>";

getcomments($conn);
?>
</body>
</html>