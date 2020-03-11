<?php  
	
	session_start();

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '',time()-86400,'/'); // cookie name , value , cookie expiration time , effect where
	}

	session_destroy();

	header('Location: cashier_login.php?logout=yes');
?>