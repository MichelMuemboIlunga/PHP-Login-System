<?php
/* Full Name: Muembo Ilunga Michel
 * Student Number : 218303335
 * Started : 14/7/2020
 * Done : 23/7/2020.
 */
// This page is the main page of the website it's welcome the user after successful login


// session start
 session_start();

 // check if there's a session
if (!isset($_SESSION['username'])) {
    $_SESSION['message'] = "You must log in first";
    header('location: index.php');
}
/* when session is success and display the welcome page then once click logout
   the session is destroy.
*/

// destroying session after the user log out of the page and redirecting to the login page
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
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
<br>
<body>

<div class="text-white">
        <h5 class="nav-item">
            <i class="fa fa-home "></i>&nbsp;Home
        </h5>
</div>
<br>
<br>

<div class="content">
    <!-- success messages -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- welcome our user in the home page -->
    <?php  if (isset($_SESSION['username'])) : ?>


        <h5 class="text-center text-white">Welcome Mr,Mrs<h3 class="text-center text-white">
                <!--displaying the name of our user in upper case using strtoupper string function-->
                <?php echo strtoupper($_SESSION['username']); ?></h3>
        </h5>
    <br>
    <br>

            <h6 class="text-center text-white">Important Notice<br>
                <hr style="border: 2px solid white; width: 90px">
            </h6>
        <!-- pre formatted text -->
        <pre>
            <p class="text-white">
                Thanks for your patience of going through all the process for registering in our website
                And don't forget, your password and username  it's your passport to get in the site.
                So please do not forget it.

                Thanks and Enjoy 😎.
            </p>
        </pre>
        <h5><a href="index.php?logout='1'">⬅ Go back to Login page ↩ </a></h5>
    <?php endif ?>
</div>

</body>
</html>
