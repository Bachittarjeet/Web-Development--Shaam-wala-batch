<?php 
	//Indicates that we have to work with session
	session_start();

	//Destroy the session
	session_destroy();

	header("Location:index.php?m=3");


?>