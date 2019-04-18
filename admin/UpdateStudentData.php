<?php
 
 
 	include('../dbconnect.php');
 	
    $sid=$_POST['sid'];
 	$roll=$_POST['rollno'];
 	$name=$_POST['name'];
 	$city=$_POST['city'];
 	$mobile=$_POST['mobile'];
 	$std=$_POST['std'];
 	$img=$_FILES['img']['name'];
 	$temp=$_FILES['img']['tmp_name'];

 	move_uploaded_file($temp,"../images/$img");

 	$sql="UPDATE `student` SET `roll no.`='$roll',`name`='$name',`city`='$city',`mobile`='$mobile',`standard`='$std',`image`='$img' WHERE id='$sid'";
 	$run=mysqli_query($conn,$sql);

 	if($run){
 		?>

 		<script >
 			alert("success");
 		</script>

 		<?php
 		header('location:update.php'); 
 	}

 	


 

?>