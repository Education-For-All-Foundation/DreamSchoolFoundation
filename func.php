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
			echo "</div></p>
			<form class='delete-form' method='POST' action='".deletecomments($conn)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='DeleteComment'>DELETE</button></form>
			<form class='edit-form' method='POST' action='editcomment.php'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>EDIT</button></form>
				</div></div></div>";
	}

}

function editcomments($conn){
	if (isset($_POST['commentSubmit'])) {
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "UPDATE comments SET message='".$message."' WHERE cid='".$cid."'";
		$result = $conn->query($sql);
		header("Location: Comments.php");
	}
}


function deletecomments($conn){
	if (isset($_POST['DeleteComment'])) {
		$cid = $_POST['cid'];

		$sql = "DELETE FROM comments WHERE cid='".$cid."'";
		$result = $conn->query($sql);
		header("Location: Comments.php");
	}
}

?>