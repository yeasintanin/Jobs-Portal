<?php
 
//MySQLi Procedural
$conn=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>