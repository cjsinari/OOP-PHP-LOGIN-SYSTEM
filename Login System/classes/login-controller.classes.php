<?php

//Changes in db

class LoginController extends Login{
  //Properties and methods
  private $userid;
  private $password;
  
  //data from user
  public function __construct($userid,  $password){
    $this->userid = $userid;
    $this->password = $password;
    
 }

 public function loginUser(){
    if($this->emptyInput() == false){
      //echo "Empty input!";
      header("location: ../index.php?error=emptyinput");
      exit();
    }

    $this->getUser($this->userid,  $this->password);
   
  }
 
 //error handlers
 private function emptyInput(){
    $result = false;
    if(empty($this->userid) || empty($this->password)){
      $result = false;
    }
    else{
        $result = true;
    }
    return $result;
 }
 

}