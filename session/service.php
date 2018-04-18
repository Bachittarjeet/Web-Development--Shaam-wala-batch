<?php 
	
	session_start();

	if(isset($_POST["subBtn"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username == "Admin" && $password=="1234"){
			
			$_SESSION["loggedIn"] = true;

			header("Location:admin.php");
		}
		else{
			header("Location:index.php?m=1");
		}
	}else{
		echo "Bad Request!!";
	}

 ?>