<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

<?php

include_once'connection.php';

$query="SELECT * FROM usertable;";
$view=mysqli_query($connect,$query);

?>

<div class="container">
<table class="table">
<thead style="background-color: purple; color: white;">
		<th>UserID</th>
		<th>Email</th>
		<th>Password</th>
		<th>adminID</th>
	
	</thead>
	<tbody>
	<?php
		
while($row=mysqli_fetch_assoc($view)){
	echo "<tr><td>".$row['UserId']."</td><td>".$row['Email']."</td><td>".$row['Password']."</td><td>".$row['adminID']."</td></tr>";
}

echo "</table>";

?>

</table>
</div>
</body>
</html>







