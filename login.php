<?php 
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:admin/dashboard.php');
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
</head>
<body>
	<h1 align="center">ADMIN LOGIN</h1>
	<form action="login.php" method="post">
		<table border="2px" align="center">
			<tr >
				<td colspan="2" align="center">Admin Login</td>
				
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username" required="required"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" required="required"></td>
			</tr>
			<tr>
				
				<td colspan="2" align="center"><input type="submit" name="login" value="LOGIN">
			</tr></td>
		</table>
	</form>


</body>
</html>
<?php

	include('dbconnect.php');
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql="SELECT * FROM `admin` where username='$username' and password='$password';";
		$run=mysqli_query($conn,$sql);

		$row=mysqli_num_rows($run);
		if($row<1){
			echo "<script>alert('Username And Password Not Matched.');
			window.locatio='login.php';</script>";
		}
		else{
			while($data=mysqli_fetch_assoc($run)){
				$id=$data['id'];
				echo "id=".$data['id'];

				
				$_SESSION['uid']=$id;
				header('location:admin/dashboard.php');
			}
		}
		
	}
?>