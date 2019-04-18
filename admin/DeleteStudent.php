<?php
 
 
 	include('../dbconnect.php');
 	
    $sid=$_REQUEST['sid'];

 	

 	$sql="DELETE FROM `student` WHERE id='$sid';";
 	$run=mysqli_query($conn,$sql);

 	if($run){
 		?>

 		<script >
 			alert('success');
 			window.location='delete.php';
 		</script>


 		<?php
 		
 	}

 	


 

?>