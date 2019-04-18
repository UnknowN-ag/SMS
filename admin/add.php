<?php 
	session_start();
	if($_SESSION['uid']){

	}
	else{
		header('location:../login.php');
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>INSERT</title>
 </head>
 <body>
 	<div>
		<a href="../logout.php">LogOut.</a>
	</div>
 	<div>
		<h1 align="center">Admin Dashboard.</h1>
	</div>
	<div>
		<form action="add.php" method="post" enctype="multipart/form-data">
			<table align="center" border="2px">
				<tr>
					<td colspan="2" align="center">ADD STUDENT</td>
				</tr>
				<tr>
					<td>Roll No.</td>
					<td><input type="number" name="rollno" required></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" required></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type="number" name="mobile" required></td>
				</tr>
				<tr>
					<td>Standard</td>
					<td><input type="number" name="std" required></td>
				</tr>
				<tr>
					<td>Image</td>
					<td><input type="file" name="img" required></td>
				</tr>
				<tr>
					
					<td colspan="2" align="center"><input type="submit" name="add" value="ADD"></td>
				</tr>
			</table>
		</form>
	</div>
 </body>
 </html>

<?php
 
 if(isset($_POST['add'])){
 	include('../dbconnect.php');
 	

 	$roll=$_POST['rollno'];
 	$name=$_POST['name'];
 	$city=$_POST['city'];
 	$mobile=$_POST['mobile'];
 	$std=$_POST['std'];
 	$img=$_FILES['img']['name'];
 	$temp=$_FILES['img']['tmp_name'];

 	move_uploaded_file($temp,"../images/$img");

 	$sql="INSERT INTO `student`( `roll no.`, `name`, `city`, `mobile`, `standard`, `image`) VALUES ('$roll','$name','$city','$mobile','$std','$img');";
 	$run=mysqli_query($conn,$sql);
 	if ($run) {
 		
 		?>
 		
 			<script>
 				alert("success");
 			</script>
 			<?php
 			
 	}

 	


 }

?>