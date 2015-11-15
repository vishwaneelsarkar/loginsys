<?php

	require 'core.inc.php';
	require 'connect.inc.php';

	if(loggedin()){
		echo 'youre in, <a href="logout.php">LOGOUT</a>';
	}

	else{
		include 'loginform.inc.php';
	}

?>