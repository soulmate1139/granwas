<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "id18395673_winners2022";
 $dbpass = "ovber_fo-1k%/m9A";
 $db = "id18395673_winners";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 { 
 $conn -> close();
 }
?>