<?php
	$hostname = "localhost";
	$username = "root";
	$password = "123456";
	$dbName = "artanistest";
	
	$connect = mysqli_connect($hostname, $username, $password, $dbName);
	
	if(!$connect){
		DIE("Connection Failed!");
	}
?>
