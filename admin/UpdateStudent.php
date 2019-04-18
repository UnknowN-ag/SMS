<?php
	session_start();
	if (isset($_SESSION['uid'])) {
		
	}
	else{
		header('location:../login.php');
	}

	include('../dbconnect.php');
	$sid=$_REQUEST['sid'];

	$sql="SELECT * FROM `student` WHERE id='$sid'";
	$run=mysqli_query($conn,$sql);

	$data=mysqli_fetch_assoc($run);
	$id=$data['id'];
	$roll=$data['roll no.'];
	$name=$data['name'];
	$city=$data['city'];
	$mobile=$data['mobile'];
	$std=$data['standard'];
	$img=$data['image'];




?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Update Student</title>
 </head>
 <body>
 	<div>
		<a href="../logout.php">LogOut.</a>
	</div>
 	<div>
		<h1 align="center">Admin Dashboard.</h1>
	</div>
	<div>
		<form action="UpdateStudentData.php" method="post" enctype="multipart/form-data">
			<table align="center" border="2px">
				<tr>
					<td colspan="2" align="center">ADD STUDENT</td>
				</tr>
				<tr>
					<td>Roll No.</td>
					<td><input type="number" name="rollno" value="<?php echo $roll; ?>" required></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $name; ?>" required></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="<?php echo $city; ?>" required></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type="number" name="mobile" value="<?php echo $mobile; ?>" required></td>
				</tr>
				<tr>
					<td>Standard</td>
					<td><input type="number" name="std" value="<?php echo $std; ?>" required></td>
				</tr>
				<tr>
					<td>Image</td>
					<td><input type="file" name="img"  required></td>
				</tr>
				<tr>
					
					<td colspan="2" align="center">
						<input type="hidden" name="sid" value="<?php echo $id; ?>">
						<input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div>
 </body>
 </html>