<?php
function setcomments($conn){
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO comments(uid,date,message)VALUES('$uid','$date','$message')";
		$result = $conn->query($sql);
	}
}

function getcomments($conn){
	$sql = "SELECT * FROM comments ORDER BY date desc";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='container'><div class='row'><div class='commentbox'><p>";
			echo "<div class='username'>".$row['uid']."</div>";
			echo "<div class='msg'>".$row['date']."<br>";
			echo nl2br($row['message'])."<br>";
		echo "</div></p></div></div></div>";
	}

}



?>