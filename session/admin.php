<?php 
	session_start();
	
	if(isset($_SESSION["loggedIn"])){
		
		if(isset($_GET["m"]))
			echo "<p style='color:green'>Welcome Back!!";	
		else
			echo "Logged In Hai!";
	}	
	else{

		header("Location: index.php?m=2");
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
</head>
<body>
	<h1>Welcome Admin!</h1>
	<a href="logout.php">Logout</a>
</body>
</html>