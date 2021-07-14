<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="userDetailStyles.css">
<link rel="stylesheet" media="(max-width:330px)" href="userStyleOne.css">
<link rel="stylesheet" media="(min-width:335px) and (max-width:400px)" href="userStyleThree.css">
<link rel="stylesheet" media="(max-width:450px)" href="userStyleFour.css">
<link rel="stylesheet" media="(max-width:1025px)" href="userStyleFive.css">
<link rel="stylesheet" media="(min-width:2560px) and (max-width:3000px)" href="userStyleTwo.css">


<head></head>
<body>
<div class="profle-area">

    <div class="conatiner">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="img1"><img src="../images/nature.jpeg"></div>
                    <div class="img2"><img src="../images/user.png"></div>
                    <form method="post" action="updateData.php">
                        <div class="main-text">
                            <?php
                            $result1 = mysqli_query($connect, 'SELECT Email FROM `usertable` WHERE 1');
                            $row = mysqli_fetch_array($result1);
                            ?>

                            <h2>Person one</h2>
                            <label id="labelEmail">Email : </label>
                            <input type="text" name="emailField" id="emailField" placeholder="email"
                                   value="<?php echo $row['Email']; ?>">

                            <label id="labeloldpassword">Old Password : </label>
                            <input type="password" name="OldpasswordField" id="OldpasswordField"
                                   placeholder="OldPassword">
                            <label id="labelnewpassword">New Password : </label>
                            <input type="password" name="NewpasswordField" id="NewpasswordField"
                                   placeholder="NewPassword">

                            <input type="submit" id="update" value="Update">
                            <input type="reset" id="cancel" value="Cancel">

                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

</div>


<div id="donationHistry">
    <h2 id="h2One">Donation History</h2>

    <?php

    include_once 'connection.php';

    $query = "SELECT * FROM donatetable;";
    $view = mysqli_query($connect, $query);

    ?>

    <div class="container" id="tableDiv">
        <table class="table">
            <thead style="background-color: purple; color: white;">
            <th>donateId</th>
            <th>Amount</th>
            <th>projectId</th>


            </thead>
            <tbody>
            <?php

            while ($row = mysqli_fetch_assoc($view)) {
                echo "<tr><td>" . $row['donateId'] . "</td><td>" . $row['Amount'] . "</td><td>" . $row['projectId'] . "</td></tr>";
            }

            echo "</table>";

            ?>

        </table>
    </div>

    <div id="problemHistry">
        <h2 id="h2Two">Problem History</h2>


        <?php
        include_once 'connection.php';
        $query = "SELECT * FROM probelmtable";
        $view = mysqli_query($connect, $query);
        ?>
        <div class="container" id="tableDiv2">
            <table class="table">
                <thead style="background-color: purple; color: white;">
                <tr>
                    <th>ProblemID</th>
                    <th>SchoolName</th>
                    <th>SchoolDistrict</th>
                    <th>Description</th>
                    <th>problemTitle</th>
                    <th>UserId</th>
                    <th>ProjectId</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($view)) {
                    ?>
                    <tr>
                        <td><?php echo $row['problemId']; ?></td>
                        <td><?php echo $row['schoolName']; ?></td>
                        <td><?php echo $row['schoolDistrict']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['problemTitle']; ?></td>
                        <td><?php echo $row['userId']; ?></td>
                        <td><?php echo $row['projectId']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>