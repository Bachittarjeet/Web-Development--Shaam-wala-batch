<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();

	if(isset($_SESSION["loggedIn"])){
		header("Location:admin.php?m=1");
	}

?>
<head>
	<meta charset="UTF-8">
	<title>
		Login Page
	</title>
	<style>
		.red{color: red;}
		.green{ color: green; }
	</style>
</head>
<body>
	<form action="service.php" method="post">
	
	<?php 
		if(isset($_GET["m"])){
			
			if($_GET["m"]==1){
				echo "<p class='red'>Invalid Username/Password</p>";
			} else if($_GET["m"]==2){
				echo "<p>Please Login First</p>";
			} else {
				echo "<p class='green'>Successfully Logged Out</p>";

			}



		}
	 ?>

	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="subBtn"></td>
		</tr>
	</table>
	</form>
</body>
</html>