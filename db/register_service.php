<?php 
	isset($_POST["subBtn"])?mysqli_num_rows(mysqli_query(mysqli_connect("localhost","root","","wdp"),"insert into emp(name,password,status) value('"+ $_POST["username"]+"','"+ md5($_POST["password"]) +"',1)"))? print("Data Saved!"):print("Nhi hua"):print("Bad Request");
 ?>