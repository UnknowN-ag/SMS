<?php
	session_start();
	if (isset($_SESSION['uid'])) {
		
	}
	else{
		header('location:../login.php');
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<div>
		<a href="../logout.php">LOGOUT</a>
	</div>
	<div>
		<a href="dashboard.php">Dashboard</a>
	</div>
	<form action="update.php" method="post" >
		<table>
			<tr>
		<td>STD:<input type="number" name="std" required="required"></td>
		<td>NAME:<input type="text" name="name" placeholder="enter student name" required="required"></td>
		<td><input type="submit" name="submit"></td>
		</tr>
	</table>
	</form>
	<div>
		<table border="2px">
			<tr>
				<th>No.</th>
				<th>Namae</th>
				<th>Roll no.</th>
				<th>Image</th>
				<th>Edit</th>

			</tr>
			
				<?php 
	            if(isset($_POST['submit'])){
		            include('../dbconnect.php');
	

	                 

	                 $name=$_POST['name'];
	                 $std=$_POST['std'];

	                 $sql="SELECT * FROM `student` WHERE name LIKE '%$name%' and standard='$std'";

	                 $run=mysqli_query($conn,$sql);

	                 if (mysqli_num_rows($run)<1) {
		                  echo "<td colspan='5' align='center'>no data found</td>";
	                 }
	                 else{
	                 	$count=0;
	                 	 while($data=mysqli_fetch_assoc($run)){
	                 	 	$count++;
	                 	 	$name=$data['name'];
	                 	 	$roll=$data['roll no.']; 
	                 	 	$img=$data['image'];
	                 	 	$sid=$data['id'];

	                 	 	echo "<tr>
	                 	 	   <td>$count</td>
	                 	 	   <td>$name</td>
	                 	 	   <td>$roll</td>
	                 	 	   <td><img src='../images/$img' width='100px' height='100px' /></td>
	                 	 	   <td><a href='UpdateStudent.php?sid=$sid'>Edit</a></td>
	                 	 	   </tr>
	                 	 	";
	                 	 }
	                 		
	                 	}
	                 }
                
            ?>
			
			
			
		</table>
	</div>
</body>
</html>


			