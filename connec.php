<?php

$hostName = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbName = "login_register";

if(!$con = mysqli_connect($hostName, $dbuser, $dbpassword, $dbName))
{
	die("Couldn't connect to the db!");
}

?>