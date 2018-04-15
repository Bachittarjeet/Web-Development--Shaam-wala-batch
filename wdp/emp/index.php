<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index Page</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		.red{
			color:red;
		}
		.green{
			color: green;
		}
	</style>
</head>
<body>
	<form name="frm" id="frm" action="service.php" method="post">
	<table border="1">
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name" id="name">
				<div id="errname"></div>
			</td>
		</tr>

		<tr>
			<td>Salary</td>
			<td>
				<input type="number" name="salary" id="salary">
				<div id="errnumber"></div>

			</td>
		</tr>
		
		<tr>
			<td colspan="2">
				<input type="button" value="login" name="login" id="login">
				<input type="button" value="cancel" name="cancel" id="cancel">
			</td>
		</tr>
	</table>
	</form>
	
	<script type="text/javascript" src="../assets/js/jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			//Validation Mobile
			$validName = false;
			$validSalary = false;

			$("#salary").blur(salary);
			
			function salary(){
				if($(this).val().length==0){
					$validSalary = false;
					$("#errnumber").html("Khali Hai").removeClass("green").addClass("red");
				}
				else{
					$validSalary = true;
					$("#errnumber").html("Kuch toh Hai").removeClass("red").addClass("green");
				}
			}

			//Validation Name
			$("#name").blur(name);
			function name(){
				if($(this).val().length==0){
					$validName = false;
					$("#errname").html("Khali Hai").removeClass("green").addClass("red");
				}
				else{
					$validName = true;
					$("#errname").html("Kuch toh Hai").removeClass("red").addClass("green");
				}
			}

			$("#login").click(function(){
				if($validName && $validSalary){
					
					$("#frm").submit();

					//alert("ok");
				}else{
					alert("NOt okay");
				}

			});

			$("#cancel").click(function(){
				$("#errname,#errnumber").html("");
			})


		});
	</script>
</body>
</html>