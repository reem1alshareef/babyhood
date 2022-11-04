<?php

if(isset($_POST["submit"])){         
    $kidsNames = $_POST["names"];
    $KidsAges = $_POST["ages"];
    $service = $_POST["service"];
    $otherServices= $_POST["otherServices"];
    $date = $_POST["date"];
    $Stime = $_POST["Stime"];
    $Etime = $_POST["Etime"];
   
    require_once 'DB.php';
    require_once 'function.php';
    
                                         
  
createRequest($conn,$kidsNames ,$KidsAges,$service,$otherServices,$date,$Stime,$Etime);
  }
else{
header("location:jobRequest.php");
}