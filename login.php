<?php 
$con=mysqli_connect("localhost","intern","root","root");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table >
	<form method="POST" action="">
		<tr>
			<th>Login Gate</th>

		</tr>
		<tr>
			<td>Email-Id</td>
			<td><input type="email" name="email" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="Login"></td>
			<td><a href="">Register</a></td>
		</tr>
	</form>
</table>
</body>
</html>