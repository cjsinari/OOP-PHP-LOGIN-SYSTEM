<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNARD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<center><h1>TIKEX</h1></center>

<div class= "navbar">     
 <a href="index.php">HOME</a>
 <a href="#">EVENTS</a>
 <a href="#">MY KART</a>
 <a href="#">CONTACT US</a>
 <a href="#">KREATE YOUR EVENT</a>

 <?php
   if(isset($_SESSION["userid"])){

 ?>
  <a href="#"><?php echo $_SESSION["userid"];?></a>
  <a href="includes/logout.inc.php">LOGOUT</a>
 <?php
  }
  else {
?>
 
<div class= "login">
    <a href="#">SIGN UP</a>
    <a href="#">LOGIN</a>
<?php
  }
  ?>    
</div>

</div>


<!--<div class="text">
        <div class="wrapper">
          <div class="index-intro-c1">
            <div class="photo"></div>
            <p>"insert text here"</p>
          </div>  -->

          
<h2>Don't miss the hottest events!</h2>

 <div class= "signup-form">
      <h4>SIGN UP</h4>
      <p>Don't have an account? Sign up here</p>
      <form action="includes/signup.inc.php" method="POST">
      <input type="text" name="userid" placeholder="Username"><br>
      <input type="text" name="email" placeholder="Email"><br>
      <input type="password" name="password" placeholder="Password"><br>
      <input type="password" name="passwordrpt" placeholder="Repeat Password">       
      <br>
      <button type="submit" name="submit">SIGN UP</button>
      </form>  
</div>


 <div class= "login-form">
     <h4>LOGIN</h4>
     <form action="includes/login.inc.php" method="POST">
     <input type="text" name="userid" placeholder="Username"><br>
     <input type="password" name="password" placeholder="Password">
     <br>
     <button type="submit" name="submit">LOGIN</button>
     </form>
 </div>


<center> <h5>**MADE BY: CJ SINARI**</h5></center>



</body>
</html>