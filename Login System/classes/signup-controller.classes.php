<?php

//Changes in db


class SignupController extends Signup{
  //Properties and methods
  private $userid;
  private $email;
  private $password;
  private $passwordrpt;

  //data from user
  public function __construct($userid, $email, $password, $passwordrpt){
    $this->userid = $userid;
    $this->email = $email;
    $this->password = $password;
    $this->passwordrpt = $passwordrpt;
    
 }

 public function signupUser(){
    if($this->emptyInput() == false){
      //echo "Empty input!";
      header("location: ../index.php?error=emptyinput");
      exit();
    }

    if($this->invalidUserId() == false){
      //echo "Invalid username!";
      header("location: ../index.php?error=username");
      exit();
    }
 
    if($this->invalidEmail() == false){
      //echo "Invalid email!";
      header("location: ../index.php?error=email");
      exit();
    }
 
    if($this->passwordMatch() == false){
      //echo "Passwords do not match!";
      header("location: ../index.php?error=passwordmatch");
      exit();
    }
 
 
    if($this->userIdTakenCheck() == false){
      //echo "Username or email taken!";
      header("location: ../index.php?error=useroremailtaken");
      exit();
    }
   
    $this->setUser($this->userid, $this->email, $this->password, $this->passwordrpt);
   
  
  }
 
 //error handlers
 private function emptyInput(){
    $result = false;
    if(empty($this->userid) || empty($this->email) || empty($this->password) || empty($this-> passwordrpt)){
      $result = false;
    }
    else{
        $result = true;
    }
    return $result;
 }

 private function invalidUserId(){
  $result = false;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $this->userid)){
    $result = false;
  }
 else{
    $result = true;
  }
  return $result;

 }

 private function invalidEmail(){
    $result = false;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
      $result = false;
   }
   else{
     $result = true;
   }
   return $result;
 }

 private function passwordMatch(){
    $result = false;
    if($this->password !== $this->passwordrpt){
        $result = false;
    }
    else{
        $result = true;
    }
    return $result;
 }

 private function userIdTakenCheck(){
  $result = false;
  if(!$this->checkUser($this->userid, $this->email)){
      $result = false;
  }
  else{
      $result = true;
  }
  return $result;
}


}