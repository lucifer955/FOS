<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'fosdbnew';

	$connection = mysqli_connect('localhost','root','','fosdbnew');

	//cheking the connection
	if(mysqli_connect_errno()){
		die('Database connection failed ' .  mysqli_connect_error());
	}

?>