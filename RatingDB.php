<?php

$serverName="localhost";
$DBUserName="root";
$DBpasswprd="";
$DBName="webproject";
 $conn = mysqli_connect($serverName,$DBUserName,$DBpasswprd,$DBName);
 if (!$conn) 
die("Connection failed: " . mysqli_connect_error());
 

$Rating = $_POST['rate'];
$Review = $_POST['Review'];

$query = mysql_query("insert into rewiew and rate (Rating, Review) values('$Rating' , '$Review')") or die(mysql_error());


?>