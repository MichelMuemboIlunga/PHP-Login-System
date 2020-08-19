<?php
/* Full Name: Muembo Ilunga Michel
 * Student Number : 218303335
 * Started : 14/7/2020
 * Done : 23/7/2020.
 */
// including db_connection file
include('db_connection.php')
// This page just notify user when the registration process is successful.
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
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- css link-->
    <link rel="stylesheet" href="index.css">
</head>
<div class="nav">
    <h6 class="text text-white">@Developing by Muembo Ilunga Michel</h6>
</div>
<body>
<!-- message success when account created -->
<script>alert('Great! Your account has been successfully created')</script>

<div class="text-center text-white">
    <!-- link to to the login page -->
    <h1><a href="index.php">Login Now</a></h1>
</div>

</body>
</html>