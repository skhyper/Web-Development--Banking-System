<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "advanced_bank";

	$conn = mysqli_connect('localhost','root','','advanced_bank');

	if(!$conn){
		die("Could not connect to the database - Error:  ".mysqli_connect_error());
	}

?>