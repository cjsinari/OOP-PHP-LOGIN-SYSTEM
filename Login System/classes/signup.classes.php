<?php

//Database-related classes

class Signup extends Dbh{
     
  protected function setUser($userid, $email, $password){ 
   $statement = $this->connect()->prepare('INSERT INTO users (users_userid, users_email, users_password	
   ) VALUES (?, ?, ?);');
   
   $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
   
   
   if(!$statement->execute(array($userid, $email, $hashedpassword))){
        $statement = null;
        header("location: ../index.php?error=statementfailed");
        exit();
   }  
   
   $statement = null;
}

  protected function checkUser($userid, $email){
   $statement = $this->connect()->prepare('SELECT users_userid FROM users WHERE users_userid = ? OR users_email = ?;');
   
   if(!$statement->execute(array($userid, $email))){
        $statement = null;
        header("location: ../index.php?error=statementfailed");
        exit();
   }  
   
   //$resultCheck;
   if($statement->rowCount() > 0){
      $resultCheck = false;
   }
    else{
      $resultCheck = true;
    }
  
   return $resultCheck;

}

}  