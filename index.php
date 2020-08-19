<?php
/* Full Name: Muembo Ilunga Michel
 * Student Number : 218303335
 * Started : 14/7/2020
 * Done : 23/7/2020.
 */
// including db_connection file
    include('db_connection.php')
// This page is the front or the first page the user will see, meaning the login page
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <!-- bootstrap link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
    <!-- css link-->
    <link rel="stylesheet" href="style.css">
</head>
<div class="nav">
    <h6 class="text text-white">@Developing by Muembo Ilunga Michel</h6>
</div>
<body>

<div class="wrapper">
    <form method="post" action="index.php">

        <?php
        // including errors.php file
        include('errors.php');
        ?>
        <fieldset>
            <legend style="text-align:center; color: black;"> Log In</legend>
            <input class="form-control"  type="text" name="username" placeholder="Username" required="true" ><br>
            <input class="form-control"  type="password" name="password" placeholder="Password" required="true"><br><br>

            <button type="submit" name="login" class="btn btn-primary">Log In</button>
            <br><br><br><br><br>
            <p style="text-align:left;">Need an account ? <a href="register.php"> Register</a></p>

        </fieldset>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
