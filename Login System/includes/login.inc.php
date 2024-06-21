<?php

//Getting the data
if(isset($_POST["submit"]))
{
    $userid = $_POST["userid"];
    $password = $_POST["password"];

//Instantiate Login Controller class
include "../classes/dbh.classes.php";
include "../classes/login.classes.php";
include "../classes/login-controller.classes.php";
$login = new LoginController($userid, $password);


//Running error handlers and user login
$login->loginUser();

//Going back to front page
header("location: ../index.php?error=none");


}