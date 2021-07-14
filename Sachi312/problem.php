<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$add_problem = $_POST['add_problem'];

$email_from='sahanyapieris@gmail.com';

$email_subject = "Add problems";

$email_body = "User Name:$name.\n".
                "User Email: $visitor_email.\n".
                   "User add_problem: $add_problem.\n";

$to = "kushanikaushlya456@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: problems.html");



?>

