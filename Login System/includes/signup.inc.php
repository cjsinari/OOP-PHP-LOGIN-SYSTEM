<?php

//Getting the data
if(isset($_POST["submit"]))
{
    $userid = $_POST["userid"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordrpt = $_POST["passwordrpt"];
    


//Instantiate SignUp Controller class
include "../classes/dbh.classes.php";
include "../classes/signup.classes.php";
include "../classes/signup-controller.classes.php";
$signup = new SignupController($userid, $email, $password, $passwordrpt);


//Running error handlers and user signup
$signup->signupUser();


//Going back to front page
header("location: ../index.php?error=none");





}