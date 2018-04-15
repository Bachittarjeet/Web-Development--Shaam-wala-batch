<?php 
	$name  = $_POST["name"]; 
	$salary  = $_POST["salary"]; 

	if($salary >= 50000){
		//echo "Manager";

		header("location: page.php?name=".$name."&salary=".$salary."&type=Manager");

	}else{
		//echo "Employee";
		header("location: page.php?name=".$name."&salary=".$salary."&type=Employee");
		
	}
?>