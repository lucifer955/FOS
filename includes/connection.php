<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'food_ordering_system';

	$connection = mysqli_connect('localhost','root','','food_ordering_system');

	//cheking the connection
	if(mysqli_connect_errno()){
		die('Database connection failed ' .  mysqli_connect_error());
	}

?>