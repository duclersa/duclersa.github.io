<?php
	$host = "localhost";
	$Username = "root";
	$Password = "";
	$dbname = "project manager";
	
	$conn =  mysqli_connect($host, $Username, $Password, $dbname);
		if(!$conn) {
			die("Fail to connect");
		} 
		

?>