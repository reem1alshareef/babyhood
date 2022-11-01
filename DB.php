<?php
$serverName="localhost";
$DBUserName="root";
$DBpasswprd="";
$DBName="webproject";
 $conn = mysqli_connect($serverName,$DBUserName,$DBpasswprd,$DBName);
 if (!$conn) 
die("Connection failed: " . mysqli_connect_error());

