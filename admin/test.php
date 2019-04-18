<?php 
	            
		            include('../dbconnect.php');
		            
	                 

	                 $sql="SELECT * FROM `student` WHERE name LIKE 'a%' and standard='5'";

	                 $run=mysqli_query($conn,$sql);

	                 if (mysqli_num_rows($run)<1) {
		                  echo "<td colspan='5' align='center'>no data found</td>";
	                 }
	                 else{
	                 	 echo "string";
	                 		
	                 	}
	                 
                
            ?>