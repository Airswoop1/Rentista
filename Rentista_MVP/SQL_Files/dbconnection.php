<?php
/*
Database Connection File
2/7/13
*/

$dbcon = null;
$username = "airswoop1";
$password = "kalm";
$host = "localhost";
$database = "RentistaMVP";

if(!$dbcon){
	$dbcon = new mysqli($host, $username, $password, $database);
}
if(!$dbcon){ 
	die('Could not connect: '.mysql_error());
}

?>	