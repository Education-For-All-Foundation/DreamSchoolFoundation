<html>

<head>
    <title>login and registration form</title>
    <link rel="stylesheet" href="style.css" </head>

    <body>



        <div class="container">
            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-front">
                        <h2>SIGN UP</h2>
                        <form method="GET" action="http://localhost/login/Welcome.php">
                            <input type="name" name="name" class="input-box" placeholder="User ID" required>
                            <input type="email" name="email" class="input-box" placeholder="Email" required>
                            <input type="Password" name="password" class="input-box" placeholder="Password" required>

                            <input type="Password" class="input-box" placeholder="Confirm Password" required>

                              <button type="submit" class="submit-btn">submit</button>
                         
                        </form>




 <h2>LOGIN</h2>
                        <form method="GET" action="http://localhost/login/HomePage.php">
                            <input type="name" name="name" class="input-box" placeholder="User ID" required>
                              <input type="Password" name="password" class="input-box" placeholder="Password" required>

                              <button type="submit" class="submit-btn">submit</button>






                </div>
            </div>
        </div>
    </body>

</html>