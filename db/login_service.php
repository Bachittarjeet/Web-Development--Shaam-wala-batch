<?php 
	
	include_once 'connection.php';

	if(isset($_POST["subBtn"])){
		
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		
		$query = "select * from emp where name='$username' and password='$password'";
		
		$res = mysqli_query($con,$query); 
		
		if(mysqli_num_rows($res)!=0){
			while($single = mysqli_fetch_array($res)){

				if($single['status']==1){
					echo "Valid";	
				}else{
					echo "You are blocked by admin";
				}	
			}
		}else{
			echo "Invalid ID Password!!!";
		}	
	}else{
		echo "Bad Request";
	}

 ?>