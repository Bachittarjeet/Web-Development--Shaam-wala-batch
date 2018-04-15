<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Login Page	
	</title>
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<form action="login_process.php" method="post">
		
		<table border="1" width="200px">
				<tr>
					<th colspan="2"> Login Form </th>
				</tr>
				<tr>
					<td>username</td>
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>password</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td colspan="2"> 
						<input type="submit" name="submit">
					</td>
				</tr>
			</table>	


	</form>
</body>
</html>