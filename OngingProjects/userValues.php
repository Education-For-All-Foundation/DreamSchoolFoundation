<?php

                        include_once'connection.php';
                        $result1=mysqli_query($connect,'SELECT Email FROM `usertable` WHERE 1');
                        while($row=mysqli_fetch_array($result1)){



                        ?>

                    <h2>Person one</h2>
                     <label id="labelEmail">Email : </label>
                    <input type="text" id="emailField" placeholder="email" value="<?php echo $row['Email']; ?>">

<?php
                        }

                        ?>




