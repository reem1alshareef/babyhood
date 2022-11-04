<?php

function idExists($conn,$ID){
    $sql = "SELECT * FROM babysitter where ID = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:signUpAsBabysitter.php?error=stmtfailed");
        exit();}

    mysqli_stmt_bind_param($stmt,"i",$ID);
    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData )){
       return $row; 
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}
function emailExists($conn,$email){
    $sql = "SELECT * FROM babysitter where Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:signUpAsBabysitter.php?error=stmtfailed");
        exit();}

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData )){
       return $row; 
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}
function phoneExists($conn,$phone){
    $sql = "SELECT * FROM babysitter where Phone = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: signUpAsBabysitter.php?error=stmtfailed");
        exit();}

    mysqli_stmt_bind_param($stmt,"i",$phone);
    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData )){
       return $row; 
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}
function phoneinvalid($conn,$phone){
 $result;
 if(! preg_match('/^[0-9]{10}+$/', $phone)){
 $result = true;}
 else{
    $result = false; 
 }
return $result;

}
function IDinvalid($conn,$ID){
    $result;
    if(! preg_match('/^[0-9]{8}+$/', $ID)){
    $result = true;}
    else{
       $result = false; 
    }
   return $result;
   
   }
   function ageinvalid($conn,$age){
    $result;
    if(! preg_match('/^[0-9]{2}+$/', $age)){
    $result = true;}
    else{
       $result = false; 
    }
   return $result;
   
   }
function createUser($conn,$FirstName,$LastName,$ID,$age,$email,$gender,$photo,$psw,$phone,$city,$bio){
    $sql = "INSERT INTO babysitter(FirstName,LastName,ID,Age,Gendre,Email,Photo,Pass,Phone,City,Bio) VALUES(?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt,$sql)){
        header("location:signUpAsBabysitter.php?error=stmtfailed");
        exit();}

    mysqli_stmt_bind_param($stmt,"ssiissssiss",$FirstName,$LastName,$ID,$age,$email,$gender,$photo,$psw,$phone,$city,$bio);
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
    header("location: signUpAsBabysitter.php?error=none");
        exit();
}
function createRequest($conn,$kidsNames,$KidsAges,$service,$otherServices,$date,$Stime,$Etime){
    $sql = "INSERT INTO request list(KidsName,KidsAges,Services,OtherServices,Dates,StartTime,EndTime) VALUES(?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt,$sql)){
        header("location:jobRequest.php?error=stmtfailed");
        exit();}

    mysqli_stmt_bind_param($stmt,"ssissss",$kidsNames ,$KidsAges,$service,$otherServices,$date,$Stime,$Etime);
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
    header("location:jobRequest.php?error=none");
        exit();
}

