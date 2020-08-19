<?php
/* Full Name: Muembo Ilunga Michel
* Student Number : 218303335
* Started : 14/7/2020
* Done : 23/7/2020.
*/

// This page is where all functionality of the system is.

    // starting session

    session_start();

// declaring and initializing variables
$username = "";
$email    = "";
$errors = array();

// creating connection to the database
$conn = mysqli_connect('localhost', 'root', '', 'loginsystem');

// registering user to the database
if (isset($_POST['submit'])) {
    // checking character in the input field
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // validating form
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }

    // checking both password if they are matched
    if ($password_1 != $password_2) {
        array_push($errors, "<div class=\"alert alert-danger\">The two passwords Do not match.</div>");
    }

    // checking existing user in the database
    $check_user = "SELECT * FROM tbl_User WHERE username='$username' OR email='$email' LIMIT 1";
    // running query in the database
    $output = mysqli_query($conn, $check_user);

    //fetches a result row
    $user = mysqli_fetch_assoc($output);
    // if the user already exist
    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "<div class=\"alert alert-danger\">This username has been use already.</div>");
        }

        if ($user['email'] === $email) {
            array_push($errors, "<div class=\"alert alert-danger\">This email address already exist.</div>");
        }
    }

    // registering user with no error find
    if (count($errors) == 0) {
        // encrypting user password in the database for security measure
        $password = md5($password_1);

        // inserting user details in the database table.
        $statement = "INSERT INTO tbl_User (username, email, password)
  			  VALUES('$username', '$email', '$password')";

        // running query in the database
        mysqli_query($conn, $statement);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "<script>alert('Great! your account has been created successfully')</script>";


        // redirecting to the login page
        header('location: sucess.php');

    }
}
  // user login if the the login button is click
if (isset($_POST['login'])) {
    // checking character
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
 // validating form
    if (empty($username)) {
        array_push($errors, "This field is required");
    }
    if (empty($password)) {
        array_push($errors, "This field is required");
    }
// if no error found log user
    if (count($errors) == 0) {
        // encrypting password
        $password = md5($password);
        // selecting all the existing user from the database to check for existing user
        $statement= "SELECT * FROM tbl_User WHERE username='$username' AND password='$password'";
        // running our sql command or running query in the database
        $output = mysqli_query($conn, $statement);

        // Find rows in table
        if (mysqli_num_rows($output) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "<script>alert('Great! you are log In👍')</script>";
            //redirecting to welcome page or home page
            header('location: welcome.php');
        }else {
            array_push($errors, "<div class=\"alert alert-danger\">Wrong username or Password </br> Please try again.</div>");
        }
    }
}
?>














