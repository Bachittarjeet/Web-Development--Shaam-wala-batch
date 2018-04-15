<?php 
	
	if(isset($_POST["submit"])){

	echo $_POST["username"]."<br>".$_POST["password"]."<br>".$_POST["mobile"];
	}else{
		echo "No testing Please!!!";
	}

?>