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
    
  if(phoneExists($conn,$phone)!== false){
    header("location: signUpAsBabysitter.php?error= phone number has been already taken!" ); 
                     exit();}
    if(emailExists($conn,$email) !== false){
       header("location: signUpAsBabysitter.php?error= email has been already taken!" ); 
                   exit();}
       if(idExists($conn,$ID)!== false){
      header("location: signUpAsBabysitter.php?error=ID has been already taken!" ); 
        exit();}  
        if(phoneinvalid($conn,$phone) !== false){
            header("location: signUpAsBabysitter.php?error= invalid phone number!" ); 
                             exit();}   
          if(IDinvalid($conn,$ID) !== false){
                                header("location: signUpAsBabysitter.php?error= invalid ID!" ); 
                                exit();}                                         
                                if(ageinvalid($conn,$age) !== false){
                                  header("location: signUpAsBabysitter.php?error= invalid age!" ); 
                                                   exit();}  
createUser($conn,$FirstName,$LastName,$ID,$age,$gender,$email,$photo,$psw,$phone,$city,$bio);
  }
else{
header("location:signUpAsBabysitter.php");
}