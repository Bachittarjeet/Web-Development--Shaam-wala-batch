<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>login page</title>

	<link rel="stylesheet" href="assets/css/pp.css">
			</head>
			<style>
			#loginbtn{
				background: green;
				font-size: 10px;
				padding: 10px;
				width: 30px;
				height: 10px;

			}
			#start{
				width: 300px;
				height: 400px;
				background: orange;
				margin-top: 30px;
				margin-left: 400px;
				border: 2px;
				border-color: black;
			}
			#first{
				background: green;
				font-size: 10px;
				width: 100%;
				height: 30px;
				border: 2px;
				border-color: black;
				

			}
			#sec{
				background: red;
				font-size: 10px;
				width: 100%;
				height: 370px;
				border:2px;
				border-color: black;
			}
			#close{
				background: blue;
				width: 20px;
				height: 100%;
				
				
			
			}
			#username{
				float: left;

				}
				#usein{
					float: left;


				}
				#pas{
				float: left;

				}
				#pasin{
					float: left;


				}
				#st1{
					height: 70px;
					width: 100%;
				}
				#st2{
					height: 70px;
					width: 100%;
				}
				#st3{
					height: 70px;
					width: 100%;
				}
				#mob{
				float: left;

				}
				#mobin{
					float: left;


				}
				#st4{
					height: 70px;
					width: 100%;
				}
				#btn1{
					width: 60px;
					
					float: right;
					margin: auto;
				}
				#btn2{
					width: 60px;
					
					float: right;
					margin: auto;
				}
				
				
				
				
			</style>
			<body>
				<form action="pp2.php" method="post">
				<div id="loginbtn">login</div>
				<div id="start">
					<div id="first">
						<div id="lo"><h1 ><center>LOGIN PAGE</center></h1></div>
							
					</div>
					<div id="sec">
						<div id="st1">
							<div id="username"> Username</div>
							<div id="usein"> <input type="text" placeholder="username"></div>
						</div>
						<div id="st2">
							<div id="pas" font="20px">Password</div>
							<div id="pasin"><input type="Password"  placeholder="123..."></div>
						</div>
						<div id="st3">
							<div id="mob" font="10px">MOBILE</div>
							<div id="mobin"><input type="text"  placeholder="7888.."></div>
						</div>
						<div id="st4">
							<div id="bt1" ><input type="submit" name="submit"></div>
							<div id="btn2"><button>clear</button></div>
						</div>
					</div>
				</div>
			</form>
				
			</body>
			</html>			