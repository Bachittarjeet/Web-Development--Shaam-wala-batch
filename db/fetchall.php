<?php 
	include_once 'connection.php';
	
	$query = "select * from emp";
	$res = mysqli_query($con,$query); 
	$json = array();

	if(mysqli_num_rows($res)!=0){
		
		while($single = mysqli_fetch_array($res)){
			$json[] = $single;
		}	

	echo json_encode($json);	
	}else{
		echo "Khali Hai";
	}	
 ?>