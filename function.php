<?php

function uidExists($conn,$ID,$email){
    $sql = "SELECT * FROM babysitter where ID = ? OR  Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location../signUpAsBabysitter.php?error=stmtfailed");
        exit();}

    mysqli_stmt_bind_param($stmt,"is",$ID,$email);
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
function createUser($conn,$FirstName,$LastName,$ID,$age,$email,$gender,$photo,$psw,$phone,$city,$bio){
    $sql = "INSERT INTO babysitter(FirstName,LastName,ID,Age,Email,Gendre,Photo,Pass,Phone,City,Bio) VALUES(?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt,$sql)){
        header("location../signUpAsBabysitter.php?error=stmtfailed");
        exit();}

    mysqli_stmt_bind_param($stmt,"ssiissssiss",$FirstName,$LastName,$ID,$age,$email,$gender,$photo,$psw,$phone,$city,$bio);
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
    header("location../signUpAsBabysitter.php?error=none");
        exit();
}
