<html>

<head>
    <title>user can add problems</title>
    <link rel="stylesheet" type="text/css" href="sstyle.css">
</head>

<body>
    <div class="contact-title">
        <h1>Say Hello</h1>
        <h2>We are always ready to serve you:</h2>
    </div>
    <div class="contact-form">
<form id="contact-form" method="post" action="wel.php">
        <form method="GET" action="http://localhost/login/wel.php"
                <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
<input name="school_name" type="text" class="form-control" placeholder="School Name" required><br>
<input name="school _district" type="text" class="form-control" placeholder="School District" required><br>
<input name="problem _title" type="text" class="form-control" placeholder="Problem Title" required><br>
                <textarea name="description" class="form-control" placeholder="Add  Problem" row="4" required></textarea><br>
                <input type="submit" class="form-control submit" value="SUBMIT">

            </form>
    </div>


</body>

</html>