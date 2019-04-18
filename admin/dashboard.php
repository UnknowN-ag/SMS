<?php
	session_start();
	if(isset($_SESSION['uid'])){
		echo "";
	}
	else{
		header('location:../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<div>
		<h1 align="center">Admin Dashboard.</h1>
	</div>
	<div>
		<table align="center" border="2px">
			<tr>
				<td>1.</td><td><a href="add.php">Insert Student Details </a></td>
			</tr>
			<tr>
				<td>1.</td><td><a href="update.php">Update Student Details </a></td>
			</tr>
			<tr>
				<td>1.</td><td><a href="delete.php">Delete Student Details </a></td>
			</tr>
		</table>
	</div>
	<div>
		<a href="../logout.php">LogOut.</a>
	</div>
</body>
</html>