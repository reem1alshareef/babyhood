<?php

 if(isset($_POST["submit"])){         
    $FirstName = $_POST["Fname"];
    $LastName = $_POST["Lname"];
    $ID = $_POST["ID"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $photo= $_POST["photo"];
    $psw = $_POST["psw"];
    $phone= $_POST["phone"];
    $city= $_POST["Location"];
    $bio = $_POST["bio"];
    require_once 'DB.php';
    require_once 'function.php';

    
   
  if(uidExists($conn,$ID,$email) !== false){
    header("location../signUpAsBabysitter.php?error=IDtaken or email taken" ); 
                     exit();}
  
createUser($conn,$FirstName,$LastName,$ID,$age,$gender,$email,$photo,$psw,$phone,$city,$bio);
  }
else{
header("location../signUpAsBabysitter.php");
}

